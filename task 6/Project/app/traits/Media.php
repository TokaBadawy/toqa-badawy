<?php
namespace App\traits;
trait Media{
    public function upload($image,$dir){

        $photoName = $image->hashName();
        $image->move(public_path("images\\{$dir}"),$photoName);
        return $photoName;

    }

    public function delete($path){
        if(file_exists($path)){
            unlink($path);
            return true;
        }
        return false;

    }


}
