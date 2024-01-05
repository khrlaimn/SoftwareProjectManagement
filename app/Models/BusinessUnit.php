<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessUnit extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable =['picName','requestType','description','status'];

    public function projects(){
    return $this->hasMany(Projects::class,'buId');
    }

}
