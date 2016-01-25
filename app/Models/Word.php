<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'words';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'word'];

    const WORD_PER_PAGE = 10;

    public function trans_word()
    {
        return $this->hasOne('App\Models\TransWord');
    }
}
