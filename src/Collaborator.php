<?php

namespace Zerotoprod\DataModelEnvoyer;

class Collaborator
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const id = 'id';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const name = 'name';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const email = 'email';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public const pivot = 'pivot';
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public int $id;
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public string $name;
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public string $email;
    /** @link https://envoyer.io/api-documentation#get-collaborator */
    public CollaboratorPivot $pivot;
}