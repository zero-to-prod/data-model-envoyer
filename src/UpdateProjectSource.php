<?php

namespace Zerotoprod\DataModelEnvoyer;

class UpdateProjectSource
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#update-project-source */
    public const provider = 'provider';
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public const repository = 'repository';
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public const branch = 'branch';
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public const push_to_deploy = 'push_to_deploy';

    /** @link https://envoyer.io/api-documentation#update-project-source */
    public Provider $provider;
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public string $repository;
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public string $branch;
    /** @link https://envoyer.io/api-documentation#update-project-source */
    public bool $push_to_deploy;
}