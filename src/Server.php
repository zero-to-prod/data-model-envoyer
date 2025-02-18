<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Server
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const user_id = 'user_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const connect_as = 'connect_as';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const ip_address = 'ip_address';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const port = 'port';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const php_seven = 'php_seven';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const php_version = 'php_version';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const freebsd = 'freebsd';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const receives_code_deployments = 'receives_code_deployments';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const should_restart_fpm = 'should_restart_fpm';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment_path = 'deployment_path';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const php_path = 'php_path';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const composer_path = 'composer_path';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const public_key = 'public_key';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const connection_status = 'connection_status';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const current_activity = 'current_activity';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';

    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $user_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $connect_as;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $ip_address;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $port;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $php_seven;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public PhpVersion $php_version;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $freebsd;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $receives_code_deployments;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $should_restart_fpm;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $deployment_path;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $php_path;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $composer_path;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $public_key;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $connection_status;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?string $current_activity;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
}