<?php
/**
 * ListDepositAddressesRI
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
 * ListDepositAddressesRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListDepositAddressesRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListDepositAddressesRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'confirmed_balance' => '\CryptoAPIs\Model\ListDepositAddressesRIConfirmedBalance',
        'created_timestamp' => 'int',
        'fungible_tokens' => '\CryptoAPIs\Model\ListDepositAddressesRIFungibleTokens[]',
        'index' => 'string',
        'label' => 'string',
        'non_fungible_tokens' => '\CryptoAPIs\Model\ListDepositAddressesRINonFungibleTokens[]'
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
        'confirmed_balance' => null,
        'created_timestamp' => null,
        'fungible_tokens' => null,
        'index' => null,
        'label' => null,
        'non_fungible_tokens' => null
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
        'confirmed_balance' => 'confirmedBalance',
        'created_timestamp' => 'createdTimestamp',
        'fungible_tokens' => 'fungibleTokens',
        'index' => 'index',
        'label' => 'label',
        'non_fungible_tokens' => 'nonFungibleTokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'confirmed_balance' => 'setConfirmedBalance',
        'created_timestamp' => 'setCreatedTimestamp',
        'fungible_tokens' => 'setFungibleTokens',
        'index' => 'setIndex',
        'label' => 'setLabel',
        'non_fungible_tokens' => 'setNonFungibleTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'confirmed_balance' => 'getConfirmedBalance',
        'created_timestamp' => 'getCreatedTimestamp',
        'fungible_tokens' => 'getFungibleTokens',
        'index' => 'getIndex',
        'label' => 'getLabel',
        'non_fungible_tokens' => 'getNonFungibleTokens'
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
        $this->container['confirmed_balance'] = $data['confirmed_balance'] ?? null;
        $this->container['created_timestamp'] = $data['created_timestamp'] ?? null;
        $this->container['fungible_tokens'] = $data['fungible_tokens'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['non_fungible_tokens'] = $data['non_fungible_tokens'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['confirmed_balance'] === null) {
            $invalidProperties[] = "'confirmed_balance' can't be null";
        }
        if ($this->container['created_timestamp'] === null) {
            $invalidProperties[] = "'created_timestamp' can't be null";
        }
        if ($this->container['fungible_tokens'] === null) {
            $invalidProperties[] = "'fungible_tokens' can't be null";
        }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['non_fungible_tokens'] === null) {
            $invalidProperties[] = "'non_fungible_tokens' can't be null";
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
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Specifies the specific address's unique string value.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets confirmed_balance
     *
     * @return \CryptoAPIs\Model\ListDepositAddressesRIConfirmedBalance
     */
    public function getConfirmedBalance()
    {
        return $this->container['confirmed_balance'];
    }

    /**
     * Sets confirmed_balance
     *
     * @param \CryptoAPIs\Model\ListDepositAddressesRIConfirmedBalance $confirmed_balance confirmed_balance
     *
     * @return self
     */
    public function setConfirmedBalance($confirmed_balance)
    {
        $this->container['confirmed_balance'] = $confirmed_balance;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param int $created_timestamp Defines the specific UNIX time when the deposit address was created.
     *
     * @return self
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListDepositAddressesRIFungibleTokens[]
     */
    public function getFungibleTokens()
    {
        return $this->container['fungible_tokens'];
    }

    /**
     * Sets fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListDepositAddressesRIFungibleTokens[] $fungible_tokens Represents fungible tokens'es detailed information
     *
     * @return self
     */
    public function setFungibleTokens($fungible_tokens)
    {
        $this->container['fungible_tokens'] = $fungible_tokens;

        return $this;
    }

    /**
     * Gets index
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param string $index Represents the index of the address in the wallet.
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Represents a custom tag that customers can set up for their Wallets and addresses. E.g. custom label named \"Special addresses\".
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets non_fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListDepositAddressesRINonFungibleTokens[]
     */
    public function getNonFungibleTokens()
    {
        return $this->container['non_fungible_tokens'];
    }

    /**
     * Sets non_fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListDepositAddressesRINonFungibleTokens[] $non_fungible_tokens Represents non-fungible tokens'es detailed information.
     *
     * @return self
     */
    public function setNonFungibleTokens($non_fungible_tokens)
    {
        $this->container['non_fungible_tokens'] = $non_fungible_tokens;

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


