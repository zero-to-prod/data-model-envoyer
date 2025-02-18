<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Project
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const user_id = 'user_id';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const version = 'version';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const provider = 'provider';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const plain_repository = 'plain_repository';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const repository = 'repository';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const type = 'type';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const branch = 'branch';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const push_to_deploy = 'push_to_deploy';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const webhook_id = 'webhook_id';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const status = 'status';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const should_deploy_again = 'should_deploy_again';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment_started_at = 'deployment_started_at';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment_finished_at = 'deployment_finished_at';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_status = 'last_deployment_status';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const daily_deploys = 'daily_deploys';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const weekly_deploys = 'weekly_deploys';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_took = 'last_deployment_took';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const retain_deployments = 'retain_deployments';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const environment_servers = 'environment_servers';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const folders = 'folders';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const monitor = 'monitor';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const new_york_status = 'new_york_status';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const london_status = 'london_status';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const singapore_status = 'singapore_status';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const token = 'token';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const install_dev_dependencies = 'install_dev_dependencies';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const install_dependencies = 'install_dependencies';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const quiet_composer = 'quiet_composer';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const servers = 'servers';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const has_environment = 'has_environment';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const has_monitoring_error = 'has_monitoring_error';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const has_missing_heartbeats = 'has_missing_heartbeats';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployed_branch = 'last_deployed_branch';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_id = 'last_deployment_id';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_author = 'last_deployment_author';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_avatar = 'last_deployment_avatar';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_hash = 'last_deployment_hash';
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const last_deployment_timestamp = 'last_deployment_timestamp';

    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $user_id;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $version;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Provider $provider;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $plain_repository;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $repository;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ProjectType $type;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $branch;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $push_to_deploy;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?int $webhook_id;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?string $status;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $should_deploy_again;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ?string $deployment_started_at;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $deployment_finished_at;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployment_status;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $daily_deploys;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $weekly_deploys;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $last_deployment_took;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $retain_deployments;
    /**
     * @var int[]
     *
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public array $environment_servers;

    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public array $folders;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $monitor;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $new_york_status;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $london_status;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $singapore_status;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $token;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $install_dev_dependencies;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $install_dependencies;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $quiet_composer;
    /**
     * @var Server[] $servers
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
        'cast' => [DataModelHelper::class, 'mapOf'],
        'type' => Server::class
    ])]
    public array $servers;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $has_environment;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $has_monitoring_error;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $has_missing_heartbeats;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployed_branch;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $last_deployment_id;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployment_author;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployment_avatar;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployment_hash;
    /**
     * @see  https://envoyer.io/api-documentation#list-projects
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $last_deployment_timestamp;
}