<?php

namespace Zerotoprod\DataModelEnvoyer;

class NewProject
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#create-project */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const provider = 'provider';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const repository = 'repository';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const branch = 'branch';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const type = 'type';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const retain_deployments = 'retain_deployments';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const monitor = 'monitor';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const composer = 'composer';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const composer_dev = 'composer_dev';
    /** @link https://envoyer.io/api-documentation#create-project */
    public const composer_quiet = 'composer_quiet';

    /** @link https://envoyer.io/api-documentation#create-project */
    public string $name;
    /** @link https://envoyer.io/api-documentation#create-project */
    public Provider $provider;
    /** @link https://envoyer.io/api-documentation#create-project */
    public string $repository;
    /** @link https://envoyer.io/api-documentation#create-project */
    public string $branch;
    /** @link https://envoyer.io/api-documentation#create-project */
    public ProjectType $type;
    /** @link https://envoyer.io/api-documentation#create-project */
    public int $retain_deployments;
    /** @link https://envoyer.io/api-documentation#create-project */
    public string $monitor;
    /** @link https://envoyer.io/api-documentation#create-project */
    public bool $composer;
    /** @link https://envoyer.io/api-documentation#create-project */
    public bool $composer_dev;
    /** @link https://envoyer.io/api-documentation#create-project */
    public bool $composer_quiet;
}