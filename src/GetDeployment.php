<?php

namespace Zerotoprod\DataModelEnvoyer;

class GetDeployment
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public const deployment = 'deployment';

    /** @link https://envoyer.io/api-documentation#get-deployment */
    public Deployment $deployment;
}