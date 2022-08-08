<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappinessSurvey extends Model
{
    use HasFactory;

    public $fillable = [
        "manual_id",
        "name",
        "age",
        "occupation",
        "from", 
        "q1",
        "q2",
        "q3",
        "q4"
    ];

}
