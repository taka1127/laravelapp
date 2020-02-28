<?php
namespace APP\Scopes;

use Illuminate\Database\Eloquent\Scope as EloquentScope;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ScopePerson implements Scope
{ 
    public function apply( Builder $builder, Model $model)
    {
      $builder->where('age', '>', 20);
    }
}
