sudo apt-get update


sudo apt-get install -y vim curl python-software-properties unzip
sudo apt-get install -y debconf-utils
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get upgrade

export DEBIAN_FRONTEND="noninteractive"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get install -y mysql-server-5.6 mysql-client-core-5.6
mysql_secure_installation

sudo apt-get install -y php7.0 php7.0-dev apache2 apache2-utils 
sudo apt-get install -y libapache2-mod-php7.0 php7.0-curl php7.0-gd php7.0-mcrypt 
sudo apt-get install -y php7.0-readline php7.0-mysql git-core php7.0-mbstring php7.0-xml
############PHPMyadmin##############
cd /usr/share
sudo wget https://files.phpmyadmin.net/phpMyAdmin/4.5.4.1/phpMyAdmin-4.5.4.1-all-languages.zip >> /var/www/install.log
sudo unzip phpMyAdmin-4.5.4.1-all-languages.zip >> /var/www/install.log
sudo mv phpMyAdmin-4.5.4.1-all-languages /var/www/phpmyadmin
sudo chmod -R 0755 /var/www/phpmyadmin
############XDEBUG#########
echo "XDEBUG Setup"
cd ~
mkdir downloads
wget -O ~/downloads/xdebug-2.4.0rc4.tgz http://xdebug.org/files/xdebug-2.4.0rc4.tgz >> /var/www/install.log
cd downloads
tar -xvzf xdebug-2.4.0rc4.tgz >> /var/www/install.log
cd xdebug-2.4.0*
phpize
./configure
make
sudo cp modules/xdebug.so /usr/lib/php/20151012
echo "zend_extension = /usr/lib/php/20151012/xdebug.so" | sudo tee -a /etc/php/7.0/cli/php.ini
#################

#php7.0-xdebug
cat << EOF |  sudo tee -a /etc/php/7.0/mods-available/xdebug.ini
xdebug.scream=1
xdebug.cli_color=1
xdebug.show_local_vars=1
xdebug.default_enable=1
 
xdebug.remote_enable=1
xdebug.remote_handler=dbgp
xdebug.remote_host=localhost
xdebug.remote_port=9000
xdebug.remote_autostart=1
EOF

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
sudo a2ensite weddingcart ubuntu phpmyadmin

#sudo service apache2 reload
sudo service apache2 restart

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "Creating database and db user"
mysql -u root -proot -e "create database weddingcart; GRANT ALL PRIVILEGES ON weddingcart.* TO wcdb@localhost IDENTIFIED BY 'wcdb123'"

echo "App environment setup, Creating DB objects and Populating Database"
cd /var/www/weddingcart
cat << EOF |  sudo tee -a .env
APP_ENV=local
APP_DEBUG=true
APP_KEY=v5KT7Ykk7hM3wDZzQOLZ41PCzEMyxyj0

DB_HOST=localhost
DB_DATABASE=weddingcart
DB_USERNAME=wcdb
DB_PASSWORD=wcdb123

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
EOF

echo "Running composer for weddingcart"
sudo chmod +x /usr/local/bin/composer

cat << EOF |  sudo tee /home/vagrant/.config/composer/auth.json {
    "github-oauth": {
        "github.com": "7130794374e50abdff109f32ee16c125765152ad"
    }
}
EOF
composer -n install
php artisan migrate
php artisan db:seed

