<?php

namespace Inwebo\Ip\Model;

/**
 * Class IpV4
 *
 * @see https://en.wikipedia.org/wiki/IPv4
 */
class IpV4 implements IpInterface, IpV4Interface
{
    const SEPARATOR = '.';

    /** @var int */
    protected $group1;
    /** @var int */
    protected $group2;
    /** @var int */
    protected $group3;
    /** @var int */
    protected $group4;

    /**
     * @return int
     */
    public function getGroup1(): int
    {
        return $this->group1;
    }

    /**
     * @param int $group1
     */
    protected function setGroup1(int $group1): void
    {
        $this->group1 = $group1;
    }

    /**
     * @return int
     */
    public function getGroup2(): int
    {
        return $this->group2;
    }

    /**
     * @param int $group2
     */
    protected function setGroup2(int $group2): void
    {
        $this->group2 = $group2;
    }

    /**
     * @return int
     */
    public function getGroup3(): int
    {
        return $this->group3;
    }

    /**
     * @param int $group3
     */
    protected function setGroup3(int $group3): void
    {
        $this->group3 = $group3;
    }

    /**
     * @return int
     */
    public function getGroup4(): int
    {
        return $this->group4;
    }

    /**
     * @param int $group4
     */
    protected function setGroup4(int $group4): void
    {
        $this->group4 = $group4;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        return implode(IpV4::SEPARATOR, [$this->group1, $this->group2, $this->group3, $this->group4]);
    }

    /**
     * @param int $octet
     *
     * @return bool
     */
    public function validateGroup($octet): bool
    {
        return $octet >= 0 && $octet <= 255;
    }

    /**
     * @param string $address
     *
     * @return bool
     */
    static public function isValidAddress(string $address): bool
    {
        return filter_var($address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }

    /**
     * IpV4 constructor.
     *
     * @param int $octet1
     * @param int $octet2
     * @param int $octet3
     * @param int $octet4
     */
    public function __construct(int $octet1, int $octet2, int $octet3, int $octet4)
    {
        $this->setGroup1($octet1);
        $this->setGroup2($octet2);
        $this->setGroup3($octet3);
        $this->setGroup4($octet4);
    }

    /**
     * @param string $address
     *
     * @return IpInterface
     */
    static public function load(string $address): IpInterface
    {
        $groups = explode(IpV4::SEPARATOR, $address);

        return new IpV4($groups[0], $groups[1], $groups[2], $groups[3]);
    }
}