<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class EnvironmentServers
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-environment-servers */
    public const servers = 'servers';

    /**
     * @var Server[] $servers
     *
     * @link https://envoyer.io/api-documentation#get-environment-servers
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Server::class,
        ]
    )]
    public array $servers;
}