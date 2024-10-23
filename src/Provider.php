<?php

namespace Zerotoprod\DataModelEnvoyer;

enum Provider: string
{

    /** @link https://envoyer.io/api-documentation#create-project */
    case bitbucket = 'bitbucket';
    /** @link https://envoyer.io/api-documentation#create-project */
    case github = 'github';
    /** @link https://envoyer.io/api-documentation#create-project */
    case gitlab = 'gitlab';
    /** @link https://envoyer.io/api-documentation#create-project */
    case gitlab_self = 'gitlab-self';
}