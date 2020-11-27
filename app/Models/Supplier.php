<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * Allow all attributes to be mass assigned
     *
     * @var array
     */
    protected $guarded = [];
}
