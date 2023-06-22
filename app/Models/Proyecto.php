<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $descripcion
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
      'nombre' => 'required|string|max:128',
      'imagen' => 'required|string|max:255',
      'descripcion' => 'required|string|max:255',
      'tecnologias' => 'required|string|max:255',
      'url' => 'required|url',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','imagen','descripcion', 'tecnologias','url'];



}
