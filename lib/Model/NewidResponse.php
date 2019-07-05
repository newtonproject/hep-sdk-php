<?php
/**
 * NewidResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HEP REST API
 *
 * The REST API for HEP protocol
 *
 * OpenAPI spec version: v1
 * Contact: xiawu@zeuux.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.6
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HepRestApi\Model;

use \ArrayAccess;
use \HepRestApi\ObjectSerializer;

/**
 * NewidResponse Class Doc Comment
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewidResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NewidResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'newid' => 'string',
        'public_key' => 'string',
        'main_wallet_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'newid' => null,
        'public_key' => null,
        'main_wallet_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'newid' => 'newid',
        'public_key' => 'public_key',
        'main_wallet_address' => 'main_wallet_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'newid' => 'setNewid',
        'public_key' => 'setPublicKey',
        'main_wallet_address' => 'setMainWalletAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'newid' => 'getNewid',
        'public_key' => 'getPublicKey',
        'main_wallet_address' => 'getMainWalletAddress'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['newid'] = isset($data['newid']) ? $data['newid'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['main_wallet_address'] = isset($data['main_wallet_address']) ? $data['main_wallet_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['newid'] === null) {
            $invalidProperties[] = "'newid' can't be null";
        }
        if ((mb_strlen($this->container['newid']) > 64)) {
            $invalidProperties[] = "invalid value for 'newid', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['newid']) < 1)) {
            $invalidProperties[] = "invalid value for 'newid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['public_key'] === null) {
            $invalidProperties[] = "'public_key' can't be null";
        }
        if ((mb_strlen($this->container['public_key']) > 64)) {
            $invalidProperties[] = "invalid value for 'public_key', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['public_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'public_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['main_wallet_address'] === null) {
            $invalidProperties[] = "'main_wallet_address' can't be null";
        }
        if ((mb_strlen($this->container['main_wallet_address']) > 64)) {
            $invalidProperties[] = "invalid value for 'main_wallet_address', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['main_wallet_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'main_wallet_address', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets newid
     *
     * @return string
     */
    public function getNewid()
    {
        return $this->container['newid'];
    }

    /**
     * Sets newid
     *
     * @param string $newid The NewID
     *
     * @return $this
     */
    public function setNewid($newid)
    {
        if ((mb_strlen($newid) > 64)) {
            throw new \InvalidArgumentException('invalid length for $newid when calling NewidResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($newid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $newid when calling NewidResponse., must be bigger than or equal to 1.');
        }

        $this->container['newid'] = $newid;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string $public_key The hex string of NewID's public key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        if ((mb_strlen($public_key) > 64)) {
            throw new \InvalidArgumentException('invalid length for $public_key when calling NewidResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($public_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $public_key when calling NewidResponse., must be bigger than or equal to 1.');
        }

        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets main_wallet_address
     *
     * @return string
     */
    public function getMainWalletAddress()
    {
        return $this->container['main_wallet_address'];
    }

    /**
     * Sets main_wallet_address
     *
     * @param string $main_wallet_address The main wallet address of NewChain
     *
     * @return $this
     */
    public function setMainWalletAddress($main_wallet_address)
    {
        if ((mb_strlen($main_wallet_address) > 64)) {
            throw new \InvalidArgumentException('invalid length for $main_wallet_address when calling NewidResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($main_wallet_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $main_wallet_address when calling NewidResponse., must be bigger than or equal to 1.');
        }

        $this->container['main_wallet_address'] = $main_wallet_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


