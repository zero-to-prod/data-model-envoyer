<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class UpdateServer
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#update-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';

    /**
     * @see  https://envoyer.io/api-documentation#update-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public string $name;
}