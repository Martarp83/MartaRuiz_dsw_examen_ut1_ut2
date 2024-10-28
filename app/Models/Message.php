<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos campos
    protected $fillable = ['id', 'text', 'subrayado'];
}
