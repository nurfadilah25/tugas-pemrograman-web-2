<?php

namespace App\Models;

use Database\Factories\JamFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'brand', 'category', 'price', 'stock', 'description'])]
class Jam extends Model
{
    /** @use HasFactory<JamFactory> */
    use HasFactory;
}
