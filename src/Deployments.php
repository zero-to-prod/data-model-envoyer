<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Deployments
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#deployments
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployments = 'deployments';

    /**
     * @var Deployment[] $deployments
     *
     * @see  https://envoyer.io/api-documentation#deployments
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Deployment::class,
        ]
    )]
    public array $deployments;
}