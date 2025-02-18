<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class NewProject
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const provider = 'provider';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const repository = 'repository';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const branch = 'branch';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const type = 'type';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const retain_deployments = 'retain_deployments';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const monitor = 'monitor';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const composer = 'composer';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const composer_dev = 'composer_dev';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const composer_quiet = 'composer_quiet';

    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Provider $provider;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $repository;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $branch;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public ProjectType $type;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $retain_deployments;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $monitor;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $composer;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $composer_dev;
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $composer_quiet;
}