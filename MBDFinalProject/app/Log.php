<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
        //Table Name
        protected $table = 'logs';
        // Primary Key
        public $primaryKey = 'ID_Log';
}
