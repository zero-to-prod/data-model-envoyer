<?php

namespace Zerotoprod\DataModelEnvoyer;

class Notification
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-notification */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const type = 'type';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const options = 'options';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const active = 'active';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-notification */
    public const updated_at = 'updated_at';

    /** @link https://envoyer.io/api-documentation#get-notification */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public NotificationType $type;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public NotificationOption $options;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public bool $active;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-notification */
    public string $updated_at;
}