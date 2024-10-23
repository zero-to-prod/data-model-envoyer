<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Deployments
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#deployments */
    public const deployments = 'deployments';

    /**
     * @var Deployment[] $deployments
     *
     * @link https://envoyer.io/api-documentation#deployments
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Deployment::class,
        ]
    )]
    public array $deployments;
}