<?php

namespace SpeedLog\UserBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="SpeedLog\UserBundle\Document\Group", simple=true)
     */
    protected $group;

    public function __construct()
    {
        parent::__construct();
    }

    public function __toString() {
      return $this->email;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set group
     *
     * @param SpeedLog\UserBundle\Document\Group $group
     * @return self
     */
    public function setGroup(\SpeedLog\UserBundle\Document\Group $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return SpeedLog\UserBundle\Document\Group $group
     */
    public function getGroup()
    {
        return $this->group;
    }
}
