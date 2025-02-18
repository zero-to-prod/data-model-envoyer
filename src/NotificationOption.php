<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class NotificationOption
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const webhook = 'webhook';

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $webhook;
}