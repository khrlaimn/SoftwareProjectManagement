<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =['projectId','buId','start_date','end_date', 'duration', 'leadDeveloper', 'developer', 'status'];
}