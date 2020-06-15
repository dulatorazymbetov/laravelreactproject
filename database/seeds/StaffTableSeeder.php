<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\Student\Student;
use App\Models\Staff\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        \DB::table('role_user')->truncate();
        \DB::table('staff')->truncate();
        \DB::table('users')->truncate();
        \DB::table('students')->truncate();

        \DB::connection('old')
            ->table('user')
            ->select(
                'user.user_id',
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.username',
                'user.gender',
                'user.email',
                'user.birthdate',
                'user.iin',
                'staff_card.staff_degree_id',
                'staff_card.is_foreign_staff',
                'staff_card.academic_status_id'
            )
            //->where('user.user_id', '<', '30')
            ->join('staff_card', 'staff_card.user_id', '=', 'user.user_id')
            ->orderBy('user_id')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    if(!User::where('login', $row->username)->first()){
                        $roles = \DB::connection('old')
                            ->table('user_role_mapper')
                            ->select('role_id')
                            ->where('user_id', $row->user_id)
                            ->get()
                            ->pluck('role_id');
                        
                        if(is_null($row->gender)){
                            $row->gender = 3;
                        }
                        $gender_list = [
                            0 => 1,
                            1 => 2,
                            3 => 3
                        ];
                        $user = new User;
                        $user->firstname = $row->firstname;
                        $user->lastname = $row->lastname;
                        $user->patronymic = $row->middlename;
                        $user->login = $row->username;
                        $user->gender = $gender_list[$row->gender];
                        $user->email = $row->email;
                        $user->birthdate = $row->birthdate;
                        $user->iin = $row->iin;
                        $user->save();
                        $user->roles()->attach(Role::find($roles));

                        if(is_null($row->is_foreign_staff)){
                            $row->is_foreign_staff = 0;
                        }
                        if(is_null($row->staff_degree_id)){
                            $row->staff_degree_id = 6;
                        }
                        if(is_null($row->academic_status_id)){
                            $row->academic_status_id = 5;
                        }
                        $academic_degree_list = [
                            1 => 3, 2 => 4, 3 => 2, 4 => 5, 5 => 6, 6 => 1
                        ];
                        $academic_rank_list = [
                            1 => 2, 2 => 4, 3 => 4, 4 => 3, 5 => 1
                        ];
                        $staff = new Staff;
                        $staff->user_id = $user->id;
                        $staff->is_foreign = $row->is_foreign_staff;
                        $staff->academic_degree_id = $academic_degree_list[$row->staff_degree_id];
                        $staff->academic_rank_id = $academic_rank_list[$row->academic_status_id];
                        $staff->english_level_id = 1;
                        $staff->save();
                    } 
                }
            });
    }
}
