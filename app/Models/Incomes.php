<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    protected $fillable = [
        'date',     // The date of the income
        'category', // The category of the income
        'amount',   // The amount of income
    ];
}
