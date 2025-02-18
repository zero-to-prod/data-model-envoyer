<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CollaboratorPivot
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const project_id = 'project_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const collaborator_id = 'collaborator_id';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const status = 'status';

    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $project_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $collaborator_id;
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $status;
}