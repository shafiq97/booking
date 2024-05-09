<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['serviceName', 'image_url']; // Adjust based on actual column names

    // If your table does not follow Laravel's naming conventions, specify the table name:
    protected $table = 'services';  // Add this line if your table name is not the plural form of the model name
}

