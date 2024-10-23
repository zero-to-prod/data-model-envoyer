<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Notifications
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-notifications */
    public const notifications = 'notifications';

    /**
     * @var Notification[] $notifications
     *
     * @link https://envoyer.io/api-documentation#list-notifications
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Notification::class,
        ]
    )]
    public array $notifications;
}