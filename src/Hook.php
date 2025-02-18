<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Hook
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const user_id = 'user_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const action_id = 'action_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const timing = 'timing';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const run_as = 'run_as';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const script = 'script';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const sequence = 'sequence';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';

    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $user_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $action_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $timing;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $run_as;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $script;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $sequence;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#get-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
}