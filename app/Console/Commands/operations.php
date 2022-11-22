<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\OperationsService;

class operations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations 
                            {operatorA}
                            {operatorB}
                            {operation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make mathematical operations';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(OperationsService $operationsService)
    {

        $parameters = ['operation' => $this->arguments()["operation"], "operatorA" => $this->arguments()["operatorA"], "operatorB" => $this->arguments()["operatorB"]];

        $result =  $operationsService->doOperation($parameters);

        $this->line($result);
    }
}
