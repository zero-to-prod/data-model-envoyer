<?php

namespace Zerotoprod\DataModelEnvoyer;

class Environment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-environment */
    public const environment = 'environment';

    /** @link https://envoyer.io/api-documentation#get-environment */
    public string $environment;
}