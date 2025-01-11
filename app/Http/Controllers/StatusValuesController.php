<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusValue;

class StatusValuesController extends Controller
{
    private $statusValues;
    
    public function __construct()
    {
        $this->statusValues = ['PASS', 'WARN', 'FAIL'];
    }
    
    public function getStatusValues()
    {

        $statusValues = StatusValue::all();
        if ($statusValues->isEmpty())
        {
            dd($statusValues);
            $statusValues = $this->createRandomStatusValues();
            $statusValues = StatusValue::all();
        }

        
        return view('statuses', ['statuses' => $statusValues]);
        // return view('mainContent');
        // return $statusValues;
    }   


    /*
    * Create a set of 37 status values (fail, warn, pass) to be displayed  
    * in a single page along with a distinct id or tag.
    */
    private function createRandomStatusValues() 
    {
        for ($x = 1; $x <= 37; $x++) {
            // create random number to pick one of the three status values
            $randomIndex = rand(0, 2);
            $currentStatus = $this->statusValues[$randomIndex];
            StatusValue::create(['id' => $x, 'status' => $currentStatus]);
        }
    }
}
