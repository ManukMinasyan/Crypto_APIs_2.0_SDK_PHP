<?php
/**
 * GetXRPRippleBlockDetailsByBlockHeightRI
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
 * GetXRPRippleBlockDetailsByBlockHeightRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetXRPRippleBlockDetailsByBlockHeightRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetXRPRippleBlockDetailsByBlockHeightRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_hash' => 'string',
        'block_height' => 'int',
        'next_block_hash' => 'string',
        'previous_block_hash' => 'string',
        'timestamp' => 'int',
        'total_coins' => '\CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalCoins',
        'total_fees' => '\CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalFees',
        'transactions_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_hash' => null,
        'block_height' => null,
        'next_block_hash' => null,
        'previous_block_hash' => null,
        'timestamp' => null,
        'total_coins' => null,
        'total_fees' => null,
        'transactions_count' => null
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
        'block_hash' => 'blockHash',
        'block_height' => 'blockHeight',
        'next_block_hash' => 'nextBlockHash',
        'previous_block_hash' => 'previousBlockHash',
        'timestamp' => 'timestamp',
        'total_coins' => 'totalCoins',
        'total_fees' => 'totalFees',
        'transactions_count' => 'transactionsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_hash' => 'setBlockHash',
        'block_height' => 'setBlockHeight',
        'next_block_hash' => 'setNextBlockHash',
        'previous_block_hash' => 'setPreviousBlockHash',
        'timestamp' => 'setTimestamp',
        'total_coins' => 'setTotalCoins',
        'total_fees' => 'setTotalFees',
        'transactions_count' => 'setTransactionsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_hash' => 'getBlockHash',
        'block_height' => 'getBlockHeight',
        'next_block_hash' => 'getNextBlockHash',
        'previous_block_hash' => 'getPreviousBlockHash',
        'timestamp' => 'getTimestamp',
        'total_coins' => 'getTotalCoins',
        'total_fees' => 'getTotalFees',
        'transactions_count' => 'getTransactionsCount'
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
        $this->container['block_hash'] = $data['block_hash'] ?? null;
        $this->container['block_height'] = $data['block_height'] ?? null;
        $this->container['next_block_hash'] = $data['next_block_hash'] ?? null;
        $this->container['previous_block_hash'] = $data['previous_block_hash'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['total_coins'] = $data['total_coins'] ?? null;
        $this->container['total_fees'] = $data['total_fees'] ?? null;
        $this->container['transactions_count'] = $data['transactions_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['block_hash'] === null) {
            $invalidProperties[] = "'block_hash' can't be null";
        }
        if ($this->container['block_height'] === null) {
            $invalidProperties[] = "'block_height' can't be null";
        }
        if ($this->container['next_block_hash'] === null) {
            $invalidProperties[] = "'next_block_hash' can't be null";
        }
        if ($this->container['previous_block_hash'] === null) {
            $invalidProperties[] = "'previous_block_hash' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['total_coins'] === null) {
            $invalidProperties[] = "'total_coins' can't be null";
        }
        if ($this->container['total_fees'] === null) {
            $invalidProperties[] = "'total_fees' can't be null";
        }
        if ($this->container['transactions_count'] === null) {
            $invalidProperties[] = "'transactions_count' can't be null";
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
     * Gets block_hash
     *
     * @return string
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string $block_hash Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setBlockHash($block_hash)
    {
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets block_height
     *
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->container['block_height'];
    }

    /**
     * Sets block_height
     *
     * @param int $block_height Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
     *
     * @return self
     */
    public function setBlockHeight($block_height)
    {
        $this->container['block_height'] = $block_height;

        return $this;
    }

    /**
     * Gets next_block_hash
     *
     * @return string
     */
    public function getNextBlockHash()
    {
        return $this->container['next_block_hash'];
    }

    /**
     * Sets next_block_hash
     *
     * @param string $next_block_hash Represents the hash of the next block. When this is the last block of the blockchain this value will be an empty string.
     *
     * @return self
     */
    public function setNextBlockHash($next_block_hash)
    {
        $this->container['next_block_hash'] = $next_block_hash;

        return $this;
    }

    /**
     * Gets previous_block_hash
     *
     * @return string
     */
    public function getPreviousBlockHash()
    {
        return $this->container['previous_block_hash'];
    }

    /**
     * Sets previous_block_hash
     *
     * @param string $previous_block_hash Represents the hash of the previous block, also known as the parent block.
     *
     * @return self
     */
    public function setPreviousBlockHash($previous_block_hash)
    {
        $this->container['previous_block_hash'] = $previous_block_hash;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time when this block was mined in Unix Timestamp.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets total_coins
     *
     * @return \CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalCoins
     */
    public function getTotalCoins()
    {
        return $this->container['total_coins'];
    }

    /**
     * Sets total_coins
     *
     * @param \CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalCoins $total_coins total_coins
     *
     * @return self
     */
    public function setTotalCoins($total_coins)
    {
        $this->container['total_coins'] = $total_coins;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return \CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalFees
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param \CryptoAPIs\Model\GetXRPRippleBlockDetailsByBlockHeightRITotalFees $total_fees total_fees
     *
     * @return self
     */
    public function setTotalFees($total_fees)
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets transactions_count
     *
     * @return int
     */
    public function getTransactionsCount()
    {
        return $this->container['transactions_count'];
    }

    /**
     * Sets transactions_count
     *
     * @param int $transactions_count Represents the total number of all transactions as part of this block.
     *
     * @return self
     */
    public function setTransactionsCount($transactions_count)
    {
        $this->container['transactions_count'] = $transactions_count;

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


