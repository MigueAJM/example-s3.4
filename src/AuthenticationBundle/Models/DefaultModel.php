<?php

namespace AuthenticationBundle\Models;

use Utilerias\SQLBundle\Model\SQLModel;

class DefaultModel
{
    protected $model;
    protected $schema = 'public';
    public function __construct()
    {
        $this->model = new SQLModel();
        $this->model->setSchema($this->schema);
    }

    public function toLogin(array $where)
    {
        return $this->model->selectFromTable(
            'users',
            [
                'id',
                'username',
                'email'
            ],
            $where
        );
    }
}
