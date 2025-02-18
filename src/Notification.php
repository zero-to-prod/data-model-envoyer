<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Notification
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
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
    public const options = 'options';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const active = 'active';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';

    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
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
    public NotificationOption $options;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $active;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-notification
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
}