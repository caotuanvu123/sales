<?php
/**
 * Created by PhpStorm.
 * User: vu
 * Date: 13/03/2019
 * Time: 16:44
 */
namespace App\Services;

use Webpatser\Uuid\Uuid;

class UserServices {
    public function uploadImage($file, $path = 'public/users/avatar')
    {
        $fileName = Uuid::generate().'.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $file->storeAs($path, $fileName);

        return $fileName;
    }
}