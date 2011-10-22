<?php

namespace App\Bundle\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App\Bundle\WebBundle\Entity\User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Bundle\WebBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $twitterId
     *
     * @ORM\Column(name="twitterId", type="string", length=100)
     */
    private $twitterId;

    /**
     * @var string $screenName
     *
     * @ORM\Column(name="screenName", type="string", length=255)
     */
    private $screenName;

    /**
     * @var text $accessToken
     *
     * @ORM\Column(name="accessToken", type="text")
     */
    private $accessToken;

    /**
     * @var string $lomadeeId
     *
     * @ORM\Column(name="lomadeeId", type="string", length=100)
     */
    private $lomadeeId;

    /**
     * @var integer $frequency
     *
     * @ORM\Column(name="frequency", type="integer")
     */
    private $frequency;

    /**
     * @var DateTime $lastRun
     *
     * @ORM\Column(type="datetime")
     */
    private $lastRun;

    /**
     * @var string $fallback
     *
     * @ORM\Column(name="fallback", type="string", length=150)
     */
    private $fallback;

    /**
     * @var string $hashtag
     *
     * @ORM\Column(name="hashtag", type="string", length=100)
     */
    private $hashtag;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set twitterId
     *
     * @param string $twitterId
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
    }

    /**
     * Get twitterId
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * Set screenName
     *
     * @param string $screenName
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;
    }

    /**
     * Get screenName
     *
     * @return string 
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * Set accessToken
     *
     * @param text $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Get accessToken
     *
     * @return text 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set lomadeeId
     *
     * @param string $lomadeeId
     */
    public function setLomadeeId($lomadeeId)
    {
        $this->lomadeeId = $lomadeeId;
    }

    /**
     * Get lomadeeId
     *
     * @return string 
     */
    public function getLomadeeId()
    {
        return $this->lomadeeId;
    }

    /**
     * Set frequency
     *
     * @param integer $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * Get frequency
     *
     * @return integer 
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set lastRun
     *
     * @param string $lastRun
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;
    }

    /**
     * Get lastRun
     *
     * @return DateTime 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set fallback
     *
     * @param string $fallback
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;
    }

    /**
     * Get fallback
     *
     * @return string 
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * Set hashtag
     *
     * @param string $hashtag
     */
    public function setHashtag($hashtag)
    {
        $this->hashtag = $hashtag;
    }

    /**
     * Get hashtag
     *
     * @return string 
     */
    public function getHashtag()
    {
        return $this->hashtag;
    }
}