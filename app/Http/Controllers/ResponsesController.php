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


class ResponsesController extends Controller
{
    public function getUserResponses(Request $request)
    {
        try{
            $userId = $request->user()->id;
            $profileController = new ProfileController();
            $leadsController =new LeadsController();
            $ResponsesArr = $this->arrResponses($contacted_lead);
            $resultArr = array("");
            
            return response()->json(["message"=>"Successful","Responses"=>$resultArr],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500); 
        }
    }
    
}


                              
                                        
                                               
                                            
                                            
                                                
 
        
       
                                        
                                                
                                                