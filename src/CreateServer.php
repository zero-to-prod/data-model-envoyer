<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CreateServer
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const connect_as = 'connectAs';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const host = 'host';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const port = 'port';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const php_version = 'phpVersion';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const receives_code_deployments = 'receivesCodeDeployments';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment_path = 'deploymentPath';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const restart_fpm = 'restartFpm';
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const composer_path = 'composerPath';

    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public string $connect_as;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public string $host;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $port;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe(['required' => true])]
    public PhpVersion $php_version;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $receives_code_deployments;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $deployment_path;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $restart_fpm;
    /**
     * @see  https://envoyer.io/api-documentation#create-server
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $composer_path;
}