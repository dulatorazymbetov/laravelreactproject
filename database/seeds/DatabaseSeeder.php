<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(TutosTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(TeachingLanguagesTableSeeder::class);
        $this->call(AcademisDegreesTableSeeder::class);
        $this->call(AcademicRanksTableSeeder::class);
        $this->call(EnglishLevelsTableSeeder::class);
        $this->call(EmpCntTypesTableSeeder::class);
        $this->call(EmpCntTermReasonsTableSeeder::class);
        
    }
}
