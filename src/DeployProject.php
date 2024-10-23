<?php

namespace Zerotoprod\DataModelEnvoyer;

class DeployProject
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#deploy-project */
    public const from = 'from';
    /** @link https://envoyer.io/api-documentation#deploy-project */
    public const branch = 'branch';
    /** @link https://envoyer.io/api-documentation#deploy-project */
    public const tag = 'tag';

    /** @link https://envoyer.io/api-documentation#deploy-project */
    public string $from;
    /** @link https://envoyer.io/api-documentation#deploy-project */
    public string $branch;
    /** @link https://envoyer.io/api-documentation#deploy-project */
    public string $tag;
}