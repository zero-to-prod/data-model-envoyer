<?php

namespace Zerotoprod\DataModelEnvoyer;

class UpdateHook
{
    use DataModel;

    public const servers = 'servers';

    /**
     * @link https://envoyer.io/api-documentation#create-hook
     *
     * @var int[]
     */
    public array $servers;
}