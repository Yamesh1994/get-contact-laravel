<?php

namespace yamesh\login\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $table = 'contacts';
    protected $fillable = ['name', 'number'];

}
