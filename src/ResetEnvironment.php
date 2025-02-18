<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class ResetEnvironment
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#reset-environment-key
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const key = 'key';

    /**
     * @see  https://envoyer.io/api-documentation#reset-environment-key
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $key;
}