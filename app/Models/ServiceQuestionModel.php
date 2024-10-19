<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQuestion extends Model
{
    use HasFactory;


    protected $fillable = [
        'question',
        'date_entered',
        'entered_by',
        'status',
    ];

    public function possibleAnswers()
    {
        return $this->hasMany(ServicePossibleAnswer::class);
    }
}
