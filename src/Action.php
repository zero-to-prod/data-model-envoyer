<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Action
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const version = 'version';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const view = 'view';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const sequence = 'sequence';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const created_at = 'created_at';
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const updated_at = 'updated_at';

    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $version;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $view;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $sequence;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $created_at;
    /**
     * @see  https://envoyer.io/api-documentation#list-actions
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $updated_at;
}