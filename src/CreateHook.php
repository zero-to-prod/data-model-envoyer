<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CreateHook
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const script = 'script';
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const run_as = 'runAs';
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const action_id = 'actionId';
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const timing = 'timing';
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const servers = 'servers';

    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $script;
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $run_as;
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $action_id;
    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $timing;

    /**
     * @see  https://envoyer.io/api-documentation#create-hook
     *
     * @var int[]
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public array $servers;
}