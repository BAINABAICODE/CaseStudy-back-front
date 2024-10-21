<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'products'; // Optional if the table name follows Laravel's convention

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'barcode',
        'description',
        'price',
        'quantity',
        'category',
    ];

    // Specify fields that should be hidden (if any)
    protected $hidden = [
        // Add fields to hide if needed
    ];

    // Add any relationships or additional methods if necessary
}
