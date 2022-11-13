<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'invoice' => '#54815',
                'fullname' => 'Damirov Bolat',
                'email' => 'damirbolatov@gmail.com',
                'amount' => '548050'
            ],
            [
                'invoice' => '#54754',
                'fullname' => 'Abitaev Adil',
                'email' => 'adil99@gmail.com',
                'amount' => '5050'
            ],
            [
                'invoice' => '#1235',
                'fullname' => 'Askhatov Kairat',
                'email' => 'kaira_98@gmail.com',
                'amount' => '255050'
            ],
            [
                'invoice' => '#1236',
                'fullname' => 'Avvakumov Vladimir',
                'email' => 'vovka12@gmail.com',
                'amount' => '514250'
            ],
            [
                'invoice' => '#0275',
                'fullname' => 'Jimmie Mills',
                'email' => 'Jimmie_Mills@gmail.com',
                'amount' => '355050'
            ],
            [
                'invoice' => '#1238',
                'fullname' => 'Armando Leonard',
                'email' => 'Armando_Leonard@gmail.com',
                'amount' => '364250'
            ], [
                'invoice' => '#90275',
                'fullname' => 'Baltabay Kairat',
                'email' => 'mc_kairat@gmail.com',
                'amount' => '25050'
            ],
            [
                'invoice' => '#12359',
                'fullname' => 'Altynbekov Nurzhigit',
                'email' => 'nurzhik_korzhik@gmail.com',
                'amount' => '814250'
            ],
            [
                'invoice' => '#12375',
                'fullname' => 'Makhsutov Alisher',
                'email' => 'alekenski@gmail.com',
                'amount' => '698745'
            ],
            [
                'invoice' => '#12435',
                'fullname' => 'Gusmanov Beket',
                'email' => 'beket_gusmanov@gmail.com',
                'amount' => '258794'
            ], [
                'invoice' => '#12235',
                'fullname' => 'Ahmatova Anelya',
                'email' => 'anele4ek@gmail.com',
                'amount' => '564648'
            ],
            [
                'invoice' => '#01235',
                'fullname' => 'Adina Kim',
                'email' => 'adinochka@gmail.com',
                'amount' => '914250'
            ],
        ];
        DB::table('clients')->insert($clients);
    }
}
