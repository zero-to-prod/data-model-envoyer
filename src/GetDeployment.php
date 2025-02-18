<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class GetDeployment
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const deployment = 'deployment';

    /**
     * @see  https://envoyer.io/api-documentation#get-deployment
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public Deployment $deployment;
}