<?php

namespace Zerotoprod\DataModelEnvoyer;

class ProjectResponse
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-project */
    public const project = 'project';

    /** @link https://envoyer.io/api-documentation#get-project */
    public Project $project;
}