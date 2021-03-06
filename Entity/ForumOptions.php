<?php

namespace Claroline\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="claro_forum_options")
 */
class ForumOptions
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="subjects", type="integer")
     */
    protected $subjects;

    /**
     * @ORM\Column(name="messages", type="integer")
     */
    protected $messages;

    public function getId()
    {
        return $this->id;
    }

    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    public function getSubjects()
    {
        return $this->subjects;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }


}