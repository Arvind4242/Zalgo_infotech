<?php

namespace App\Traits;

use App\Settings\ApiSettings;
use GuzzleHttp\Client;

trait SendyTrait
{
    protected function sendyClient()
    {
        return new Client;
    }

    protected function subscribeToSendy($email, $name = '')
    {
        $config = app(ApiSettings::class);
        $client = $this->sendyClient();
        $apiKey = $config->sendy_api_key;
        $listId = $config->sendy_api_list_id;
        $sendyUrl = $config->sendy_api_subscribe_url;

        $response = $client->post($sendyUrl.'/subscribe', [
            'form_params' => [
                'api_key' => $apiKey,
                'email' => $email,
                'name' => $name,
                'list' => $listId,
            ],
        ]);

        return $response->getBody()->getContents();
    }
}
