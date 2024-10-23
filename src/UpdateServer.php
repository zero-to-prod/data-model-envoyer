<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

class UpdateServer
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#update-server */
    public const name = 'name';

    /** @link https://envoyer.io/api-documentation#update-server */
    #[Describe(['required' => true])]
    public string $name;
}