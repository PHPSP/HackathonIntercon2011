<?php

namespace App\Bundle\WebBundle\Services\Twitter;

use Symfony\Component\DependencyInjection\Container,
    App\Bundle\WebBundle\Entity\User;

/**
 * Twitter API Service class.
 * 
 */
class ApiService
{
    /**
     * @var TwitterOAuth
     */
    private $twitter;
    
    /**
     * @var Symfony\Component\DependencyInjection\Container
     */
    private $container;
    
    /**
     * Constructor.
     * 
     * @param TwitterOAuth $twitter 
     * @param Symfony\Component\DependencyInjection\Container $container
     */
    public function __construct(\TwitterOAuth $twitter, Container $container)
    {
        $this->twitter   = $twitter;
        $this->container = $container;
    }
    
    /**
     * Retrieve User timeline
     * 
     * @param App\Bundle\WebBundle\Entity\User $user 
     */
    public function getUserTimeline(User $user)
    {
        /*$timeline = $this->twitter->get(
            'statuses/home_timeline', 
            array('screen_name' => $user->getScreenName())
        );*/
        
        $timeline = <<< EOL
[
  {
    "coordinates": null,
    "favorited": false,
    "created_at": "Fri Jul 16 16:58:46 +0000 2010",
    "truncated": false,
    "text": "got a lovely surprise from @craftybeans. She sent me the best tshirt ever. http://www.flickr.com/photos/cindyli/4799054041/ ::giggles::",
    "annotations": null,
    "contributors": null,
    "id": 18700887835,
    "geo": null,
    "in_reply_to_user_id": null,
    "place": null,
    "in_reply_to_screen_name": null,
    "source": "web",
    "in_reply_to_status_id": null
  },
  {
    "coordinates": null,
    "favorited": false,
    "created_at": "Fri Jul 16 16:55:52 +0000 2010",
    "truncated": false,
    "text": "Anything is possible when you're in the library... with a celestial sandwich: http://bit.ly/libraryman (via @iamcal)",
    "annotations": null,
    "contributors": null,
    "id": 18700688341,
    "geo": null,
    "in_reply_to_user_id": null,
    "in_reply_to_screen_name": null,
    "source": "web",
    "in_reply_to_status_id": null
  }
]
EOL;

        $timeline = json_decode(trim($timeline));
        
        return $timeline;
    }
}