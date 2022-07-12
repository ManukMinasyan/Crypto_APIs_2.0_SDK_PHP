<?php
/**
 * ListSupportedAssetsRI
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
 * ListSupportedAssetsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListSupportedAssetsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListSupportedAssetsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_id' => 'string',
        'asset_name' => 'string',
        'asset_symbol' => 'string',
        'asset_type' => 'string',
        'original_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset_id' => null,
        'asset_name' => null,
        'asset_symbol' => null,
        'asset_type' => null,
        'original_symbol' => null
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
        'asset_id' => 'assetId',
        'asset_name' => 'assetName',
        'asset_symbol' => 'assetSymbol',
        'asset_type' => 'assetType',
        'original_symbol' => 'originalSymbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_id' => 'setAssetId',
        'asset_name' => 'setAssetName',
        'asset_symbol' => 'setAssetSymbol',
        'asset_type' => 'setAssetType',
        'original_symbol' => 'setOriginalSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_id' => 'getAssetId',
        'asset_name' => 'getAssetName',
        'asset_symbol' => 'getAssetSymbol',
        'asset_type' => 'getAssetType',
        'original_symbol' => 'getOriginalSymbol'
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

    const ASSET_TYPE_FIAT = 'fiat';
    const ASSET_TYPE_CRYPTO = 'crypto';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_FIAT,
            self::ASSET_TYPE_CRYPTO,
        ];
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
        $this->container['asset_id'] = $data['asset_id'] ?? null;
        $this->container['asset_name'] = $data['asset_name'] ?? null;
        $this->container['asset_symbol'] = $data['asset_symbol'] ?? null;
        $this->container['asset_type'] = $data['asset_type'] ?? null;
        $this->container['original_symbol'] = $data['original_symbol'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asset_id'] === null) {
            $invalidProperties[] = "'asset_id' can't be null";
        }
        if ($this->container['asset_name'] === null) {
            $invalidProperties[] = "'asset_name' can't be null";
        }
        if ($this->container['asset_symbol'] === null) {
            $invalidProperties[] = "'asset_symbol' can't be null";
        }
        if ($this->container['asset_type'] === null) {
            $invalidProperties[] = "'asset_type' can't be null";
        }
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!is_null($this->container['asset_type']) && !in_array($this->container['asset_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'asset_type', must be one of '%s'",
                $this->container['asset_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['original_symbol'] === null) {
            $invalidProperties[] = "'original_symbol' can't be null";
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
     * Gets asset_id
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->container['asset_id'];
    }

    /**
     * Sets asset_id
     *
     * @param string $asset_id Defines the unique ID of the specific asset.
     *
     * @return self
     */
    public function setAssetId($asset_id)
    {
        $this->container['asset_id'] = $asset_id;

        return $this;
    }

    /**
     * Gets asset_name
     *
     * @return string
     */
    public function getAssetName()
    {
        return $this->container['asset_name'];
    }

    /**
     * Sets asset_name
     *
     * @param string $asset_name Specifies the name of the asset in question.
     *
     * @return self
     */
    public function setAssetName($asset_name)
    {
        $this->container['asset_name'] = $asset_name;

        return $this;
    }

    /**
     * Gets asset_symbol
     *
     * @return string
     */
    public function getAssetSymbol()
    {
        return $this->container['asset_symbol'];
    }

    /**
     * Sets asset_symbol
     *
     * @param string $asset_symbol Specifies the asset's unique symbol in the Crypto APIs listings.
     *
     * @return self
     */
    public function setAssetSymbol($asset_symbol)
    {
        $this->container['asset_symbol'] = $asset_symbol;

        return $this;
    }

    /**
     * Gets asset_type
     *
     * @return string
     */
    public function getAssetType()
    {
        return $this->container['asset_type'];
    }

    /**
     * Sets asset_type
     *
     * @param string $asset_type Defines the type of the supported asset. This could be either \"crypto\" or \"fiat\".
     *
     * @return self
     */
    public function setAssetType($asset_type)
    {
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!in_array($asset_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'asset_type', must be one of '%s'",
                    $asset_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['asset_type'] = $asset_type;

        return $this;
    }

    /**
     * Gets original_symbol
     *
     * @return string
     */
    public function getOriginalSymbol()
    {
        return $this->container['original_symbol'];
    }

    /**
     * Sets original_symbol
     *
     * @param string $original_symbol Specifies the asset's original symbol as introduced by its founders.
     *
     * @return self
     */
    public function setOriginalSymbol($original_symbol)
    {
        $this->container['original_symbol'] = $original_symbol;

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


