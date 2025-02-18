<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CreateNotification
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const type = 'type';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const email_address = 'email_address';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const slack_webhook = 'slack_webhook';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const discord_webhook = 'discord_webhook';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const teams_webhook = 'teams_webhook';

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public NotificationType $type;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $email_address;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $slack_webhook;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $discord_webhook;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $teams_webhook;
}