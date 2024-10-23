<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Servers
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#servers */
    public const servers = 'servers';

    /**
     * @var Server[] $servers
     *
     * @link https://envoyer.io/api-documentation#servers
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Server::class,
        ]
    )]
    public array $servers   ;
}