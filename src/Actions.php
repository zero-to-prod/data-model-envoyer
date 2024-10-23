<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Actions
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-actions */
    public const actions = 'actions';

    /**
     * @var Action[] $actions
     *
     * @link https://envoyer.io/api-documentation#list-actions
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Action::class,
        ]
    )]
    public array $actions;
}