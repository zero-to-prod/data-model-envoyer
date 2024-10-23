<?php

namespace Zerotoprod\DataModelEnvoyer;

class CreateHeartbeat
{
    use DataModel;

    /** @link https://envoyer.io/api-documentation#create-heartbeat */
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
     * @link https://envoyer.io/api-documentation#create-heartbeat
     */
    public const interval = 'interval';

    /** @link https://envoyer.io/api-documentation#create-heartbeat */
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
     * @link https://envoyer.io/api-documentation#create-heartbeat
     */
    public int $interval;
}