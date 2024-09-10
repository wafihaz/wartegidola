<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warteg extends Model
{
    use HasFactory;
    protected $table = 'warteg';
    protected $guarded = ['id'];
    protected $fillable = ['nama', 'harga', 'deskripsi', 'foto'];
}
