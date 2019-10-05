<?php

namespace Inwebo\Ip\Model;


/**
 * Class IpV4
 *
 * @see https://en.wikipedia.org/wiki/IPv4
 */
interface IpV4Interface
{
    /**
     * @return int
     */
    public function getGroup1(): int;

    /**
     * @return int
     */
    public function getGroup2(): int;

    /**
     * @return int
     */
    public function getGroup3(): int;

    /**
     * @return int
     */
    public function getGroup4(): int;
}