<?php

namespace Zerotoprod\DataModelEnvoyer;

/**
 * @link https://github.com/zero-to-prod/data-model-envoyer
 */
class CreateHeartbeat
{
    use DataModel;

    /**
     * @see  https://envoyer.io/api-documentation#create-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const name = 'name';
    /**
     * Intervals are minute based and can be one of the following:
     *
     * 10 (10 Minutes)
     * 30 (30 Minutes)
     * 60 (1 Hour)
     * 1440 (1 Day)
     * 10080 (1 Week)
     * 44640 (1 Month)
     *
     * @see  https://envoyer.io/api-documentation#create-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public const interval = 'interval';

    /**
     * @see  https://envoyer.io/api-documentation#create-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public string $name;
    /**
     * Intervals are minute based and can be one of the following:
     *
     * 10 (10 Minutes)
     * 30 (30 Minutes)
     * 60 (1 Hour)
     * 1440 (1 Day)
     * 10080 (1 Week)
     * 44640 (1 Month)
     *
     * @see  https://envoyer.io/api-documentation#create-heartbeat
     * @link https://github.com/zero-to-prod/data-model-envoyer
     */
    public int $interval;
}