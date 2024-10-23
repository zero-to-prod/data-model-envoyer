<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Collaborators
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-collaborators */
    public const collaborators = 'collaborators';

    /**
     * @var Collaborator[] $collaborators
     *
     * @link https://envoyer.io/api-documentation#list-collaborators
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Collaborator::class,
        ]
    )]
    public array $collaborators;
}