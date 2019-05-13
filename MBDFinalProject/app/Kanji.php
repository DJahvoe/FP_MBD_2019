<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
        //Table Name
        protected $table = 'kanjis';
        // Primary Key
        public $primaryKey = 'ID_Kanji';
}
