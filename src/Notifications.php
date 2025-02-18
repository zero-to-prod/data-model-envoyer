<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Notifications
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-notifications
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const notifications = 'notifications';

    /**
     * @var Notification[] $notifications
     *
     * @see  https://envoyer.io/api-documentation#list-notifications
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Notification::class,
        ]
    )]
    public array $notifications;
}