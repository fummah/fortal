<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ServicesModel;
use App\Models\ContactedLeadsModel;
use App\Models\UserServicesModel;
use App\Models\LeadsModel;
use App\Models\ServiceQuestionModel;
use App\Models\ServicePossibleAnswerModel;
use App\Models\CreditsTrailModel;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\TemplatesController; 
use Illuminate\Support\Facades\DB;
use App\Models\ServicePossibleAnswer;
use App\Models\ServiceQuestion;
use App\Models\LeadsTrailModel;
use App\Models\TrailsModel;
use Exception;

class LeadsController extends Controller
{
    public function getUserLeads(Request $request)
    {
        try{
            $userId = $request->user()->id;
            $profileController = new ProfileController();
    $leads = $profileController->getLeads($userId);    
    $leads_count = count($leads);
    $services_count = count($profileController->getUserServices($userId));
    $leadsArr = $this->arrLeads($leads);
    $resultArr = array("leadsArr"=>$leadsArr,"leads_count"=>$leads_count,"services_count"=>$services_count);
            
            return response()->json(["message"=>"Successful","leads"=>$resultArr],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500); 
        }
    }
    public function showLeads(Request $request)
{
    $userId = $request->user()->id;     
    $profileController = new ProfileController();
    $leads = $profileController->getLeads($userId);    
    $leads_count = count($leads);
    $services_count = count($profileController->getUserServices($userId));
    $leadsArr = $this->arrLeads($leads);
    //$resultArr = array("leadsArr"=>$leadsArr,"leads_count"=>$leads_count,"services_count"=>$services_count);   
  
    return view("leads.show-leads",compact(["leadsArr","leads_count","services_count"]));
}

public function getLeadDetails(Request $request)
{
    $lead_id = $request->lead_id;
    $profileController = new ProfileController();
    $templates = new TemplatesController();
    $lead = $profileController->getIndividualLead($lead_id);
    $first_letter = substr($lead->first_name, 0, 1);
    $first_name = $lead->first_name;
    $last_name = $lead->last_name;
    $contacted = (int)$this->userResponse($lead_id);
    $remender = 5-$contacted;
    $lead_user_id  = (int)$lead->lead_user_id;
    $frequent = $this->frequentUser($lead_user_id);
    $urgent = (int)$lead->urgent;
    $is_phone_verified = (int)$lead->is_phone_verified;
    $time = $this->timeAgo($lead->date_entered);
    $service_name = $lead->service_name;
    $location = $lead->location;
    $description = $lead->description; 
    $hiring_decision = (int)$lead->hiring_decision;
    $credits = $lead->credits;
    $email = $lead->email;
    $contact_number = $lead->contact_number;
    $masked_email = $this->maskEmail($email);
    $masked_contact_number = $this->maskPhoneNumber($contact_number);
   
$details = $templates->showLeadsDetails($lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$masked_email,$masked_contact_number);

    return response($details);
}
public function getResponseDetails(Request $request)
{
    $lead_id = $request->lead_id;
    $profileController = new ProfileController();
    $templates = new TemplatesController();
    $lead = $profileController->getIndividualLead($lead_id);
    $first_letter = substr($lead->first_name, 0, 1);
    $first_name = $lead->first_name;
    $last_name = $lead->last_name;
    $contacted = (int)$this->userResponse($lead_id);
    $remender = 5-$contacted;
    $lead_user_id  = (int)$lead->lead_user_id;
    $frequent = $this->frequentUser($lead_user_id);
    $urgent = (int)$lead->urgent;
    $is_phone_verified = (int)$lead->is_phone_verified;
    $time = $this->timeAgo($lead->date_entered);
    $service_name = $lead->service_name;
    $location = $lead->location;
    $description = $lead->description; 
    $hiring_decision = (int)$lead->hiring_decision;
    $credits = $lead->credits;
    $email = $lead->email;
    $contact_number = $lead->contact_number;
    $masked_email = $this->maskEmail($email);
    $masked_contact_number = $this->maskPhoneNumber($contact_number);
    $lead_status = $lead->status;
   
$details = $templates->showResponseDetails( $lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$email,$contact_number,$lead_status);

    return response($details);
}
private function arrLeads($leads = array())
{
    $leadsArr = array();
    foreach($leads as $lead)
    {
        $lead_id = $lead->id;
        $first_letter = substr($lead->first_name, 0, 1);
        $first_name = $lead->first_name;
        $last_name = $lead->last_name;
        $contacted = (int)$this->userResponse($lead_id);
        $remender = 5-$contacted;
        $lead_user_id  = (int)$lead->lead_user_id;
        $frequent = $this->frequentUser($lead_user_id);
        $urgent = (int)$lead->urgent;
        $is_phone_verified = (int)$lead->is_phone_verified;
        $time = $this->timeAgo($lead->date_entered);
        $service_name = $lead->service_name;
        $location = $lead->location;
        $description = $lead->description;
        $hiring_decision = (int)$lead->hiring_decision;    
        $credits = $lead->credits;
        $additional_details = (int)strlen($description);
    // $questions = ServiceQuestionModel::with('possibleAnswers')->get();
        $inarr = array("lead_id"=>$lead_id,"first_letter"=>$first_letter,"first_name"=>$first_name,"last_name"=>$last_name,"time"=>$time,"service_name"=>$service_name,"location"=>$location,"description"=>$description,"contacted"=>$contacted,"remender"=>$remender,"frequent"=>$frequent,"urgent"=>$urgent,"is_phone_verified"=>$is_phone_verified,"additional_details"=>$additional_details,"credits"=>$credits,"hiring_decision"=>$hiring_decision);
        array_push($leadsArr,$inarr);

    }  
    return $leadsArr;
}

