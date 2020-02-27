<?php

use Illuminate\Database\Seeder;

class EmpCntTermReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //emp_contract_term_reasons
        DB::table('emp_contract_term_reasons')->insert([
            'id' => '1',
            'description_kk' => 'По собственному желанию',
            'description_ru' => 'По собственному желанию',
            'description_en' => 'По собственному желанию'
        ]);
        DB::table('emp_contract_term_reasons')->insert([
            'id' => '2',
            'description_kk' => 'В связи с истечением срока трудового договора',
            'description_ru' => 'В связи с истечением срока трудового договора',
            'description_en' => 'В связи с истечением срока трудового договораю'
        ]);
        DB::table('emp_contract_term_reasons')->insert([
            'id' => '3',
            'description_kk' => 'В связи с нарушением условий трудового договора',
            'description_ru' => 'В связи с нарушением условий трудового договора',
            'description_en' => 'В связи с нарушением условий трудового договора'
        ]);
    }
}
