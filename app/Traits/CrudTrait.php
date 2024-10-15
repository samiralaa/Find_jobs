<?php

namespace App\Traits;

trait CrudTrait
{
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    public function getAll()
    {
        return $this->model->get();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function getBySelect($select)
    {
        return $this->model->select($select)->get();
    }

    public function getWithRelations($relations)
    {
        return $this->model->with($relations)->get();
    }

    public function getOneWithRelations($relations,$id)
    {
        return $this->model->with($relations)->find($id);
    }

}
