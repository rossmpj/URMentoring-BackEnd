<?php

namespace App\Models\NoRelacional;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ejemplo extends Eloquent
{
     protected $connection='mongodb';
     //Todo es igual
}
