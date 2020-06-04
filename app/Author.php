<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * @package App
 * @mixin \Eloquent
 */
class Author extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'latvian'
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'latvian' => 'sometimes|boolean'
        ];
    }

    /**
     * Get full name of the author
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
}
