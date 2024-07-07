<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
  use HasFactory;

  protected $table = 'film';

  protected $fillable = [
    'judul',
    'ringkasan',
    'tahun',
    'poster',
    'genre_id',
  ];

  public function genre()
  {
    return $this->belongsTo(Genre::class);
  }

  public function casts()
  {
    return $this->belongsToMany(Cast::class, 'cast_film');
  }

  public function reviews()
  {
    return $this->hasMany(Review::class);
  }

  public function getMergedCasts()
  {
    $additionalCasts = [
      'custom_field' => 'array',
    ];

    return array_merge($this->casts, $additionalCasts);
  }
}
