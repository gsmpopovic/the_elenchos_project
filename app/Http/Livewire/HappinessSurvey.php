<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HappinessSurvey extends Component
{

   public $manual_id = "";
   public $location = "";
   public $name = "";
   public $age = "";
   public $occupation = "";
   public $from = ""; 
   public $q1 = "";
   public $q2 = "";
   public $q3 = "";
   public $q4 = "";

    public function render()
    {
        return view('livewire.happiness-survey');
    }
}
