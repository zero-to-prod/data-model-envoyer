<?php

namespace Zerotoprod\DataModelEnvoyer;

class Folder
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-linked-folders */
    public const from = 'from';
    /** @link https://envoyer.io/api-documentation#get-linked-folders */
    public const to = 'to';

    /** @link https://envoyer.io/api-documentation#get-linked-folders */
    public string $from;
    /** @link https://envoyer.io/api-documentation#get-linked-folders */
    public string $to;
}