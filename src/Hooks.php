<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Hooks
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-actions */
    public const hooks = 'hooks';

    /**
     * @var Hook[] $hooks
     *
     * @link https://envoyer.io/api-documentation#list-hooks
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Hook::class,
            'level' => 2,
        ]
    )]
    public array $hooks;
}