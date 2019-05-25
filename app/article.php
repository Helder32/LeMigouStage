<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//use App\article;
use App\Http\Controllers\Controller;


class article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id_article';

    public function achat() 
    {
        return $this->belongToMany(achat::class);
    }
}
