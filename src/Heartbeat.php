<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Heartbeat
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const token = 'token';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const interval = 'interval';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const status = 'status';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_checked_in_at = 'last_checked_in_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';

    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $token;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $interval;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $status;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_checked_in_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
}