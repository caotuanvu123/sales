<?php
/**
 * Created by PhpStorm.
 * User: vu
 * Date: 13/03/2019
 * Time: 17:03
 */
namespace App\Repository;

interface BaseRepository {
    
    public function paginate(int $perPage, array $relation, $column = ['*']);

    public function detail(int $id, array $relation);

    public function all();
}