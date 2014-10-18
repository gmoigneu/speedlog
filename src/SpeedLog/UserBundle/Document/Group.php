<?php

namespace SpeedLog\UserBundle\Document;

use SpeedLog\CoreBundle\Document\Website;
use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="SpeedLog\UserBundle\Repository\GroupRepository")
 */
class Group extends BaseGroup
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceMany(targetDocument="SpeedLog\CoreBundle\Document\Website", simple=true)
     */
    protected $websites;

    /**
     * @MongoDB\ReferenceMany(targetDocument="SpeedLog\UserBundle\Document\User", simple=true)
     */
    protected $users;

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
     * Set websites
     *
     * @param SpeedLog\CoreBundle\Document\Website $websites
     * @return self
     */
    public function setWebsites(\SpeedLog\CoreBundle\Document\Website $websites)
    {
        $this->websites = $websites;
        return $this;
    }

    /**
     * Get websites
     *
     * @return SpeedLog\CoreBundle\Document\Website $websites
     */
    public function getWebsites()
    {
        return $this->websites;
    }
    public function __construct($name, $roles)
    {
        $this->setName($name);
        $this->setRoles($roles);
        $this->websites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
      return $this->name;
    }
    
    /**
     * Add website
     *
     * @param SpeedLog\CoreBundle\Document\Website $website
     */
    public function addWebsite(\SpeedLog\CoreBundle\Document\Website $website)
    {
        $this->websites[] = $website;
    }

    /**
     * Remove website
     *
     * @param SpeedLog\CoreBundle\Document\Website $website
     */
    public function removeWebsite(\SpeedLog\CoreBundle\Document\Website $website)
    {
        $this->websites->removeElement($website);
    }

    /**
     * Add user
     *
     * @param SpeedLog\UserBundle\Document\User $user
     */
    public function addUser(\SpeedLog\UserBundle\Document\User $user)
    {
        $this->users[] = $user;
    }

    /**
     * Remove user
     *
     * @param SpeedLog\UserBundle\Document\User $user
     */
    public function removeUser(\SpeedLog\UserBundle\Document\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection $users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
