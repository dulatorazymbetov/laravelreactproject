<?php

namespace App\Http\Controllers\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant\Applicant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User\Role;

class ApplicantLoginController extends Controller
{

	use AuthenticatesUsers;
    
    public function __construct(){
        $this->middleware('guest', ['except' => ['logout', 'status']]);
    }

    public function loginApplicant(Request $request) {

        $validator = Validator::make($request->all(),[
                'iin' => 'required',
                'password' => 'required',
            ],
            [
                'iin.required' => 'iin required',
                'password.required' => 'password required',
            ]
        );
        $iin = $request->iin;
        $password = $request->password;
        if($validator->fails()){
            $error = $validator->errors();
            return response()->json($error, 406);
        }
        $applicant = Applicant::where('iin', $iin)->first();
		if (Hash::check($password, $applicant->password, [])) {
		    $token = auth()->login($applicant);
		    return ['token' => $this->respondWithToken($token), 'applicant' => $this->respondUserInfo($applicant)];
		}
		else {
			return response()->json('invalid iin or password', 400);
		}
    }

    protected function respondWithToken($token){
        return ([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
    protected function respondUserInfo($applicant){
        return [
            'iin' => $applicant->iin,
            'email' => $applicant->email,
            'firstname' => $applicant->firstname,
            'lastname' => $applicant->lastname,
            'patronymic' => $applicant->patronymic,
            'phone' => $applicant->phone,
            'modules' => array
            	(
                    (object) 
                    [
                    	"description_en" => "Academic calendar",
						"description_kk" => "Akadem. kúntizbe",
						"description_ru" => "Академ. календарь",
						"icon" => "calendar_today",
						"id" => 2,
						"url" => "academic_calendar",
						"without_params" => null
                    ]
                )
        ];
    }

	public function registerApplicant(Request $request) {

		$validator = Validator::make($request->all(),[
                'iin' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'patronymic' => 'required',
                'password' => 'required',
            ],
            [
                'iin.required' => 'iin required',
                'email.required' => 'email required',
                'phone.required' => 'phone required',
                'firstname.required' => 'firstname required',
                'lastname.required' => 'lastname required',
                'patronymic.required' => 'patronymic required',
                'password.required' => 'password required',
            ]
        );

        if($validator->fails()){
            $error = $validator->errors();
            return response()->json($error, 406);
        }

		$applicant = new Applicant();
        $applicant->firstname = $request->firstname;
        $applicant->lastname = $request->lastname;
        $applicant->patronymic = $request->patronymic;
        $applicant->password = Hash::make($request->password);
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->iin = $request->iin;
        $applicant->save();
	}
}
