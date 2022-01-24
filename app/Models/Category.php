<?php

namespace App\Models;

use Faker\Core\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected  $fillable  = ['name','description','is_active'];
    protected $dates = ['deleted_at'];
    protected $casts = ['id' => 'string'];

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($obj){
            $obj->id = \Ramsey\Uuid\Uuid::uuid4();
        });
    }


}