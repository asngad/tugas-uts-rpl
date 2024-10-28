<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'latihan_id';
    protected $fillable = ['nama_latihan', 'deskripsi', 'durasi', 'jenis'];
}
