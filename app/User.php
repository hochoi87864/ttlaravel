<?php

namespace App;

use App\Models\Article;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Transaction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function Article(){
        return $this->hasMany(Article::class,'a_author_id');
    }
    public function Product(){
        return $this->hasMany(Product::class,'pro_author_id');
    }
    public function Rating(){
        return $this->hasMany(Rating::class,'ra_user_id');
    }
    public function Transaction(){
        return $this->hasMany(Transaction::class,'tr_user_id');
    }
    public function favoriteProduct(){
        return $this->belongsToMany(Product::class,'favorite_product','fp_user_id','fp_product_id');
    }
}
