<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Deployment
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
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const user_id = 'user_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const commit_branch = 'commit_branch';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const commit_hash = 'commit_hash';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const commit_author = 'commit_author';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const commit_avatar = 'commit_avatar';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const commit_message = 'commit_message';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const status = 'status';
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
    public const processes = 'processes';
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project = 'project';

    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $user_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $commit_branch;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $commit_hash;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $commit_author;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $commit_avatar;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $commit_message;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $status;
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
     * @var Process[] $processes
     *
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
        'cast' => [DataModelHelper::class, 'mapOf'],
        'type' => Process::class,
    ])]
    public array $processes;
    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Project $project;
}