<?php

namespace Zerotoprod\DataModelEnvoyer;

enum NotificationType: string
{
    case email = 'email';
    case discord = 'discord';
    case slack = 'slack';
    case teams = 'teams';
}
