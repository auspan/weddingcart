sudo apt-get update


sudo apt-get install -y vim curl python-software-properties unzip
sudo apt-get install -y debconf-utils
sudo apt-add-repository -y ppa:ondrej/php
wget -q -O - https://jenkins-ci.org/debian/jenkins-ci.org.key | sudo apt-key add -
sudo sh -c 'echo deb http://pkg.jenkins-ci.org/debian binary/ > /etc/apt/sources.list.d/jenkins.list'
sudo apt-get update
sudo apt-get upgrade

export DEBIAN_FRONTEND="noninteractive"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get install -y mysql-server-5.6 mysql-client-core-5.6
sudo apt-get install jenkins
mysql_secure_installation

sudo apt-get install -y php7.0 php7.0-dev apache2 apache2-utils
sudo apt-get install -y libapache2-mod-php7.0 php7.0-curl php7.0-gd php7.0-mcrypt 
sudo apt-get install -y php7.0-readline php7.0-mysql git-core php7.0-mbstring php7.0-xml
############PHPMyadmin##############
echo "Installing Php Myadmin"
cd /usr/share
sudo wget -q https://files.phpmyadmin.net/phpMyAdmin/4.5.4.1/phpMyAdmin-4.5.4.1-all-languages.zip -o /var/www/xdeb.log
sudo unzip phpMyAdmin-4.5.4.1-all-languages.zip >> /var/www/install.log
sudo mv phpMyAdmin-4.5.4.1-all-languages /var/www/phpmyadmin
sudo chmod -R 0755 /var/www/phpmyadmin
############XDEBUG#########
echo "XDEBUG Setup"
cd ~
mkdir downloads
wget -q  -O ~/downloads/xdebug-2.4.0.tgz http://xdebug.org/files/xdebug-2.4.0.tgz -o /var/www/xdeb.log
cd downloads
tar -xvzf xdebug-2.4.0.tgz >> /var/www/install.log
cd xdebug-2.4.0*
phpize
./configure --enable-xdebug
make
sudo cp modules/xdebug.so /usr/lib/php/20151012
echo ";zend_extension = /usr/lib/php/20151012/xdebug.so" | sudo tee -a /etc/php/7.0/cli/php.ini
#################

#php7.0-xdebug
cat << EOF |  sudo tee -a /etc/php/7.0/mods-available/xdebug.ini
zend_extension = /usr/lib/php/20151012/xdebug.so

xdebug.scream=0
xdebug.remote_enable=1
;xdebug.remote_connect_back=1
xdebug.remote_port=9000
xdebug.cli_color=1
xdebug.show_local_vars=1
xdebug.idekey=PHPSTORM
xdebug.extended_info=1
xdebug.remote_host=10.0.2.2
EOF

sudo ln -s /etc/php/7.0/mods-available/xdebug.ini /etc/php/7.0/apache2/conf.d/20-xdebug.ini
sudo ln -s /etc/php/7.0/mods-available/xdebug.ini /etc/php/7.0/fpm/conf.d/20-xdebug.ini
sudo ln -s /etc/php/7.0/mods-available/xdebug.ini /etc/php/7.0/cli/conf.d/20-xdebug.ini
sudo /etc/init.d/php7.0-fpm restart
sudo a2enmod rewrite

sed -i "s/error_reporting =.*/error_reporting = E_ALL/" /etc/php/7.0/apache2/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php/7.0/apache2/php.ini
sed -i "s/disable_functions = .*/disable_functions = /" /etc/php/7.0/cli/php.ini

########################################
echo "Setting up virtual hosts"
cd /etc/apache2/sites-available
sudo cp 000-default.conf weddingcart.conf
sudo cp 000-default.conf phpmyadmin.conf
sudo cp 000-default.conf ubuntu.conf
sudo sed -i 's|/var/www/html|/var/www/weddingcart/public|' weddingcart.conf
sudo sed -i 's|#ServerName www.example.com|ServerName weddingcart.local|' weddingcart.conf
sudo sed -i '/DocumentRoot/ a \\t</Directory>' weddingcart.conf
sudo sed -i '/DocumentRoot/ a \\t\tRequire all granted' weddingcart.conf
sudo sed -i '/DocumentRoot/ a \\t\tAllowOverride All' weddingcart.conf
sudo sed -i '/DocumentRoot/ a \\t\tOptions Indexes FollowSymlinks' weddingcart.conf
sudo sed -i '/DocumentRoot/ a \\t<Directory /var/www/weddingcart/public>' weddingcart.conf
sudo sed -i 's|/var/www/html|/var/www/phpmyadmin|' phpmyadmin.conf
sudo sed -i 's|#ServerName www.example.com|ServerName phpmyadmin.local|' phpmyadmin.conf
sudo sed -i 's|/var/www/html|/var/www|' ubuntu.conf
sudo sed -i 's|#ServerName www.example.com|ServerName ubuntu.local|' ubuntu.conf
echo "Enabling Sites"
sudo a2ensite weddingcart ubuntu phpmyadmin weddingcart

cd ~
#sudo service apache2 reload
sudo service apache2 restart

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "Creating database and db user"
mysql -u root -proot -e "create database weddingcart; GRANT ALL PRIVILEGES ON weddingcart.* TO wcdb@localhost IDENTIFIED BY 'wcdb123'"

echo "App environment setup, Creating DB objects and Populating Database"
cd /var/www/weddingcart

echo "Running composer for weddingcart"
sudo chmod +x /usr/local/bin/composer

composer -n install
php artisan migrate
php artisan db:seed

