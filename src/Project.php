<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Project
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-projects */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const user_id = 'user_id';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const version = 'version';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const provider = 'provider';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const plain_repository = 'plain_repository';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const repository = 'repository';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const type = 'type';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const branch = 'branch';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const push_to_deploy = 'push_to_deploy';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const webhook_id = 'webhook_id';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const status = 'status';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const should_deploy_again = 'should_deploy_again';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const deployment_started_at = 'deployment_started_at';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const deployment_finished_at = 'deployment_finished_at';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_status = 'last_deployment_status';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const daily_deploys = 'daily_deploys';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const weekly_deploys = 'weekly_deploys';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_took = 'last_deployment_took';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const retain_deployments = 'retain_deployments';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const environment_servers = 'environment_servers';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const folders = 'folders';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const monitor = 'monitor';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const new_york_status = 'new_york_status';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const london_status = 'london_status';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const singapore_status = 'singapore_status';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const token = 'token';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const updated_at = 'updated_at';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const install_dev_dependencies = 'install_dev_dependencies';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const install_dependencies = 'install_dependencies';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const quiet_composer = 'quiet_composer';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const servers = 'servers';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const has_environment = 'has_environment';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const has_monitoring_error = 'has_monitoring_error';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const has_missing_heartbeats = 'has_missing_heartbeats';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployed_branch = 'last_deployed_branch';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_id = 'last_deployment_id';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_author = 'last_deployment_author';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_avatar = 'last_deployment_avatar';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_hash = 'last_deployment_hash';
    /** @link https://envoyer.io/api-documentation#list-projects */
    public const last_deployment_timestamp = 'last_deployment_timestamp';

    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $id;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $user_id;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $version;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $name;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public Provider $provider;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $plain_repository;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $repository;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public ProjectType $type;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $branch;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $push_to_deploy;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public ?int $webhook_id;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public ?string $status;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $should_deploy_again;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public ?string $deployment_started_at;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $deployment_finished_at;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployment_status;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $daily_deploys;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $weekly_deploys;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $last_deployment_took;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $retain_deployments;
    /**
     * @var int[]
     *
     * @link https://envoyer.io/api-documentation#list-projects
     */
    public array $environment_servers;

    /** @link https://envoyer.io/api-documentation#list-projects */
    public array $folders;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $monitor;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $new_york_status;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $london_status;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $singapore_status;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $token;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $updated_at;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $install_dev_dependencies;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $install_dependencies;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $quiet_composer;
    /**
     * @var Server[] $servers
     * @link https://envoyer.io/api-documentation#list-projects
     */
    #[Describe([
        'cast' => [DataModelHelper::class, 'mapOf'],
        'type' => Server::class
    ])]
    public array $servers;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $has_environment;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $has_monitoring_error;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public bool $has_missing_heartbeats;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployed_branch;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public int $last_deployment_id;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployment_author;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployment_avatar;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployment_hash;
    /** @link https://envoyer.io/api-documentation#list-projects */
    public string $last_deployment_timestamp;
}