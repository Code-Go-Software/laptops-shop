<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    ** Helper function to check if a given image name exists and delete it
    */
    public function delete($image)
    {
        $image_path = public_path('images/' . $image);
        if(file_exists($image_path)) unlink($image_path);
    }




    /*
    ** Helper function to create the image upload name
    */
    public function create_name($prefix, $ext)
    {
        return time() . '-' . $prefix . '.' . $ext;
    }

}
