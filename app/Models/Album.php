<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'produced_by',
    'year_released',
  ];

  public function artist()
  {
    return $this->belongsTo(Artist::class);
  }

  public function songs()
  {
    return $this->hasMany(Song::class);
  }
}
