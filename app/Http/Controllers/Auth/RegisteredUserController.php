<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserServicesModel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    { 
        try {
           
            $role = $request->role;
        $company_name = $request->company_name;
        $is_company_website = $request->is_company_website;
        $company_size = $request->company_size;
        $is_company_sales_team  = $request->is_company_sales_team;
        $is_company_social_media = $request->is_company_social_media;
        $location_select = $request->location_select;
        $service_id = (int)$request->service_id;
     
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:15'],
            'location' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_number' => $request->contact_number,
            'location' => $request->location,
            'role' => $role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_name' => $company_name,
            'is_company_website' => $is_company_website,
            'company_size' => $company_size,
            'is_company_sales_team' => $is_company_sales_team,
            'is_company_social_media' => $is_company_social_media,
            'entered_by' => $request->email,
        ]);

        $service = UserServicesModel::create(['user_id'=>$user->id, 'service_id'=>$service_id, 'entered_by'=>$user->id]);
        
        event(new Registered($user));

        Auth::login($user);

        return response()->json(["message"=>"Success","user"=>$user],200);
        } catch (\Exception $e) {
            return response()->json(["message" => "Error : " . $e->getMessage()],500);
        }
    }
}
