<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded= [''];
    const STATUS_PUBLIC= 1;
    const STATUS_PRIVATE= 0;
    const HOT_ON=1;
    const HT_OFF=0;
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
    protected $hot = [
        1 => [
            'name'=>'Nổi bật',
            'class' =>'badge badge-success'
        ],
        0 => [
            'name'=>'Không nổi bật',
            'class' =>'badge badge-secondary'
        ]
    ];
    public function getStatus(){
        return array_get($this->status,$this->pro_active,'[N\A]');
    } 
    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id');
    }
    public function getHot(){
        return array_get($this->hot,$this->pro_hot,'[N\A]');
    }
    public function Order(){
        return $this->hasMany(Order::class,'or_product_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'pro_author_id');
    }
    public function Rating(){
        return $this->hasMany(Rating::class,'ra_product_id');
    }
    public function favoriteUser(){
        return $this->belongsToMany(User::class,'favorite_product','fp_product_id','fp_user_id');
    }
}
