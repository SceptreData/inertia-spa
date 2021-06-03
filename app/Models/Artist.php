<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'from_country',
    'formed_in',
  ];


  public function albums()
  {
    return $this->hasMany(Album::class);
  }

  public function songs()
  {
    return $this->hasMany(Song::class);
  }
}