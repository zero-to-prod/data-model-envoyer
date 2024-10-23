<?php

namespace Zerotoprod\DataModelEnvoyer;

class Process
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const deployment_id = 'deployment_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const server_id = 'server_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const server_name = 'server_name';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const sequence = 'sequence';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const action_id = 'action_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const hook_id = 'hook_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const status = 'status';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const started_at = 'started_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const finished_at = 'finished_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const updated_at = 'updated_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const server = 'server';

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $deployment_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $server_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $server_name;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $sequence;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public ?int $action_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public ?int $hook_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $status;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $started_at;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $finished_at;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $updated_at;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public ?Server $server;
}