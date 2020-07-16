<?php

use Illuminate\Database\Seeder;
use Rap2hpoutre\FastExcel\FastExcel;
//MAIL
use Illuminate\Support\Facades\Mail;
use App\Mail\SendForRequest;

class GopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $users = (new FastExcel)->import(public_path('doc/list_for_email.xlsx'), function ($line) {
            $this->sendMail($line['EMAIL'], $line['IIN'], $line['FIO']);
            echo $line['EMAIL']."|";
        });
    }
    function sendMail($email, $iin, $fio){
        $hash = md5(md5(strrev($iin)));
        $link = "https://newcampus.iitu.kz/applicant_reg/".$iin."/".$hash;
        $params = [
            'iin' => $iin,
            'fio' => $fio,
            'link' => $link
        ];
        Mail::to($email)->send(new SendForRequest($params));
    }
}
