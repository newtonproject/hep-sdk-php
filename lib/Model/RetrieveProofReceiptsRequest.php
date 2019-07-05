<?php
/**
 * RetrieveProofReceiptsRequest
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
 * RetrieveProofReceiptsRequest Class Doc Comment
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetrieveProofReceiptsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetrieveProofReceiptsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dapp_key' => 'string',
        'protocol' => 'string',
        'version' => 'string',
        'ts' => 'int',
        'nonce' => 'string',
        'os' => 'string',
        'language' => 'string',
        'dapp_signature_method' => 'string',
        'dapp_signature' => 'string',
        'proof_hashes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dapp_key' => null,
        'protocol' => null,
        'version' => null,
        'ts' => null,
        'nonce' => null,
        'os' => null,
        'language' => null,
        'dapp_signature_method' => null,
        'dapp_signature' => null,
        'proof_hashes' => null
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
        'dapp_key' => 'dapp_key',
        'protocol' => 'protocol',
        'version' => 'version',
        'ts' => 'ts',
        'nonce' => 'nonce',
        'os' => 'os',
        'language' => 'language',
        'dapp_signature_method' => 'dapp_signature_method',
        'dapp_signature' => 'dapp_signature',
        'proof_hashes' => 'proof_hashes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dapp_key' => 'setDappKey',
        'protocol' => 'setProtocol',
        'version' => 'setVersion',
        'ts' => 'setTs',
        'nonce' => 'setNonce',
        'os' => 'setOs',
        'language' => 'setLanguage',
        'dapp_signature_method' => 'setDappSignatureMethod',
        'dapp_signature' => 'setDappSignature',
        'proof_hashes' => 'setProofHashes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dapp_key' => 'getDappKey',
        'protocol' => 'getProtocol',
        'version' => 'getVersion',
        'ts' => 'getTs',
        'nonce' => 'getNonce',
        'os' => 'getOs',
        'language' => 'getLanguage',
        'dapp_signature_method' => 'getDappSignatureMethod',
        'dapp_signature' => 'getDappSignature',
        'proof_hashes' => 'getProofHashes'
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
        $this->container['dapp_key'] = isset($data['dapp_key']) ? $data['dapp_key'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['ts'] = isset($data['ts']) ? $data['ts'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['dapp_signature_method'] = isset($data['dapp_signature_method']) ? $data['dapp_signature_method'] : null;
        $this->container['dapp_signature'] = isset($data['dapp_signature']) ? $data['dapp_signature'] : null;
        $this->container['proof_hashes'] = isset($data['proof_hashes']) ? $data['proof_hashes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dapp_key'] === null) {
            $invalidProperties[] = "'dapp_key' can't be null";
        }
        if ((mb_strlen($this->container['dapp_key']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_key', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ((mb_strlen($this->container['protocol']) > 10)) {
            $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['protocol']) < 1)) {
            $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) > 10)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['version']) < 1)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['ts'] === null) {
            $invalidProperties[] = "'ts' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ((mb_strlen($this->container['nonce']) > 64)) {
            $invalidProperties[] = "invalid value for 'nonce', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['nonce']) < 1)) {
            $invalidProperties[] = "invalid value for 'nonce', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ((mb_strlen($this->container['os']) > 10)) {
            $invalidProperties[] = "invalid value for 'os', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['os']) < 1)) {
            $invalidProperties[] = "invalid value for 'os', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ((mb_strlen($this->container['language']) > 10)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['language']) < 1)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dapp_signature_method'] === null) {
            $invalidProperties[] = "'dapp_signature_method' can't be null";
        }
        if ((mb_strlen($this->container['dapp_signature_method']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_signature_method', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_signature_method']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_signature_method', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dapp_signature'] === null) {
            $invalidProperties[] = "'dapp_signature' can't be null";
        }
        if ((mb_strlen($this->container['dapp_signature']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_signature', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_signature']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_signature', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['proof_hashes'] === null) {
            $invalidProperties[] = "'proof_hashes' can't be null";
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
     * Gets dapp_key
     *
     * @return string
     */
    public function getDappKey()
    {
        return $this->container['dapp_key'];
    }

    /**
     * Sets dapp_key
     *
     * @param string $dapp_key The decentralized application access key
     *
     * @return $this
     */
    public function setDappKey($dapp_key)
    {
        if ((mb_strlen($dapp_key) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_key when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_key when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['dapp_key'] = $dapp_key;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol The protocol name. default is 'HEP'.
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        if ((mb_strlen($protocol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $protocol when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($protocol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $protocol when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The protocol version such as '1.0'
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if ((mb_strlen($version) > 10)) {
            throw new \InvalidArgumentException('invalid length for $version when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return int
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     *
     * @param int $ts The current timestamp
     *
     * @return $this
     */
    public function setTs($ts)
    {
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce The random string or auto-increment sequence
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        if ((mb_strlen($nonce) > 64)) {
            throw new \InvalidArgumentException('invalid length for $nonce when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($nonce) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nonce when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os The operating system of client such as ios, android, dweb,etc.
     *
     * @return $this
     */
    public function setOs($os)
    {
        if ((mb_strlen($os) > 10)) {
            throw new \InvalidArgumentException('invalid length for $os when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($os) < 1)) {
            throw new \InvalidArgumentException('invalid length for $os when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The i18n language code such as zh, en, etc.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        if ((mb_strlen($language) > 10)) {
            throw new \InvalidArgumentException('invalid length for $language when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($language) < 1)) {
            throw new \InvalidArgumentException('invalid length for $language when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets dapp_signature_method
     *
     * @return string
     */
    public function getDappSignatureMethod()
    {
        return $this->container['dapp_signature_method'];
    }

    /**
     * Sets dapp_signature_method
     *
     * @param string $dapp_signature_method The signature method used by dapp.
     *
     * @return $this
     */
    public function setDappSignatureMethod($dapp_signature_method)
    {
        if ((mb_strlen($dapp_signature_method) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature_method when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_signature_method) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature_method when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['dapp_signature_method'] = $dapp_signature_method;

        return $this;
    }

    /**
     * Gets dapp_signature
     *
     * @return string
     */
    public function getDappSignature()
    {
        return $this->container['dapp_signature'];
    }

    /**
     * Sets dapp_signature
     *
     * @param string $dapp_signature The signature generated by dapp.
     *
     * @return $this
     */
    public function setDappSignature($dapp_signature)
    {
        if ((mb_strlen($dapp_signature) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature when calling RetrieveProofReceiptsRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_signature) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature when calling RetrieveProofReceiptsRequest., must be bigger than or equal to 1.');
        }

        $this->container['dapp_signature'] = $dapp_signature;

        return $this;
    }

    /**
     * Gets proof_hashes
     *
     * @return string[]
     */
    public function getProofHashes()
    {
        return $this->container['proof_hashes'];
    }

    /**
     * Sets proof_hashes
     *
     * @param string[] $proof_hashes The proof hashes
     *
     * @return $this
     */
    public function setProofHashes($proof_hashes)
    {
        $this->container['proof_hashes'] = $proof_hashes;

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


