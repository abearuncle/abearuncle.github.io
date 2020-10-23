<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Image;


class FishTexController extends Controller
{

    public function index()
    {
        $files = File::files(public_path('images/FishTex'));
        $names = [];
        $img = [];
        foreach($files as $value) {
            //https://www.php.net/manual/en/class.splfileinfo.php
            array_push($names,$value->getFilename());
            //https://stackoverflow.com/questions/37886874/laravel-5-2-how-create-image-file-from-json
            $image = Image::make('images/FishTex/'.$value->getFilename())->encode('jpg', 75);
            $base64_encode = base64_encode($image);

            array_push($img,$base64_encode);
        }

        $data = '{"pic":'.json_encode($names).',"img":'.json_encode($img).'}';
        //dd($data);

        return $data;
    }
}
