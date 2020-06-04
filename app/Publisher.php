<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publisher
 * @package App
 * @mixin \Eloquent
 */
class Publisher extends Model
{
    protected $fillable = [
      'name',
      'address',
      'works_on_sundays',
      'phone'
    ];

    public static function rules(){
        return [
            'name' => 'required|string|max:250',
            'address' => 'string|max:250',
            'phone' => 'integer',
            'works_on_sundays' => 'sometimes|boolean'
        ];
    }
}
