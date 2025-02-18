<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class UpdateNotification
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#update-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';

    /**
     * @see  https://envoyer.io/api-documentation#update-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
}