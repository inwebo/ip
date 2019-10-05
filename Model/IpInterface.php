<?php

namespace Inwebo\Ip\Model;


/**
 * Class IpV4
 *
 * @see https://en.wikipedia.org/wiki/IPv4
 */
interface IpInterface
{
    /**
     * @return string
     */
    public function get(): string;

    /**
     * @param string|int $group
     *
     * @return bool
     */
    public function validateGroup($group): bool;

    /**
     * @param string $address
     *
     * @return bool
     */
    static public function isValidAddress(string $address): bool;

    /**
     * @param string $address
     *
     * @return IpInterface
     */
    static public function load(string $address): IpInterface;
}