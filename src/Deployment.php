<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Deployment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const user_id = 'user_id';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const commit_branch = 'commit_branch';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const commit_hash = 'commit_hash';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const commit_author = 'commit_author';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const commit_avatar = 'commit_avatar';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const commit_message = 'commit_message';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const status = 'status';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const updated_at = 'updated_at';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const processes = 'processes';
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const project = 'project';

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public int $user_id;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $commit_branch;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $commit_hash;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $commit_author;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $commit_avatar;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $commit_message;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $status;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public string $updated_at;
    /**
     * @var Process[] $processes
     *
     * @link https://envoyer.io/api-documentation#get-deployment
     */
    #[Describe([
        'cast' => [DataModelHelper::class, 'mapOf'],
        'type' => Process::class,
    ])]
    public array $processes;
    /** @link https://envoyer.io/api-documentation#get-deployment */
    public Project $project;
}