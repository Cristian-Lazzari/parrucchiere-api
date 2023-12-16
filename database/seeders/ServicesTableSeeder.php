<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Taglio uomo standard',  
                'price' => 1800,  
                'slot' => 1,  
 
            ],
            [
                'name' => 'Trattamento luxury',  
                'price' => 4000,  
                'slot' => 1,  
            ]
           
               
    
            ];
    
            foreach ($services as $service) {
                Service::create($service);
    
    }
}
}
