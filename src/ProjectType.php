<?php

namespace Zerotoprod\DataModelEnvoyer;

enum ProjectType: string
{

    /** @link https://envoyer.io/api-documentation#create-project */
    case laravel_5 = 'laravel-5';
    /** @link https://envoyer.io/api-documentation#create-project */
    case laravel_4 = 'laravel-4';
    /**
     * Static HTML, Other PHP Projects
     *
     * @link https://envoyer.io/api-documentation#create-project
     */
    case other = 'other';
}