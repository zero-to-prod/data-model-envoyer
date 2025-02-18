<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class DeployProject
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const from = 'from';
    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const branch = 'branch';
    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const tag = 'tag';

    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $from;
    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $branch;
    /**
     * @see  https://envoyer.io/api-documentation#deploy-project
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $tag;
}