<?php
namespace App\Traits;

use App\Models\Company;

trait AjaxUpload
{
    public function fileUpload(string $result, $filename, $file){

        if ($file) {
            $exploded = explode(",", $file);
            if (str_contains($exploded[0], 'pdf')) {
                $ext = 'pdf';
            } elseif (str_contains($exploded[0], 'png')) {
                $ext = 'png';
            } else if (str_contains($exploded[0], 'jpeg')) {
                $ext = 'jpeg';
            } elseif (str_contains($exploded[0], 'jpg')) {
                $ext = 'jpg';
            } else {
                return 'error';
            }
            $decode = base64_decode($exploded[1]);
            // $filename = "licenses/". sha1(time().$file) . "." . $ext;
            $filename =  $filename . ".".$ext;

            if ($result) {
                $path = storage_path() . "/app/" . $result;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $path = storage_path() . "/app/" . $filename;
            file_put_contents($path, $decode);
            return $filename;
        }
        return $result;

    }
    
}
