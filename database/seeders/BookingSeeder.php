<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([[
            'driverID' => 3,
            'itemName' => 'Panadol Extra Strength',
            'itemDosage' => '2 tablets',
            'amount' => 4,
            'customerName' => 'Sheryl Winters',
            'customerAddress' => 'Somewhere',
            'signaturePic' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Jon_Kirsch%27s_Signature.png/1280px-Jon_Kirsch%27s_Signature.png',
            'perscriptionPic' => 'https://cdn.xxl.thumbs.canstockphoto.com/prescription-label-vector-a-prescription-label-vector-with-many-editable-fields-image_csp8710627.jpg',
            'status' => 'In Progress',
        ],]);
    }
}
