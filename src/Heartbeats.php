<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Heartbeats
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-heartbeats
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const heartbeats = 'heartbeats';

    /**
     * @var Heartbeat[] $heartbeats
     *
     * @see  https://envoyer.io/api-documentation#list-heartbeats
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Heartbeat::class,
        ]
    )]
    public array $heartbeats;
}