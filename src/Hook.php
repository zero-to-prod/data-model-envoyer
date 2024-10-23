<?php

namespace Zerotoprod\DataModelEnvoyer;

class Hook
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-hook */
    public const user_id = 'user_id';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const action_id = 'action_id';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const timing = 'timing';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const run_as = 'run_as';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const script = 'script';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const sequence = 'sequence';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const updated_at = 'updated_at';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#get-hook */
    public const id = 'id';

    /** @link https://envoyer.io/api-documentation#get-hook */
    public int $user_id;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public int $action_id;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $timing;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $run_as;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $script;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public int $sequence;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $updated_at;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#get-hook */
    public int $id;
}