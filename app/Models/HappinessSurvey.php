<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappinessSurvey extends Model
{
    use HasFactory;

    public $fillable = [
        "manual_id",
        "location",
        "name",
        "age",
        "occupation",
        "from",
        "q1",
        "q2",
        "q3",
        "q4",
    ];

    public static $fields = [
        ["name" => "manual_id",
            "label" => "Input manual id", "type" => "text"
        ], 
        ["name" => "location",
            "label" => "Where are you taking this?","type" => "text"
        ],
        ["name" => "name",
            "label" => "What's your name?","type" => "text"
        ],
        ["name" => "age",
            "label" => "How old are you?","type" => "number"
        ], 
        ["name" => "occupation",
            "label" => "What do you do for a living?","type" => "text"
        ], 
        ["name" => "from",
            "label" => "Where are you from?","type" => "text"
        ], 
        ["name" => "q1",
            "label" => "What do you think it means to be happy?","type" => "textarea"
        ], 
        ["name" => "q2",
            "label" => "At what point in your life were you most unhappy?","type" => "textarea"
        ], 
        ["name" => "q3",
            "label" => "How did you cope?","type" => "textarea"
        ], 
        ["name" => "q4",
            "label" => "Any wise words for someone who might be unhappy?","type" => "textarea"
        ],
    ];

}
