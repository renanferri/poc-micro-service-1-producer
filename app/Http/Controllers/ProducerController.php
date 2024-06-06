<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessDataJob;


class ProducerController extends Controller
{
    public function run()
    {
        // simulando dados cartão bancário
        $data = [
            'name' => 'Renan',
            'email' => 'renan.teste@teste.com',
            'cc' => '15483184138412',
            'exp' => '05/31',
            'valor' => 500
        ];

        ProcessDataJob::dispatch($data)->onConnection('rabbitmq');
    }
}
