<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    const ROLE_ADMIN = 1;
    const ROLE_MEMBER = 2;

    protected $table = 'roles';
}
