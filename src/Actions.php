<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Actions
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const actions = 'actions';

    /**
     * @var Action[] $actions
     *
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Action::class,
        ]
    )]
    public array $actions;
}