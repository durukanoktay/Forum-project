<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $table = 'forums'; // Veritabanında forumlar tablosunu temsil eder

    // 'topics' ve 'posts' ilişkilerini tanımlar
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}