<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Heartbeats
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-heartbeats */
    public const heartbeats = 'heartbeats';

    /**
     * @var Heartbeat[] $heartbeats
     *
     * @link https://envoyer.io/api-documentation#list-heartbeats
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Heartbeat::class,
        ]
    )]
    public array $heartbeats;
}