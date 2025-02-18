<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class UpdateProjectSource
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const provider = 'provider';
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const repository = 'repository';
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const branch = 'branch';
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const push_to_deploy = 'push_to_deploy';

    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Provider $provider;
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $repository;
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $branch;
    /**
     * @see  https://envoyer.io/api-documentation#update-project-source
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public bool $push_to_deploy;
}