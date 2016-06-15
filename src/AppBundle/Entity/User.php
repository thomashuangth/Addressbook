<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="fos_user")
     */
    private $contacts;

	public function __construct()
	{
		parent::__construct();
	}

    /**
     * Add contact
     *
     * @param \AppBundle\Entity\Contact $contact
     *
     * @return User
     */
    public function addContact(\AppBundle\Entity\Contact $contact)
    {
        $this->contacts[] = $contact;
    
        return $this;
    }

    /**
     * Remove contact
     *
     * @param \AppBundle\Entity\Contact $contact
     */
    public function removeContact(\AppBundle\Entity\Contact $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}
