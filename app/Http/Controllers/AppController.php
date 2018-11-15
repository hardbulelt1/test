<?php
/**
 * Class AppController
 * @author: Denis Medvedevskih d.medvedevskih@velosite.ru
 */

namespace App\Http\Controllers;


use App\Http\Presenter\AppPresenter;
use App\Http\Service\Http\Client;


class AppController extends Controller
{
    private $client;
    private $appPresenter;

    /**
     * AppController constructor.
     * @param Client $client
     * @param AppPresenter $appPresenter
     */
    public function __construct(Client $client, AppPresenter $appPresenter)
    {
        $this->client = $client;
        $this->appPresenter = $appPresenter;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function update()
    {
        try {
            $response = $this->client->request("http://phisix-api3.appspot.com/stocks.json");
            $responseData = $this->appPresenter->getData($response);
        } catch (\Exception $exception) {
            $responseData = [
                'status' => 'error',
                'message' => 'Send request error'
            ];
        }

        return response()->json($responseData);
    }
}
