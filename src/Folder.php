<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Folder
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const from = 'from';
    /**
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const to = 'to';

    /**
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $from;
    /**
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $to;
}