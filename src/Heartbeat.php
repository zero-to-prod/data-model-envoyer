<?php

namespace Zerotoprod\DataModelEnvoyer;

class Heartbeat
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const token = 'token';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const interval = 'interval';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const status = 'status';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const last_checked_in_at = 'last_checked_in_at';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public const updated_at = 'updated_at';

    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $token;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public int $interval;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $status;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $last_checked_in_at;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-heartbeat */
    public string $updated_at;
}