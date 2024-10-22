<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\ServicesModel;
use App\Models\UserServicesModel;
use App\Models\LeadsModel;

class ProfileController extends Controller
{
  
     public function openDashboard(Request $request)
     {
        $user = $request->user();
        $first_name = $user->first_name;
        $email = $user->email;
        $logo = $user->logo;
        $contact_number=$user->contact_number;
        $is_company_website=$user->is_company_website;
        $company_size=$user->company_size;
        $is_company_sales_team=$user->is_company_sales_team;
        $location=$user->location;
        $company_name = $user->company_name;
        $company_registration_number = $user->company_registration_number;
        $credits_balance = $user->credits_balance;
        $timestamp = strtotime($user->login_at);
        $greetings = $this->greetings();
        $login_at = date('l, j M g:ia', $timestamp);
        $latest_services = $this->getUserServices($user->id);
        $latest_services_limited = array_slice($latest_services, 0, 2);
        $number_of_leads = count($this->getLeadsCount($user->id));
        $service_badge = count($latest_services)-2;
        $unread_leads = count($this->getUnreadLeads($user->id));
        
        return view("dashboard",compact(["first_name","login_at","greetings","contact_number","company_name","is_company_website","company_size","is_company_sales_team","logo","location","company_registration_number","latest_services_limited","service_badge","email","number_of_leads","unread_leads","credits_balance"]));
     }
     public function edit(Request $request): View
     {
         $user = $request->user();
         $services = ServicesModel::pluck('service_name')->toArray();
         $latest_services = $this->getUserServices($user->id);
     
         return view('profile.edit', [
             'user' => $user,
             'services' => $services,
             'company_name' => $user->company_name,
             'is_company_website' => $user->is_company_website,
             'company_size' => $user->company_size,
             'is_company_sales_team' => $user->is_company_sales_team,
             'contact_number' => $user->contact_number,
             'company_registration_number' => $user->company_registration_number,
             'location'=>$user->location,
             'latest_services' => $latest_services,
         ]);
     }
     

   
     public function update(ProfileUpdateRequest $request): RedirectResponse
     {
         
         $request->user()->fill($request->validated());
     
        
         if ($request->user()->isDirty('email')) {
             $request->user()->email_verified_at = null;
         }
     
         
         if ($request->user()->isDirty()) {
             
             $request->user()->save();
     
             
             $first_name = $request->first_name;
             $company_name = $request->company_name;
             $company_registration_number = $request->company_registration_number;
             $logo = $request->logo;
     
           
             return Redirect::route('profile.edit')
                 ->with('status', 'profile-updated')
                 ->with('success', 'Profile updated successfully!')
                 ->with([
                     'user' => $first_name,
                     'company_name' => $company_name,
                     'company_registration_number' => $company_registration_number,
                     'logo' => $logo
                 ]);
         }
     
         
         return Redirect::route('profile.edit')->with('status', 'No changes were made.');
     }
     

    public function updateServices(Request $request): RedirectResponse
    {
    
        $user = $request->user();
        UserServicesModel::where('user_id', $user->id)->delete();
        $services = $request->services;
        for($i=0; $i<count($services);$i++)
        {
            $service = $services[$i];
            $id = $this->getServiceID($service);
            $service = UserServicesModel::create(['user_id'=>$user->id, 'service_id'=>$id, 'entered_by'=>$user->id]);

        }
        $latest_services = $this->getUserServices($user->id);

        return Redirect::route('profile.edit')->with('latest_services', $latest_services);
    }
    
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function createProfession(Request $request)
    {
        return view("profile.create-profession");
    }
    public function createAccountProfession(Request $request)
    {
        return view("profile.create-account-profession");
    }
    private function getServiceID($service_name):int
    {
        $id = ServicesModel::where('service_name', $service_name)->pluck('id')->first();
        return (int)$id;
    }
    private function greetings()
{
    $current_hour = (int)date('H') + 2;

    if ($current_hour >= 5 && $current_hour < 12) {
        return 'Good morning';
    } elseif ($current_hour >= 12 && $current_hour < 17) {
        return 'Good afternoon';
    } elseif ($current_hour >= 17 && $current_hour < 21) {
        return 'Good evening';
    } else {
        return 'Good night';
    }



    }
    public function getUserServices($user_id){
        $latest_services = UserServicesModel::where('user_id', $user_id)->join('master_services', 'user_services.service_id', '=', 'master_services.id')
        ->pluck('master_services.service_name')
        ->toArray();
        return $latest_services;
    }
    public function getLeadsCount($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->select('leads.id')
        ->where('u.user_id', $user_id)
        ->get();
        return $results;
    }
    public function getLeads($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'leads.user_id', '=', 's.id')
        ->select(
            'm.service_name', 
            'leads.user_id as lead_user_id', 
            'u.user_id as user_service_user_id', 
            'leads.service_id', 
            's.first_name', 
            's.last_name', 
            'leads.date_entered', 
            'leads.id', 
            'leads.description', 
            's.location',
            's.is_phone_verified',
            'leads.urgent',
            'leads.credits',
            'leads.hiring_decision'
        )
        ->where('u.user_id', $user_id)
        ->orderBy('leads.id', 'desc') 
        ->get();
    
    return $results;
    
    }
    public function getIndividualLead($lead_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'leads.user_id', '=', 's.id')
        ->select(
            'm.service_name', 
            'leads.user_id as lead_user_id', 
            'u.user_id as user_service_user_id', 
            'leads.service_id', 
            's.first_name', 
            's.last_name', 
            'leads.date_entered', 
            'leads.id', 
            'leads.description', 
            's.location',
            's.is_phone_verified',
            'leads.urgent',
            'leads.credits',
            's.email',
            's.contact_number',
            'leads.status',
            'leads.hiring_decision'
        )
        ->where('leads.id', $lead_id)
        ->first();
    
    return $results;
    
    }

    private function getUnreadLeads($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->select('m.service_name', 'leads.user_id as lead_user_id', 'u.user_id as user_service_user_id', 'leads.service_id', 'leads.id')
        ->where('u.user_id', $user_id)
        ->whereNotIn('leads.id', function ($query) use ($user_id) {
            $query->select('lead_id')
                  ->from('leads_read')
                  ->where('user_id', $user_id);
        })
        ->get();

    return $results;
    }
}
