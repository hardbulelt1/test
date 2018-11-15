<?php

namespace App\Http\Presenter;

use Psr\Http\Message\ResponseInterface;

class AppPresenter
{
    /**
     * @param ResponseInterface $response
     * @return array
     */
    public function getData(ResponseInterface $response): array
    {
        $responseData = [];
        $jsonData = $response->getBody()->getContents();
        $data = json_decode($jsonData, true);
        $data = !empty($data['stock']) ? $data['stock'] : [];
        foreach ($data as $item) {
            $responseData['data'][] = [
                'attributes' => [
                    'name' => $item['name'],
                    'volume' => intval($item['volume']),
                    'amount' => isset($item['price']['amount']) ? round($item['price']['amount'],2) : 0
                ]
            ];
        }

        return $responseData;
    }
}
