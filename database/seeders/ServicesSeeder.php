<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Remote Consultation', 
                'description' => "Conduct virtual appointments to discuss your pet's health concerns behaviour issue, or general wellness.",
                'status' => AppConst::ACTIVE
            ],
           

        ];

        Service::insert($services);
    }
}
