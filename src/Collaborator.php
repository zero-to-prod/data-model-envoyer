<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class Collaborator
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const id = 'id';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const email = 'email';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const pivot = 'pivot';
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $id;
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $email;
    /**
     * @see  https://envoyer.io/api-documentation#get-collaborator
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public CollaboratorPivot $pivot;
}