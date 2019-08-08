<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ScopePerson implements Scope {
    public function apply(\Illuminate\Database\Eloquent\Builder $builder, \Illuminate\Database\Eloquent\Model $model)
    {
        $builder->where('age', '>', 20);
    }
}
