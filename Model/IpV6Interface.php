<?php

namespace Inwebo\Ip\Model;


/**
 * Class IpV6
 *
 * @see https://en.wikipedia.org/wiki/IPv6
 */
interface IpV6Interface
{
    /**
     * @return string
     */
    public function getGroup1(): string;

    /**
     * @return string
     */
    public function getGroup2(): string;

    /**
     * @return string
     */
    public function getGroup3(): string;

    /**
     * @return string
     */
    public function getGroup4(): string;

    /**
     * @return string
     */
    public function getGroup5(): string;

    /**
     * @return string
     */
    public function getGroup6(): string;

    /**
     * @return string
     */
    public function getGroup7(): string;

    /**
     * @return string
     */
    public function getGroup8(): string;
}