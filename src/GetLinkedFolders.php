<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class GetLinkedFolders
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const folders = 'folders';

    /**
     * @var Folder[] $folders
     *
     * @see  https://envoyer.io/api-documentation#get-linked-folders
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Folder::class,
        ]
    )]
    public array $folders;
}