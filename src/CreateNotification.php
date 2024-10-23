<?php

namespace Zerotoprod\DataModelEnvoyer;

class CreateNotification
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-notification */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const type = 'type';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const email_address = 'email_address';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const slack_webhook = 'slack_webhook';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const discord_webhook = 'discord_webhook';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const teams_webhook = 'teams_webhook';

    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public NotificationType $type;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $email_address;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $slack_webhook;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $discord_webhook;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $teams_webhook;
}