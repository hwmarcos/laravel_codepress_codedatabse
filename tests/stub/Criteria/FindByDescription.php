<?php

namespace CodePress\CodeDatabase\Criteria;

use CodePress\CodeDatabase\Contracts\CriteriaInterface;
use CodePress\CodeDatabase\Contracts\RepositoryInterface;

class FindByDescription implements CriteriaInterface
{

    private $desc;

    public function __construct($desc)
    {
        $this->desc = $desc;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('description', $this->desc);
    }

}