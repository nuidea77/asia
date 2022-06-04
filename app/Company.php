<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Company extends Model
{
    use Translatable;
	protected $translatable = ['name', 'dname', 'dposition', 'address', 'description'];
}
