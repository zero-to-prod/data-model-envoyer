<?php

namespace Zerotoprod\DataModelEnvoyer;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class GetLinkedFolders
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-linked-folders */
    public const folders = 'folders';

    /**
     * @var Folder[] $folders
     *
     * @link https://envoyer.io/api-documentation#get-linked-folders
     */
    #[Describe([
            'cast' => [DataModelHelper::class, 'mapOf'],
            'type' => Folder::class,
        ]
    )]
    public array $folders;
}