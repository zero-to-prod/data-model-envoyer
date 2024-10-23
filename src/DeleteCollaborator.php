<?php

namespace Zerotoprod\DataModelEnvoyer;

class DeleteCollaborator
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#create-collaborator */
    public const email = 'email';

    /** @link https://envoyer.io/api-documentation#create-collaborator */
    public string $actions;
}