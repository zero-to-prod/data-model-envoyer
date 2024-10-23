<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

class GetEnvironment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-environment */
    public const key = 'key';

    /** @link https://envoyer.io/api-documentation#get-environment */
    #[Describe(['required' => true])]
    public string $key;
}