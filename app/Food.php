<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //指定表名
    protected $table = 'foods';
    //指定id
    protected $primaryKey = 'id';
    //指定允許批量賦值得自段
    protected $fillable = ['name','price','content','picture'];
}
