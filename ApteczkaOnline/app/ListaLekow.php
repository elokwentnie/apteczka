<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaLekow extends Model
{
    protected $table = 'ListaLekow';
    protected $fillable =['NazwaHandlowa','Postac','Dawka','Opakowanie'];
}
