<?php
namespace App\Bundle\WebBundle\Services\Lomadee;
use \UnexpectedValueException;
/**
 * Description of Url
 *
 * @link        none
 * @package     none
 * @subpackage  none
 * @see         none
 * @uses        none
 * @author      Augusto Pascutti <augusto.pascutti@flexinterativa.com.br>
 * @since       0.0.4
 */
class Url 
{
    const DEFUALT_CONTRY   = 'BR';
    const DEFAULT_HOSTNAME = 'http://sandbox.buscape.com/service';
    
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $applicationid;
    /**
     * @var @string
     */
    protected $service;
    /**
     * @var array
     */
    protected $parameters = array();
    
    /**
     * Defines the hostname/url to the service.
     * Ex: http://sandbox.buscape.com/service
     *
     * @param   string  $fqdn
     * @return  Url 
     */
    public function setHostname($fqdn)
    {
        $this->hostname = $fqdn;
        return $this;
    }
    
    /**
     * Returns the hostname to use in the URL of the service.
     * If none is set, returns the default URL.
     *
     * @return string
     */
    public function getHostname()
    {
        if (empty($this->hostname)) {
            return self::DEFAULT_HOSTNAME;
        }
        return $this->hostname;
    }
    
    /**
     * Defines the country code.
     *
     * @param string $code 
     */
    public function setCountry($code)
    {
       $this->country = $code; 
       return $this;
    }
    
    /**
     * Returns the country code to use in the URL of the service.
     * If none is set, returns the default URL.
     *
     * @return string
     */
    public function getCountry()
    {
        if (empty($this->country)) {
            return self::DEFUALT_CONTRY;
        }
        return $this->country;
    }
    
    /**
     * Defines the service name to be used.
     *
     * @param   string    $name 
     * @return  Url
     */
    public function setService($name)
    {
        $this->service = $name;
        return $this;
    }
    
    /**
     * Returns the service name to be used.
     *
     * @throws UnexpectedValueException
     * @return string
     */
    public function getService()
    {
        if (empty($this->service)) {
            $msg = "Service not set in the Lomadee URL";
            throw new UnexpectedValueException($msg);
        }
        return $this->service;
    }
    
    /**
     * Defines the lomadee application id to be used.
     *
     * @param   string  $id
     * @return  Url 
     */
    public function setAppId($id)
    {
        $this->applicationid = $id;
        return $this;
    }
    
    /**
     * Returns the lomadee application id.
     *
     * @throws  UnexpectedValueException
     * @return  string
     */
    public function getAppId()
    {
        if (empty($this->applicationid)) {
            $msg = 'Application ID for the Lomadee service not set.';
            throw new UnexpectedValueException($msg);
        }
        return $this->applicationid;
    }
    
    /**
     * Defines the parameters to be used.
     * Parameters are arrays that are transleted into a URL.
     *
     * @param   array   $params
     * @return  Url 
     */
    public function setParameters(array $params)
    {
        $this->emptyParameters();
        $this->parameters = $params;
        return $this;
    }
    
    /**
     * Defines a single parameter and its value.
     *
     * @param   string $name
     * @param   string $value
     * @return  Url 
     */
    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
        return $this;
    }
    
    /**
     * Cleans the parameter list.
     *
     * @return Url 
     */
    public function emptyParameters()
    {
        $this->parameters = array();
        return $this;
    }
    
    /**
     * Defines that the service must return a JSON response.
     *
     * @param   string $callback 
     * @return  Url
     */
    public function setJson($callback)
    {
        $this->setParameter('format', 'json');
        $this->setParameter('calback', $callback);
        return $this;
    }
    
    /**
     * Returns the parameters array.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    
    /**
     * Returns the parameters as a string to be used into an URL.
     * Values are URL encoded.
     *
     * @return string Ex: 'categoryId=77&format=json'
     */
    public function getParametersAsUrl()
    {
        $params = array();
        foreach ($this->getParameters() as $name=>$value) {
            $params[] = $name.'='.urlencode($value);
        }
        return implode('&', $params);
    }
    
    /**
     * Returns the URL to be used.
     *
     * @return string
     */
    public function getUrl()
    {
        $format  = "%s/%s/%s/?%s";
        $host    = $this->getHostname();
        $service = $this->getService();
        $appid   = $this->getAppId();
        $country = $this->getCountry();
        $params  = $this->getParametersAsUrl();        
        return sprintf($format, $host, $service, $appid, $params);
    }
    
    /**
     * @magic
     * @return string
     */
    public function __toString()
    {
        return $this->getUrl();
    }
}
