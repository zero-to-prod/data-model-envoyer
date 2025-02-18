<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class GetEnvironment
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const key = 'key';

    /**
     * @see  https://envoyer.io/api-documentation#get-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public string $key;
}