<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadsModel extends Model
{
    use HasFactory;
    protected $table = "leads";
    public $timestamps = false;
    protected $fillable = [
'user_id', 
'service_id', 
'credits',  
'date_entered', 
'entered_by', 
'description', 
'estimate_quote',
'hiring_decision'
    ];
}
