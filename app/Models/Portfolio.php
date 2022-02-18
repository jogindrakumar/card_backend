<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
      protected $fillable = [
        'project_name',
        'project_tech',
        'project_img', 
        'model_img',
        'project_link', 
        
    ];
}
