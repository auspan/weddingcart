<?php
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

//namespace weddingcart\Http\Controllers;
//use Auth;
//use weddingcart\UserEvent;

/*function checkevent()
{
 $user_event=array();
        $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);

        foreach ($UserEvent as $Uevent)
        {
            $user_event=$Uevent['id'];
        }
         if($user_event==null)
         {  
            return view('pages.temp');
         }
        
         
      }*/

function getImageName($image_name)
{
    return Str::lower(
        pathinfo($image_name->getClientOriginalName(), PATHINFO_FILENAME)
        .'-'
        .uniqid()
        .'.'
        .$image_name->getClientOriginalExtension()
    );
}
/**
 * @param $image
 * @return string
 */
function storeImage(UploadedFile $image)
{
    $name =  Str::lower(
        pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)
        .'-'
        .uniqid()
        .'.'
        .$image->getClientOriginalExtension()
        );

    moveImage($image, $name);
    return $name;
}

//function flash($title = null, $message = null)
//{
//    $flash = app('weddingcart\Http\Flash');
//
//    if (func_num_args() == 0) {
//        return $flash;
//    }
//    return $flash->info($title, $message);
//}

function moveImage(UploadedFile $image, String $name)
{
    $uploadPath = '../public/uploads/';

    $image->move($uploadPath, $name);
}

function splitname(String $name){

    return str_word_count($name, 1);
}

function saveImage(\Intervention\Image\Image $image, String $imgName)
{
    $uploadPath = '../public/uploads/'.$imgName;
    $image->save($uploadPath);
    return $uploadPath;
}

function isNullOrEmptyString(String $string){
    return (!isset($string) || trim($string)==='');
}