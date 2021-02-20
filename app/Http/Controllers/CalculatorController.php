<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function operation($number,$sign,$number2){
    	switch ($sign) {
    		case '+':
    		$result = (int)$number+(int)$number2
    			return view("come",["my_result"=>$result]);   
    			break;
    		case '-':
    			$result = (int)$number-(int)$number2
    			return view("come",["my_result"=>$result]);     			break;
    		case '*':
    			$result = (int)$number*(int)$number2
    			return view("come",["my_result"=>$result]);     	break;
    		case '/':
    			$result = (int)$number/(int)$number2
    			return view("come",["my_result"=>$result]);     					break;
    		default:
    			# code...
    			break;
    	}
    }
}
