<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'Offer';
    protected $fillable =['name_ar','name_en','price','details_ar','details_en','photo','created_at','updated_at'];
    protected  $hidden = ['created_at','updated_at'];
    public $timestamps = true;
}
