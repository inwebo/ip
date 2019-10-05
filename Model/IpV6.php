<?php


namespace Inwebo\Ip\Model;

/**
 * Class IpV6
 *
 * @see https://en.wikipedia.org/wiki/IPv6
 */
class IpV6 implements IpInterface, IpV6Interface
{
    const SEPARATOR = ':';

    /** @var string */
    protected $group1;
    /** @var string */
    protected $group2;
    /** @var string */
    protected $group3;
    /** @var string */
    protected $group4;
    /** @var string */
    protected $group5;
    /** @var string */
    protected $group6;
    /** @var string */
    protected $group7;
    /** @var string */
    protected $group8;

    /**
     * @return string
     */
    public function getGroup1(): string
    {
        return $this->group1;
    }

    /**
     * @param string $group1
     */
    protected function setGroup1(string $group1): void
    {
        $this->group1 = $group1;
    }

    /**
     * @return string
     */
    public function getGroup2(): string
    {
        return $this->group2;
    }

    /**
     * @param string $group2
     */
    protected function setGroup2(string $group2): void
    {
        $this->group2 = $group2;
    }

    /**
     * @return string
     */
    public function getGroup3(): string
    {
        return $this->group3;
    }

    /**
     * @param string $group3
     */
    protected function setGroup3(string $group3): void
    {
        $this->group3 = $group3;
    }

    /**
     * @return string
     */
    public function getGroup4(): string
    {
        return $this->group4;
    }

    /**
     * @param string $group4
     */
    protected function setGroup4(string $group4): void
    {
        $this->group4 = $group4;
    }

    /**
     * @return string
     */
    public function getGroup5(): string
    {
        return $this->group5;
    }

    /**
     * @param string $group5
     */
    protected function setGroup5(string $group5): void
    {
        $this->group5 = $group5;
    }

    /**
     * @return string
     */
    public function getGroup6(): string
    {
        return $this->group6;
    }

    /**
     * @param string $group6
     */
    protected function setGroup6(string $group6): void
    {
        $this->group6 = $group6;
    }

    /**
     * @return string
     */
    public function getGroup7(): string
    {
        return $this->group7;
    }

    /**
     * @param string $group7
     */
    protected function setGroup7(string $group7): void
    {
        $this->group7 = $group7;
    }

    /**
     * @return string
     */
    public function getGroup8(): string
    {
        return $this->group8;
    }

    /**
     * @param string $group8
     */
    protected function setGroup8(string $group8): void
    {
        $this->group8 = $group8;
    }

    public function get(): string
    {
        return implode(IPV6::SEPARATOR, [
            $this->group1,
            $this->group2,
            $this->group3,
            $this->group4,
            $this->group5,
            $this->group6,
            $this->group7,
            $this->group8,
        ]);
    }

    /**
     * @param string $group
     *
     * @return bool
     */
    public function validateGroup($group): bool
    {
        return ctype_xdigit($group);
    }

    /**
     * @param string $address
     *
     * @return bool
     */
    static public function isValidAddress(string $address): bool
    {
        return filter_var($address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
    }

    /**
     * IpV6 constructor.
     *
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param string $group4
     * @param string $group5
     * @param string $group6
     * @param string $group7
     * @param string $group8
     */
    public function __construct(string $group1, string $group2, string $group3, string $group4, string $group5, string $group6, string $group7, string $group8)
    {
        $this->setGroup1($group1);
        $this->setGroup2($group2);
        $this->setGroup3($group3);
        $this->setGroup4($group4);
        $this->setGroup5($group5);
        $this->setGroup6($group6);
        $this->setGroup7($group7);
        $this->setGroup8($group8);
    }

    /**
     * @param string $address
     *
     * @return IpInterface
     */
    static public function load(string $address): IpInterface
    {
        $groups = explode(IpV6::SEPARATOR, $address);

        return new IpV6($groups[0], $groups[1], $groups[2], $groups[3], $groups[4], $groups[5], $groups[6], $groups[7]);
    }
}