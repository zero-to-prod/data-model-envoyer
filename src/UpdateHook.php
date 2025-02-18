<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class UpdateHook
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const servers = 'servers';

    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     *
     * @var int[]
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public array $servers;
}