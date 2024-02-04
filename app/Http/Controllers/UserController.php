<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_name' => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
            'email' => ['required', 'email', 'unique:users,email'],
            'leadername' => 'required',
            'binusian' => 'required',
            'password_confirmation' => 'required|same:password',
            // 'cv' => 'required|mimes:pdf,png,jpg,jpeg',
            // 'id_card' => 'required|mimes:pdf,png,jpg,jpeg',
            // 'flazz_card' =>,
            // 'name' => 'required',
            'whatsapp' => 'required|min:9|unique:users,whatsapp',
            'github' => 'required',
            'birth_place' => 'required',
            'birth_date' => [
                'required',
                function ($attribute, $value, $fail) {
                    $minAge = 17;
                    $birthdate = new \DateTime($value);
                    $today = new \DateTime();
                    $age = $birthdate->diff($today)->y;

                    if ($age < $minAge) {
                        $fail('Age must be at least '.$minAge.' years old.');
                    }
                },
            ],
            'line' => 'required|unique:users,line',

        ], [
            'group_name.required' => 'Group name must be filled.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.regex' => 'Password must contain at least 1 lowercase letter, 1 uppercase letter, 1 symbol, and 1 number.',
            'binusian.required' => 'Binusian status must be selected.',
            'password_confirmation.required' => 'Password confirmation is required.',
            'password_confirmation.same' => 'Password confirmation must match the password.',
            // 'cv.required' => 'CV is required.',
            // 'cv.mimes' => 'CV must be a PDF, PNG, JPG, or JPEG file.',
            // 'flazz_card.required' => 'Flazz card is required.',
            // 'flazz_card.mimes' => 'Flazz card must be a PDF, PNG, JPG, or JPEG file.',
            // 'id_card.required' => 'ID card is required.',
            // 'id_card.mimes' => 'ID card must be a PDF, PNG, JPG, or JPEG file.',
            'name.required' => 'Name must be filled.',
            'group_name.group_name' => 'Please enter a valid group_name.',
            'group_name.unique' => 'group_name must be unique.',
            'whatsapp.required' => 'Whatsapp number is required.',
            'whatsapp.min' => 'Whatsapp number must have a minimum of 9 characters.',
            'whatsapp.unique' => 'Whatsapp number must be unique.',
            'github.required' => 'Github ID is required.',
            'birth_place.required' => 'Birth place is required.',
            'birth_date.required' => 'Birth date is required.',
            'line.required' => 'LINE ID is required.',
            'line.unique' => 'LINE ID must be unique.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with(['error' => 'Registration failed. Please try again.'])
                ->withInput();
        }

        try {

            $cvFilename = null;
            $idCardFilename = null;
            $flazzCardFilename = null;

            if ($request->hasFile('cv')) {
                $cvFilename = time() . Str::random(10) . 'cv' . '.' . $request->file('cv')->getClientOriginalExtension();
                $request->file('cv')->move(public_path('images'), $cvFilename);
            }

            if ($request->hasFile('id_card')) {
                $idCardFilename = Str::random(10) . time() . 'id' . '.' . $request->file('id_card')->getClientOriginalExtension();
                $request->file('id_card')->move(public_path('images'), $idCardFilename);
            }

            if ($request->hasFile('flazz_card')) {
                $flazzCardFilename = Str::random(10) . time() . 'flazz' . '.' . $request->file('flazz_card')->getClientOriginalExtension();
                $request->file('flazz_card')->move(public_path('images'), $flazzCardFilename);
            }

            Team::create([
                'group_name' => $request->group_name,
                'binusian' => $request->binusian,
                'leadername' => $request->leadername,
            ]);

            User::create([
                'group_name' => $request->group_name,
                'leadername' => $request->leadername,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'binusian' => $request->binusian,
                'whatsapp' => $request->whatsapp,
                'line' => $request->line,
                'github' => $request->github,
                'birth_date' => $request->birth_date,
                'birth_place' => $request->birth_place,
                'cv' => $cvFilename,
                'id_card' => $idCardFilename,
                'flazz_card' => $flazzCardFilename,
            ]);

            // for ($i = 1; $i <= 6; $i++) {
            //     User::create([
            //         'group_name' => 'Group ' . $i,
            //         'leadername' => 'Leader ' . $i,
            //         'password' => Hash::make('password123'), // You might want to use a better method for generating passwords
            //         'email' => 'leader' . $i . '@example.com',
            //         'binusian' => $i % 2 == 0 ? 'BINUSIAN' : 'NONBINUSIAN',
            //         'whatsapp' => '0812345678' . $i,
            //         'line' => 'line_user_' . $i,
            //         'github' => 'github_user_' . $i,
            //         'birth_date' => now()->subYears(rand(17, 30))->format('Y-m-d'), // Random birth date between 17 and 30 years ago
            //         'birth_place' => 'Birth Place ' . $i,
            //         'cv' => 'Logo.png',
            //         'id_card' => 'Logo.png',
            //         'flazz_card' => 'Logo.png',
            //     ]);
            // }

            $credentials = $request->only('group_name', 'password');

            return redirect()->route('dashboard', ['group_name' => $credentials['group_name']]);


            // return redirect()->route('login')->with('success', 'Registration Success. Please Login!');
        } catch (\Exception $e) {

            return back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    // YourController.php

    // public function login_action(Request $request)
    // {
    //     $request->validate([
    //         'group_name' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $team = Team::where('group_name', $request->group_name)->first();

    //     if ($team && Hash::check($request->password, $team->password)) {
    //         Auth::login($team);

    //         $users = User::where('group_name', $request->group_name)->get();

    //         return view('navbarlogin.dashboard', ['users' => $users]);
    //     }

    //     return back()->withErrors(['password' => 'Wrong group name or password!']);
    // }
    public function login_action(Request $request)
    {
        $credentials = $request->only('group_name', 'name', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard', ['group_name' => $credentials['group_name']]);
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // public function password()
    // {
    //     $data['title'] = 'Change Password';
    //     return view('user/password',$data);
    // }

    // public function password_action(Request $request)
    // {
    //     $request->validate([
    //         'old_password' => 'required|current_password',
    //         'new_password' => 'required|confirmed',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return back()->with('success','Password Changed!');
    // }

}
