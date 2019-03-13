<?php
namespace App\Repository;

use Illuminate\Database\Query\Builder;

class BaseRepositoryEloquent implements BaseRepository {

    protected $model;

    public function paginate(int $perPage, array $relation = [] , $column = ['*'])
    {
        // TODO: Implement paginate() method.
        return $this->model->with($relation)->orderBy('id', 'DESC')->paginate($perPage);
    }

    public function detail(int $id,  array $relation = [])
    {
        // TODO: Implement detail() method.
        return $this->model->with($relation)->find($id);
    }

    public function all()
    {
        // TODO: Implement all() method.

        return $this->model->get();
    }

    public function condition(array $condition)
    {
        return $this->model->where($condition)->get();
    }

    public function findByField($field, $value, array $relation = [])
    {
        return $this->model->where($field,$value)->with($relation)->get();
    }

    public function get(Builder $builder)
    {
        return $builder->get();
    }

    public function limit(Builder $builder, $limit)
    {
        return $builder->paginate($limit);
    }

    public function create(array $params)
    {
        return $this->model->create($params);
    }
    public function update(int $id,array $params)
    {
        return $this->model->find($id)->update($params);
    }
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}
