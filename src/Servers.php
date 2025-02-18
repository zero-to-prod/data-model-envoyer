<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Servers
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#servers
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const servers = 'servers';

    /**
     * @var Server[] $servers
     *
     * @see  https://envoyer.io/api-documentation#servers
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Server::class,
        ]
    )]
    public array $servers;
}