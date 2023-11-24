<?php

namespace Database\Seeders;

use App\Models\Date;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maxReservation = 5;

        $cDay= date('d');
        $cNDMonth= date('t');
        $cMonth= date('m');
        $year= date('y');
        $dayWeek= date('N');

        $lDay= $cNDMonth - $cDay;
        $lMounth= 12 - $cMonth ;
        
        for($i = 1; $i <= $lDay; $i++){
            if( $dayWeek !== 7){
                $dayWeek = $dayWeek + 1;
            }else{
                
               $dayWeek = 1;
            }
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '12:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '13:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '13:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
            ]);
        };

        if($lMounth>0){
            for($itop = $cMonth + 1; $cMonth < 12; $cMonth++){

                if($cMonth + 1 == 2 && !(( $year %4 ) == 0)){
                    $mdMonth = 28;
                };
                if($cMonth + 1 == 2 && (( $year %2 ) == 0)){
                    $mdMonth = 29;
                };
                if($cMonth + 1 == 3){
                    $mdMonth = 31;
                };
                if($cMonth + 1 == 4){
                    $mdMonth = 30;
                };
                if($cMonth + 1 == 5){
                    $mdMonth = 31;
                };
                if($cMonth + 1 == 6){
                    $mdMonth = 30;
                };
                if($cMonth + 1 == 7){
                    $mdMonth = 31;
                };
                if($cMonth + 1 == 8){
                    $mdMonth = 31;
                };
                if($cMonth + 1 == 9){
                    $mdMonth = 30;
                };
                if($cMonth + 1 == 10){
                    $mdMonth = 31;
                };
                if($cMonth + 1 == 11){
                    $mdMonth = 30;
                };
                if($cMonth + 1 == 12){
                    $mdMonth = 31;
                };
                 
    
                for($i = 1; $i <= $mdMonth; $i++){
                    if( $dayWeek !== 7){
                        $dayWeek = $dayWeek + 1;
                    }else{
                        
                       $dayWeek = 0;
                    }

                    Date::create([
                       'day_w'    => $dayWeek,
                       'month'    => $itop,
                       'day'      => $i,
                       'time'     => '12:30',
                       'visible'  => true,
                       'max_res'  => $maxReservation,
                   ]);
                    Date::create([
                       'day_w'    => $dayWeek,
                       'month'    => $itop,
                       'day'      => $i,
                       'time'     => '13:00',
                       'visible'  => true,
                       'max_res'  => $maxReservation,
                   ]);
                    Date::create([
                       'day_w'    => $dayWeek,
                       'month'    => $itop,
                       'day'      => $i,
                       'time'     => '13:30',
                       'visible'  => true,
                       'max_res'  => $maxReservation,
                   ]);
               };
            }

        }

     
    }
}
