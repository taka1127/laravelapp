<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; //グローバルスコープの利用
use App\Scopes\ScopePerson;//Scopeクラスの使用p255

class Person extends Model
{
    // public function getData()
    // {
    //     return $this->id . ':' . $this->name . '(' . $this->age . ')';
    // }
    // public function scopeNameEqual($query, $str)
    // {
    //     return $query->where('name',$str);
    // }
    // public function scopeAgeGreaterThan($query, $n)
    // {
    //     return $query->where('age','>=', $n);
    // }
    // public function scopeAgeLessThan($query, $n)
    // {
    //     return $query->where('age', '<=', $n);
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     // static::addGlobalScope('age', function(Builder $builder){
    //     //     $builder->where('age', '>', 20);
    //     // });
    //     static::addGlobalScope(new ScopePerson); //Scopeクラスの使用p255
    // }

    //モデルの修正
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . '('. $this->age . ')';
    }

    // public function board()
    // {
    //     return $this->hasOne('App\Board');//hasOne結合
    // }
    public function boards()//複数形
    {
        return $this->hasMany('App\Board');//hasMany結合
    }
}
