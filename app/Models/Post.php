<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // Mengatur Nama Table yg digunakan
  protected $table = 'posts';

  // Mengatur Primary Key yg digunakan
  protected $primaryKey = 'id';

  // Property yg boleh diisi menggunakan Tinker
  protected $fillable = ['title', 'author', 'slug', 'body'];
}