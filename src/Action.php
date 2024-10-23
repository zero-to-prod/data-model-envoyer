<?php

namespace Zerotoprod\DataModelEnvoyer;

class Action
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#list-actions */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const version = 'version';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const view = 'view';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const sequence = 'sequence';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const created_at = 'created_at';
    /** @link https://envoyer.io/api-documentation#list-actions */
    public const updated_at = 'updated_at';

    /** @link https://envoyer.io/api-documentation#list-actions */
    public int $id;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public int $version;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public string $name;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public string $view;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public int $sequence;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public string $created_at;
    /** @link https://envoyer.io/api-documentation#list-actions */
    public string $updated_at;
}