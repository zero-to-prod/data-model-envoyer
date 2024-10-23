<?php

namespace Zerotoprod\DataModelEnvoyer;

class UpdateEnvironment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#update-environment */
    public const key = 'key';
    /** @link https://envoyer.io/api-documentation#update-environment */
    public const contents = 'contents';
    /** @link https://envoyer.io/api-documentation#update-environment */
    public const servers = 'servers';

    /** @link https://envoyer.io/api-documentation#update-environment */
    public string $key;
    /** @link https://envoyer.io/api-documentation#update-environment */
    public string $contents;
    /** @link https://envoyer.io/api-documentation#update-environment */
    public array $servers;
}