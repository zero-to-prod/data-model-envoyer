<?php

namespace Zerotoprod\DataModelEnvoyer;

class Server
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-server */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const user_id = 'user_id';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const connect_as = 'connect_as';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const ip_address = 'ip_address';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const port = 'port';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const php_seven = 'php_seven';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const php_version = 'php_version';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const freebsd = 'freebsd';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const receives_code_deployments = 'receives_code_deployments';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const should_restart_fpm = 'should_restart_fpm';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const deployment_path = 'deployment_path';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const php_path = 'php_path';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const composer_path = 'composer_path';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const public_key = 'public_key';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const connection_status = 'connection_status';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const current_activity = 'current_activity';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-server */
    public const updated_at = 'updated_at';

    /** @link https://envoyer.io/api-documentation#get-server */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-server */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-server */
    public int $user_id;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $connect_as;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $ip_address;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $port;
    /** @link https://envoyer.io/api-documentation#get-server */
    public bool $php_seven;
    /** @link https://envoyer.io/api-documentation#get-server */
    public PhpVersion $php_version;
    /** @link https://envoyer.io/api-documentation#get-server */
    public bool $freebsd;
    /** @link https://envoyer.io/api-documentation#get-server */
    public bool $receives_code_deployments;
    /** @link https://envoyer.io/api-documentation#get-server */
    public bool $should_restart_fpm;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $deployment_path;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $php_path;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $composer_path;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $public_key;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $connection_status;
    /** @link https://envoyer.io/api-documentation#get-server */
    public ?string $current_activity;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-server */
    public string $updated_at;
}