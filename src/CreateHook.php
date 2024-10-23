<?php

namespace Zerotoprod\DataModelEnvoyer;

class CreateHook
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#create-hook */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#create-hook */
    public const script = 'script';
    /** @link https://envoyer.io/api-documentation#create-hook */
    public const run_as = 'runAs';
    /** @link https://envoyer.io/api-documentation#create-hook */
    public const action_id = 'actionId';
    /** @link https://envoyer.io/api-documentation#create-hook */
    public const timing = 'timing';
    /** @link https://envoyer.io/api-documentation#create-hook */
    public const servers = 'servers';

    /** @link https://envoyer.io/api-documentation#create-hook */
    public string $name;
    /** @link https://envoyer.io/api-documentation#create-hook */
    public string $script;
    /** @link https://envoyer.io/api-documentation#create-hook */
    public string $run_as;
    /** @link https://envoyer.io/api-documentation#create-hook */
    public int $action_id;
    /** @link https://envoyer.io/api-documentation#create-hook */
    public string $timing;

    /**
     * @link https://envoyer.io/api-documentation#create-hook
     *
     * @var int[]
     */
    public array $servers;
}