    public function showResponses(Request $request)
    {
        $userId = $request->user()->id; 
        $profileController = new ProfileController();
        $leads = $profileController->getLeads($userId);    
        $leads_count = count($leads);
        $services_count = count($profileController->getUserServices($userId));
        $leadsArr = $this->arrLeads($leads);
      
        return view('leads.responses', compact("leadsArr","leads_count","services_count"));
    }
    public function showHelp()
    {       

        return view("leads.help");
    }
    public function getServices(Request $request)
    {  
        $serviceTxt = $request->serviceTxt;
        try{
            $services = ServicesModel::where("service_name", "LIKE", "%{$serviceTxt}%")->select("service_name","id")->get();
            return response()->json(["message"=>"success","services"=>$services],200);
        }   
        catch(Exception $e) 
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
        }

    }
    private function userResponse($lead_id)
    {
        return ContactedLeadsModel::where('lead_id',$lead_id)->count();
    }
    private function frequentUser($user_id)
    {
        $leads = LeadsModel::select(DB::raw("DATE_FORMAT(date_entered, '%Y-%m-%d') as dat"))
    ->where('user_id', $user_id)
    ->groupBy(DB::raw("DATE_FORMAT(date_entered, '%Y-%m-%d')"))
    ->get($user_id);

    return (int)count($leads);
    }

    function timeAgo($datetime, $full = false) {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);  // Calculate weeks
        $diff->d -= $diff->w * 7;        // Subtract the weeks
    
        $string = ['y' => 'year','m' => 'month','w' => 'week','d' => 'day', 'h' => 'hour','i' => 'minute', 's' => 'second',];
    
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
    
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }


    public function getContactNumber($userId)
    {
        $user = UserServicesModel::find( $userId);

        if ($user) {
            return $user->contact_number;
        }

        return null;
    }

    public function getAnswers(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'question_id' => 'required|integer|exists:service_questions,id',
        ]);

        // Fetch possible answers based on the provided question_id
        $answers = ServicePossibleAnswer::where('service_question_id', $request->question_id)->get();

        // Return the possible answers as a JSON response
        return response()->json($answers);
    }
    public function openContacts(Request $request)
    {
        try{
            $user = $request->user();
            $lead_id = (int)$request->lead_id;
            $profileController = new ProfileController();
            $lead = $profileController->getIndividualLead($lead_id);
            $credits = $lead->credits;
            $credits_balance = $user->credits_balance;
            
            if($credits_balance>=$credits)
            {
                $balance = $credits_balance - $credits;
                $user->credits_balance = $balance;
                $user->save();
                $trail = CreditsTrailModel::create(["user_id"=>$user->id,"lead_id"=>$lead_id,"credits"=>$credits,"entered_by"=>$user->id]);
                $arr = array("email"=>$lead->email,"contact_number"=>$lead->contact_number);
                return response()->json(["message"=>"Okay","details"=>$arr,"button"=>""],200);
            }
            else{
                $first_name = $lead->first_name;
                $templates = new TemplatesController();
                $modal_content = $templates->showSubscription($first_name,$credits,$credits_balance);
                return response()->json(["message"=>"No credits","content"=>$modal_content],200);
            }           


        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error".$e->getMessage()],500);
        }
    }
    private function maskEmail($email) {
        list($localPart, $domainPart) = explode('@', $email);
        $maskedLocal = $localPart[0] . str_repeat('*', strlen($localPart) - 2) . $localPart[strlen($localPart) - 1];
        $domainParts = explode('.', $domainPart);
        $maskedDomain = $domainParts[0][0] . str_repeat('*', strlen($domainParts[0]) - 2) . $domainParts[0][strlen($domainParts[0]) - 1];
        $maskedEmail = $maskedLocal . '@' . $maskedDomain . '.' . $domainParts[1];    
        return $maskedEmail;
    }

    private function maskPhoneNumber($phoneNumber) {
        if (strlen($phoneNumber) < 10) {
            return $phoneNumber; // If not, return the phone number as is
        }        
        $maskedPhone = substr($phoneNumber, 0, 3) . str_repeat('*', strlen($phoneNumber) - 3);
        
        return $maskedPhone;
    }

    public function goToEmail(Request $request){
        $user = $request->user();
        $full_name = $user->first_name." ".$user->last_name;
        $message = "Hi ".$user->first_name.",<br/><br/>I found your job on Fortai and wanted to reach out and say hello..<br/><br/>It looks like a perfect match for what I do - 
        I'd love to help you make it happen. Do you have time for a quick call today?<br/><br/>All the best<br/><br/>".$full_name;
        return view('leads.compose-email',compact(["message"]));
    }
    public function addLeadsTrail(Request $request)
    {
        try{
        $user = $request->user();
        $lead_id = (int)$request->lead_id;
        $trail_id =(int)$request->trail_id; 
        $fixed_trail = TrailsModel::where('id',$trail_id)->first();
        $description = $fixed_trail["trail"];
        $trail = LeadsTrailModel::create([
'lead_id'=>$lead_id, 
'user_id'=>$user->id, 
'description'=>$description, 
'entered_by'=>$user->id
        ]);
        return response()->json(['message'=>'Successfull added','trail'=>$trail,'trail_id'=>$trail_id,'status'=>true],200);
    }
    catch(Exception $e){
        return response()->json(['message'=>'There is an error : '.$e->getMessage(),'status'=>false],500);
    }
    }

      
}