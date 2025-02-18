<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Projects
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const projects = 'projects';

    /**
     * @var Project[] $projects
     *
     * @see  https://envoyer.io/api-documentation#get-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Project::class,
        ]
    )]
    public array $projects;
}