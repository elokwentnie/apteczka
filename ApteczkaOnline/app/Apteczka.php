<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apteczka extends Model
{
    protected $table = 'apteczkas';
    protected $fillable =['id_leku','ilosc','nazwa','data_waznosci','pozostalo'];

    public function listalekow()
    {
        return $this->hasMany('App\ListaLekow');
    }

}
