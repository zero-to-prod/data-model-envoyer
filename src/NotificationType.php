<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
enum NotificationType: string
{
    /**
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case email = 'email';
    /**
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case discord = 'discord';
    /**
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case slack = 'slack';
    /**
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    case teams = 'teams';
}
