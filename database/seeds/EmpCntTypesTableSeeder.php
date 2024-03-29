<?php

use Illuminate\Database\Seeder;

class EmpCntTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('emp_contract_types')->insert([
            'id' => '1',
            'description_kk' => 'неопределенный',
            'description_ru' => 'неопределенный',
            'description_en' => 'неопределенный'
        ]);
        DB::table('emp_contract_types')->insert([
            'id' => '2',
            'description_kk' => 'определенный',
            'description_ru' => 'определенный',
            'description_en' => 'определенный'
        ]);
    }
}
