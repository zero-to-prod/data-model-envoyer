<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Environment
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const environment = 'environment';

    /**
     * @see  https://envoyer.io/api-documentation#get-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $environment;
}