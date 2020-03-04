<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded= [''];
    const STATIC_PUBLIC= 1;
    const STATIC_PRIVATE= 0;
    protected $status = [
        1 => [
            'name'=>'Public',
            'class' =>'badge badge-success'
        ],
        0 => [
            'name'=>'Private',
            'class' =>'badge badge-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status,$this->c_active,'[N\A]');
    }
    public function Product(){
        return $this->hasMany(Product::class,'pro_category_id');
    }
}
