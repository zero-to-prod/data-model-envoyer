<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class Projects
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-project */
    public const projects = 'projects';

    /**
     * @var Project[] $projects
     *
     * @link https://envoyer.io/api-documentation#get-project
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Project::class,
        ]
    )]
    public array $projects;
}