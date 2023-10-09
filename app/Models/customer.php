<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use tidy;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = [];
}
