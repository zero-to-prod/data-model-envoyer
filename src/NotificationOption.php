<?php

namespace Zerotoprod\DataModelEnvoyer;

class NotificationOption
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-notification */
    public const webhook = 'webhook';

    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $webhook;
}