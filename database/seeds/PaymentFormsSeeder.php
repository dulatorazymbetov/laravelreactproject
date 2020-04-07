<?php

use Illuminate\Database\Seeder;

class PaymentFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('payment_forms')->insert([
            'id' => '1',
            'description_kz' => 'Ақылы',
            'description_ru' => 'Платная',
            'description_en' => 'Paid'
        ]);
		DB::table('payment_forms')->insert([
            'id' => '2',
            'description_kz' => 'Тегін',
            'description_ru' => 'Гос/заказ',
            'description_en' => 'Free'
        ]);
		DB::table('payment_forms')->insert([
            'id' => '3',
            'description_kz' => 'Білім алушылармен алмасу аясында',
            'description_ru' => 'В рамках обмена обучающимися',
            'description_en' => 'Within the bounds of students exchange'
        ]);
    }
}
