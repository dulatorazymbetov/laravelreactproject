<?php

use Illuminate\Database\Seeder;

class OrdersTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_types')->insert([
        'id' => '1',
        'code' => 'ENROLLMENT',
        'name' => 'Приказ о зачислении',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '2',
        'code' => 'DEDUCTION',
        'name' => 'Приказ об отчислении',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '3',
        'code' => 'GRADUATION',
        'name' => 'Приказ о выпуске',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '4',
        'code' => 'COURSE_TRANSFER',
        'name' => 'Приказ о переводе с курса на курс',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '5',
        'code' => 'ACADEMIC_LEAVE',
        'name' => 'Приказ об академическом отпуске',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '6',
        'code' => 'RESTORATION',
        'name' => 'Приказ о восстановлении',
        'is_disabled' => '0'
        ]);
        DB::table('orders_types')->insert([
        'id' => '7',
        'code' => 'REPEATED_COURSE',
        'name' => 'Приказ на повторный курс',
        'is_disabled' => '1'
        ]);
        DB::table('orders_types')->insert([
        'id' => '8',
        'code' => 'LASTNAME_CHANGE',
        'name' => 'Приказ о смене фамилии',
        'is_disabled' => '1'
        ]);
        DB::table('orders_types')->insert([
        'id' => '9',
        'code' => 'PAYMENT_FORM_CHANGE',
        'name' => 'Приказ о смене формы оплаты',
        'is_disabled' => '1'
        ]);
        DB::table('orders_types')->insert([
        'id' => '10',
        'code' => 'GRANT_AWARD',
        'name' => 'Приказ о присуждении ГОГ',
        'is_disabled' => '0'
        ]);
    }
}
