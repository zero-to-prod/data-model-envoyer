<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

class CreateServer
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#create-server */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const connect_as = 'connectAs';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const host = 'host';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const port = 'port';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const php_version = 'phpVersion';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const receives_code_deployments = 'receivesCodeDeployments';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const deployment_path = 'deploymentPath';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const restart_fpm = 'restartFpm';
    /** @link https://envoyer.io/api-documentation#create-server */
    public const composer_path = 'composerPath';

    /** @link https://envoyer.io/api-documentation#create-server */
    #[Describe(['required' => true])]
    public string $name;
    /** @link https://envoyer.io/api-documentation#create-server */
    #[Describe(['required' => true])]
    public string $connect_as;
    /** @link https://envoyer.io/api-documentation#create-server */
    #[Describe(['required' => true])]
    public string $host;
    /** @link https://envoyer.io/api-documentation#create-server */
    public int $port;
    /** @link https://envoyer.io/api-documentation#create-server */
    #[Describe(['required' => true])]
    public PhpVersion $php_version;
    /** @link https://envoyer.io/api-documentation#create-server */
    public bool $receives_code_deployments;
    /** @link https://envoyer.io/api-documentation#create-server */
    public string $deployment_path;
    /** @link https://envoyer.io/api-documentation#create-server */
    public bool $restart_fpm;
    /** @link https://envoyer.io/api-documentation#create-server */
    public string $composer_path;
}