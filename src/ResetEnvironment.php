<?php

namespace Zerotoprod\DataModelEnvoyer;

class ResetEnvironment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#reset-environment-key */
    public const key = 'key';

    /** @link https://envoyer.io/api-documentation#reset-environment-key */
    public string $key;
}