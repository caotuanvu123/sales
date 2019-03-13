<?php
namespace App\Repository;

use App\Models\User;

class UsersRepositoryEloquent extends BaseRepositoryEloquent implements UsersRepository  {


    public function __construct()
    {
      $this->model = app(User::class);
    }


}
