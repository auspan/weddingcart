<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use weddingcart\Http\Requests;

class PhotosController extends Controller
{
    public function showAddPhotoPage()
    {
        return view('wedding.addPhoto');
    }

    public function uploadBrideImage(Request $request)
    {
        $image = $request->file('file');
//        $image = $request->file('photo');
//        $fileName = $image->getClientOriginalName();
//         return $fileName;
        $imageName = storeImage($image);

        return $imageName;

//        return view('wedding.cropPhoto', compact('imageName'));
//        dd($file->getClientOriginalName());
    }
    public function uploadGroomImage(Request $request)
    {

    }

    public function cropImage(Request $request)
    {
        $imgPath = $request->input('imgSrc');
        $cropx = $request->input('cropx');
        $cropy = $request->input('cropy');
        $cropw = $request->input('cropw');
        $croph = $request->input('croph');

        $pathStr = explode('/', $imgPath);
        for($i =0; $i < count($pathStr); $i++)
        {
            $filename = $pathStr[$i];
        }

        $imgPath = 'uploads/'.$filename;
//        return ($filename);

            $image = Image::make($imgPath)->crop($cropw, $croph, $cropx, $cropy);

        $croppedImageName = 'crop'.$filename;
         saveImage($image,  $croppedImageName);

        return $croppedImageName;
    }
}
