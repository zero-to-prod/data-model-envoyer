<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class UpdateEnvironment
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const key = 'key';
    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const contents = 'contents';
    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const servers = 'servers';

    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $key;
    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $contents;
    /**
     * @see  https://envoyer.io/api-documentation#update-environment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public array $servers;
}