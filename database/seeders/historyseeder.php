<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class historyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $history = [
            [
                'sender_invoice' => '#1235',
                'sender_fullname' => 'Askhatov Kairat',
                'sender_email' => 'kaira_98@gmail.com',
                'transfer' => '55050',
                'receiver_invoice' => '#1236',
                'receiver_fullname' => 'Avvakumov Vladimir',
                'receiver_email' => 'vovka12@gmail.com',
                'status' => 1
            ],
            [
                'sender_invoice' => '#1236',
                'sender_fullname' => 'Avvakumov Vladimir',
                'sender_email' => 'vovka12@gmail.com',
                'transfer' => '14250',
                'receiver_invoice' => '#0275',
                'receiver_fullname' => 'Jimmie Mills',
                'receiver_email' => 'Jimmie_Mills@gmail.com',

                'status' => 0
            ],
            [
                'sender_invoice' => '#0275',
                'sender_fullname' => 'Jimmie Mills',
                'sender_email' => 'Jimmie_Mills@gmail.com',
                'transfer' => '355050',
                'receiver_invoice' => '#1238',
                'receiver_fullname' => 'Armando Leonard',
                'receiver_email' => 'Armando_Leonard@gmail.com',
                'status' => 1
            ],
            [
                'sender_invoice' => '#1238',
                'sender_fullname' => 'Armando Leonard',
                'sender_email' => 'Armando_Leonard@gmail.com',
                'transfer' => '364250',
                'receiver_invoice' => '#1235',
                'receiver_fullname' => 'Askhatov Kairat',
                'receiver_email' => 'kaira_98@gmail.com',
                'status' => 0
            ]
        ];
        DB::table('histories')->insert($history);
    }
}
