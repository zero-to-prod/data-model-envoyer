<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Process
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment_id = 'deployment_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const server_id = 'server_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const server_name = 'server_name';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const sequence = 'sequence';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const action_id = 'action_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const hook_id = 'hook_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const status = 'status';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const started_at = 'started_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const finished_at = 'finished_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const server = 'server';

    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $deployment_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $server_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $server_name;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $sequence;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?int $action_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?int $hook_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $status;
    /** @see https://envoyer.io/api-documentation#get-deployment */
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $started_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $finished_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?Server $server;
}