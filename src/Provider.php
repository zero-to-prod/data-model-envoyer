<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
enum Provider: string
{

    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case bitbucket = 'bitbucket';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case github = 'github';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case gitlab = 'gitlab';
    /**
     * @see  https://envoyer.io/api-documentation#create-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case gitlab_self = 'gitlab-self';
}