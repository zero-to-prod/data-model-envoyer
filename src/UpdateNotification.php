<?php

namespace Zerotoprod\DataModelEnvoyer;

class UpdateNotification
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#update-notification */
    public const name = 'name';

    /** @link https://envoyer.io/api-documentation#update-notification */
    public string $name;
}