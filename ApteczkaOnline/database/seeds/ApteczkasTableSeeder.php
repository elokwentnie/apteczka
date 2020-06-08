<?php

use Illuminate\Database\Seeder;
use App\Apteczka;
use App\ListaLekow;

class ApteczkasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lek = ListaLekow::where('NazwaHandlowa', 'AGALIN');
        $apteczka = new Apteczka();
        $apteczka->nazwa='ABAKTAL';
        $apteczka->ilosc=10;
        $apteczka->data_waznosci='2020-09-09';
        $apteczka->cena=15;
        $apteczka->pozostalo=10;
        $apteczka->save();
        $apteczka->listalekow($lek);

    }
}
