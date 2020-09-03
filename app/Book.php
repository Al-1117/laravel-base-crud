<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  // Aggiungo la variabile fillable per le colonne da gestire
  protected $fillable = [
    'title',
    'author',
    'description',
    'year',

  ];
}
