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
        $this->call(StaffTableSeeder::class);
        $this->call(StudentTableSeeder::class);

        $this->call(TeachingLanguagesTableSeeder::class);
        $this->call(AcademicDegreesTableSeeder::class);
        $this->call(AcademicRanksTableSeeder::class);
        $this->call(EnglishLevelsTableSeeder::class);
        $this->call(EmpCntTypesTableSeeder::class);
        $this->call(EmpCntTermReasonsTableSeeder::class);
        $this->call(VacationStatusesTableSeeder::class);
        $this->call(DepartmentTypesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(PositionTimeTypesTableSeeder::class);
        $this->call(PositionTypesTableSeeder::class);
		
		$this->call(TrainingDirectionsTableSeeder::class);
        $this->call(EduProgramsGroupTableSeeder::class);
        $this->call(EduAreasTableSeeder::class);
        $this->call(EduProgramsTypeTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);

		$this->call(SubjectCyclesTableSeeder::class);
		$this->call(SubjectComponentsTableSeeder::class);
		$this->call(StudentOrderStatusesSeeder::class);
		$this->call(StudentOrderTypesSeeder::class);
		$this->call(StudentOrderCategoriesSeeder::class);
		$this->call(PaymentFormsSeeder::class);
		$this->call(StudyFormsSeeder::class);		
		$this->call(OrdersTableSeeder::class); 
        $this->call(OrdersTypesTableSeeder::class);   
		$this->call(GendersTableSeeder::class); 
		$this->call(ExamTypeSeeder::class); 
		$this->call(ControlFormSeeder::class); 
		$this->call(DegreeTypeSeeder::class); 
		
    }
}
