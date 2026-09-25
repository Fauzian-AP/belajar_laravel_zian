<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // Mengatur Nama Table yg digunakan
    protected $table = 'posts';

    // Mengatur Primary Key yg digunakan
    protected $primaryKey = 'id';

    // Property yg boleh diisi menggunakan Tinker
    protected $fillable = ['title', 'author', 'slug', 'body'];
}