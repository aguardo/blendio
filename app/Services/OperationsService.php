<?php

namespace App\Services;
 
class OperationsService
{
    public function doOperation(array $parameters): int|string
    {

    	switch($parameters['operation']){
            case 'add' :
                return $result = $parameters['operatorA'] + $parameters['operatorB'];
            case 'substract':
                return $result = $parameters['operatorA'] - $parameters['operatorB'];
            case 'multiply':
                return $result = $parameters['operatorA'] * $parameters['operatorB']; 
            case 'division':
                return $result = $parameters['operatorA'] / $parameters['operatorB'];
            default:
                return 'Operation requested does not exist';
               
        }
    	
    }

    public function doOutput(string $output,  int|string $result): mixed
    {


        switch ($output) {
            case 'json':
                if(is_integer($result)){

                    return response()->json( compact('result'), $status = 200);
                    

                }else{

                    return response()->json([ 'error' => $result], $status = 404);
                }

                break;
        

            default:
                // code...
                break;
        }



    }
}
