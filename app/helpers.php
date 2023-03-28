<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;



/**
 * Get Json File with a path name
 *
 *  @param string $name
 *  @return null|string
 */
if (!function_exists('getJsonFile')) {
    function getJsonFile(string $path)
    {
        $file =  File::get(base_path($path));
        return json_decode($file, JSON_OBJECT_AS_ARRAY);
    }
}

/**
 * Upload an image
 *
 * @param \Illuminate\Http\UploadedFile $file
 * @param string $path
 * @return string|null
 */
if (!function_exists('imageUpload')) {
    function imageUpload(UploadedFile $file, string $path)
    {
        $imageName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path($path), $imageName);
        public_path($path) . $imageName;
        return $path .'/'. $imageName;
    }
}

