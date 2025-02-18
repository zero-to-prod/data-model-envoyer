<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class ProjectResponse
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project = 'project';

    /**
     * @see  https://envoyer.io/api-documentation#get-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Project $project;
}