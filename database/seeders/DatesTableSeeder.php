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


    //$cDay= 
        // $cNDMonth= date('t');
        // $cMonth= date('m');
        // $year= date('y');
        // $year= $year + 2000;
        // $dayWeek= date('N');

        $cDay= date('d');
        $cNDMonth= date('t');
        $cMonth= date('m');
        $year= date('y');
        $year= $year + 2000;
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
                'time'     => '10:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '11:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '11:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '12:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '12:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '13:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '13:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '16:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '17:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '17:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '18:00',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
             Date::create([
                'day_w'    => $dayWeek,
                'month'    => $cMonth,
                'day'      => $cDay + $i,
                'time'     => '18:30',
                'visible'  => true,
                'max_res'  => $maxReservation,
                'year'     => $year,
            ]);
        };
        //genaerazione del secondo mese ecc
        if($lMounth>0){
            for($itop = $cMonth + 1; $itop <= 12; $itop++){
                if($itop == 1 ){
                    $mdMonth = 31;
                };
                if($itop == 2 && !(( $year %4 ) == 0)){
                    $mdMonth = 28;
                };
                if($itop == 2 && (( $year %2 ) == 0)){
                    $mdMonth = 29;
                };
                if($itop == 3){
                    $mdMonth = 31;
                };
                if($itop == 4){
                    $mdMonth = 30;
                };
                if($itop == 5){
                    $mdMonth = 31;
                };
                if($itop == 6){
                    $mdMonth = 30;
                };
                if($itop == 7){
                    $mdMonth = 31;
                };
                if($itop == 8){
                    $mdMonth = 31;
                };
                if($itop == 9){
                    $mdMonth = 30;
                };
                if($itop == 10){
                    $mdMonth = 31;
                };
                if($itop == 11){
                    $mdMonth = 30;
                };
                if($itop == 12){
                    $mdMonth = 31;
                };
                 
                $m = $itop;
            //creazione del mese con i giorni e degli orari
                for($i = 1; $i <= $mdMonth; $i++){
                    if( $dayWeek !== 7){
                        $dayWeek = $dayWeek + 1;
                    }else{
                        
                       $dayWeek = 1;
                    }


                Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '10:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '11:00',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '11:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '12:00',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '12:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '13:00',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '13:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '16:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '17:00',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '17:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '18:00',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
                 Date::create([
                    'day_w'    => $dayWeek,
                    'month'    => $m,
                    'day'      => $i,
                    'time'     => '18:30',
                    'visible'  => true,
                    'max_res'  => $maxReservation,
                    'year'     => $year,
                ]);
               };
            }

        }
        if($lMounth !== 12){
            $year++;
            for($itop = 1; $itop <= 12; $itop++){

                if($itop == 1 ){
                    $mdMonth = 31;
                };
                if($itop == 2 && !(( $year %4 ) == 0)){
                    $mdMonth = 28;
                };
                if($itop == 2 && (( $year %2 ) == 0)){
                    $mdMonth = 29;
                };
                if($itop == 3){
                    $mdMonth = 31;
                };
                if($itop == 4){
                    $mdMonth = 30;
                };
                if($itop == 5){
                    $mdMonth = 31;
                };
                if($itop == 6){
                    $mdMonth = 30;
                };
                if($itop == 7){
                    $mdMonth = 31;
                };
                if($itop == 8){
                    $mdMonth = 31;
                };
                if($itop == 9){
                    $mdMonth = 30;
                };
                if($itop == 10){
                    $mdMonth = 31;
                };
                if($itop + 1 == 11){
                    $mdMonth = 30;
                };
                if($itop + 1 == 12){
                    $mdMonth = 31;
                };
                 
                $m = $itop;
            //creazione del mese con i giorni e degli orari
                for($i = 1; $i <= $mdMonth; $i++){
                    if( $dayWeek !== 7){
                        $dayWeek = $dayWeek + 1;
                    }else{
                        
                       $dayWeek = 1;
                    }

                    Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '10:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '11:00',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '11:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '12:00',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '12:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '13:00',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '13:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '16:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '17:00',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '17:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '18:00',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
                     Date::create([
                        'day_w'    => $dayWeek,
                        'month'    => $m,
                        'day'      => $i,
                        'time'     => '18:30',
                        'visible'  => true,
                        'max_res'  => $maxReservation,
                        'year'     => $year,
                    ]);
               };
            }

        }

     
    }
}
