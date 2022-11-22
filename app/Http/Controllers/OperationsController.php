<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OperationsService;

class OperationsController extends Controller
{

    public function doOperation(OperationsService $operationsService, Request $request){

        $parameters = ['operation' => $request->operation, "operatorA" => $request->operatorA, "operatorB" => $request->operatorB];

        $result =  $operationsService->doOperation($parameters);

        return  $operationsService->doOutput('json',$result);

    }
      
   
}
