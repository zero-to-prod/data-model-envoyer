<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Hooks
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const hooks = 'hooks';

    /**
     * @var Hook[] $hooks
     *
     * @see  https://envoyer.io/api-documentation#list-hooks
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Hook::class,
            'level' => 2,
        ]
    )]
    public array $hooks;
}