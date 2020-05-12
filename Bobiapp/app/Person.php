<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //リスト6-18
    protected $guarded = array('id');
    
    public static $rules = array(
    'name' => 'required',
    'mail' => 'email',
    'age' => 'integer|min:0|max:150'
    );
    
    public function getData()
    {
        return $this->id . '： ' . $this->name . '（' . $this->age . '）';
    }
    
    
    //リスト6-37
    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
