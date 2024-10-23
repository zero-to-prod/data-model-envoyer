<?php

namespace Zerotoprod\DataModelEnvoyer;

class CollaboratorPivot
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const project_id = 'project_id';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const collaborator_id = 'collaborator_id';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const status = 'status';

    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public int $project_id;
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public int $collaborator_id;
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public string $status;
}