<?php
/**
 * DecodeRawTransactionHexRISDVin
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * DecodeRawTransactionHexRISDVin Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DecodeRawTransactionHexRISDVin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecodeRawTransactionHexRISD_vin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'input_hash' => 'string',
        'output_index' => 'string',
        'script_sig' => '\CryptoAPIs\Model\DecodeRawTransactionHexRISDScriptSig',
        'sequence' => 'string',
        'txinwitness' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'input_hash' => null,
        'output_index' => null,
        'script_sig' => null,
        'sequence' => null,
        'txinwitness' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'input_hash' => 'inputHash',
        'output_index' => 'outputIndex',
        'script_sig' => 'scriptSig',
        'sequence' => 'sequence',
        'txinwitness' => 'txinwitness'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'input_hash' => 'setInputHash',
        'output_index' => 'setOutputIndex',
        'script_sig' => 'setScriptSig',
        'sequence' => 'setSequence',
        'txinwitness' => 'setTxinwitness'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'input_hash' => 'getInputHash',
        'output_index' => 'getOutputIndex',
        'script_sig' => 'getScriptSig',
        'sequence' => 'getSequence',
        'txinwitness' => 'getTxinwitness'
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
        return self::$openAPIModelName;
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['input_hash'] = $data['input_hash'] ?? null;
        $this->container['output_index'] = $data['output_index'] ?? null;
        $this->container['script_sig'] = $data['script_sig'] ?? null;
        $this->container['sequence'] = $data['sequence'] ?? null;
        $this->container['txinwitness'] = $data['txinwitness'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['script_sig'] === null) {
            $invalidProperties[] = "'script_sig' can't be null";
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Represents the address which send/receive the amount
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets input_hash
     *
     * @return string|null
     */
    public function getInputHash()
    {
        return $this->container['input_hash'];
    }

    /**
     * Sets input_hash
     *
     * @param string|null $input_hash Represents the transaction inputs' indentifier.
     *
     * @return self
     */
    public function setInputHash($input_hash)
    {
        $this->container['input_hash'] = $input_hash;

        return $this;
    }

    /**
     * Gets output_index
     *
     * @return string|null
     */
    public function getOutputIndex()
    {
        return $this->container['output_index'];
    }

    /**
     * Sets output_index
     *
     * @param string|null $output_index Defines the output index of a transaction.
     *
     * @return self
     */
    public function setOutputIndex($output_index)
    {
        $this->container['output_index'] = $output_index;

        return $this;
    }

    /**
     * Gets script_sig
     *
     * @return \CryptoAPIs\Model\DecodeRawTransactionHexRISDScriptSig
     */
    public function getScriptSig()
    {
        return $this->container['script_sig'];
    }

    /**
     * Sets script_sig
     *
     * @param \CryptoAPIs\Model\DecodeRawTransactionHexRISDScriptSig $script_sig script_sig
     *
     * @return self
     */
    public function setScriptSig($script_sig)
    {
        $this->container['script_sig'] = $script_sig;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return string|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string|null $sequence Represents the script sequence number.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets txinwitness
     *
     * @return string[]|null
     */
    public function getTxinwitness()
    {
        return $this->container['txinwitness'];
    }

    /**
     * Sets txinwitness
     *
     * @param string[]|null $txinwitness txinwitness
     *
     * @return self
     */
    public function setTxinwitness($txinwitness)
    {
        $this->container['txinwitness'] = $txinwitness;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


