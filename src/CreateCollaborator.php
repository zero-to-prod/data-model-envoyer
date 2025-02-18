<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CreateCollaborator
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#create-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const email = 'email';

    /**
     * @see  https://envoyer.io/api-documentation#create-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $actions;
}