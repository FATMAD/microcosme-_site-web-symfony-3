<?php

namespace AdminBundle\Entity\blog;

use Doctrine\ORM\Mapping as ORM;

/**
 * comment
 *
 * @ORM\Table(name="blogcomment")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\blog\commentRepository")
 */
class comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="crated_at", type="datetime")
     */
    private $cratedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="string", length=255)
     */
    private $approved;

/**
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $post;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return comment
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return comment
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set cratedAt
     *
     * @param \DateTime $cratedAt
     *
     * @return comment
     */
    public function setCratedAt($cratedAt)
    {
        $this->cratedAt = $cratedAt;

        return $this;
    }

    /**
     * Get cratedAt
     *
     * @return \DateTime
     */
    public function getCratedAt()
    {
        return $this->cratedAt;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set approved
     *
     * @param string $approved
     *
     * @return comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set post
     *
     * @param \AdminBundle\Entity\blog\Post $post
     *
     * @return comment
     */
    public function setPost(\AdminBundle\Entity\blog\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AdminBundle\Entity\blog\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
