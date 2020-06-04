<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $fillable = [
        'name', 'text', 'published', 'rating', 'book_id'
    ];

    public static function rules()
    {
        return [
            'name'=> 'required|string|max:200',
            'text' => 'required|string',
            'published' => 'required|boolean',
            'rating' => 'required|integer|max:10|min:0',
            'book_id' => 'exists:books,id',
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

}
