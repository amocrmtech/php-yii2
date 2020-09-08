<?php
namespace AmoCRMTech\Yii2\Components\Client;

use yii\base\BaseObject;

class IntegrationInfo extends BaseObject
{
    public ?string $account_id = null;
    public string  $account_subdomain;
    public string  $redirect_uri;
    public string  $integration_id;
    public string  $secret_key;
}