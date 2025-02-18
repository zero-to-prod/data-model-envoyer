<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
enum ProjectType: string
{

    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case laravel_5 = 'laravel-5';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case laravel_4 = 'laravel-4';
    /**
     * Static HTML, Other PHP Projects
     *
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case other = 'other';
}