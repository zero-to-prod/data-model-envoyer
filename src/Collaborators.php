<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Collaborators
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-collaborators
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const collaborators = 'collaborators';

    /**
     * @var Collaborator[] $collaborators
     *
     * @see  https://envoyer.io/api-documentation#list-collaborators
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Collaborator::class,
        ]
    )]
    public array $collaborators;
}