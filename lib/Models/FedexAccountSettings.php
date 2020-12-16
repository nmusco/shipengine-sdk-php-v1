<?php
/**
 * FedexAccountSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ShipEngine API
 *
 * ShipEngine's easy-to-use REST API lets you manage all of your shipping needs without worrying about the complexities of different carrier APIs and protocols. We handle all the heavy lifting so you can focus on providing a first-class shipping experience for your customers at the best possible prices.  Each of ShipEngine's features can be used by itself or in conjunction with each other to build powerful shipping functionality into your application or service.  ## Getting Started If you're new to REST APIs then be sure to read our [introduction to REST](https://www.shipengine.com/docs/rest/) to understand the basics.  Learn how to [authenticate yourself to ShipEngine](https://www.shipengine.com/docs/auth/), and then use our [sandbox environment](https://www.shipengine.com/docs/sandbox/) to kick the tires and get familiar with our API. If you run into any problems, then be sure to check the [error handling guide](https://www.shipengine.com/docs/errors/) for tips.  Here are some step-by-step **tutorials** to get you started:    - [Learn how to create your first shipping label](https://www.shipengine.com/docs/labels/create-a-label/)   - [Calculate shipping costs and compare rates across carriers](https://www.shipengine.com/docs/rates/)   - [Track packages on-demand or in real time](https://www.shipengine.com/docs/tracking/)   - [Validate mailing addresses anywhere on Earth](https://www.shipengine.com/docs/addresses/validation/)   ## Shipping Labels for Every Major Carrier ShipEngine makes it easy to [create shipping labels for any carrier](https://www.shipengine.com/docs/labels/create-a-label/) and [download them](https://www.shipengine.com/docs/labels/downloading/) in a [variety of file formats](https://www.shipengine.com/docs/labels/formats/). You can even customize labels with your own [messages](https://www.shipengine.com/docs/labels/messages/) and [images](https://www.shipengine.com/docs/labels/branding/).   ## Real-Time Package Tracking With ShipEngine you can [get the current status of a package](https://www.shipengine.com/docs/tracking/) or [subscribe to real-time tracking updates](https://www.shipengine.com/docs/tracking/webhooks/) via webhooks. You can also create [custimized tracking pages](https://www.shipengine.com/docs/tracking/branded-tracking-page/) with your own branding so your customers will always know where their package is.   ## Compare Shipping Costs Across Carriers Make sure you ship as cost-effectively as possible by [comparing rates across carriers](https://www.shipengine.com/docs/rates/get-shipment-rates/) using the ShipEngine Rates API. Or if you don't know the full shipment details yet, then you can [get rate estimates](https://www.shipengine.com/docs/rates/estimate/) with limited address info.   ## Worldwide Address Validation ShipEngine supports [address validation](https://www.shipengine.com/docs/addresses/validation/) for virtually [every country on Earth](https://www.shipengine.com/docs/addresses/validation/countries/), including the United States, Canada, Great Britain, Australia, Germany, France, Norway, Spain, Sweden, Israel, Italy, and over 160 others.
 *
 * The version of the OpenAPI document: 1.1.202012041812
 * Contact: sales@shipengine.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nmusco\ShipEngine\v1\Models;

use \ArrayAccess;
use \Nmusco\ShipEngine\v1\ObjectSerializer;

/**
 * FedexAccountSettings Class Doc Comment
 *
 * @category Class
 * @description A Fedex account settings request body
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FedexAccountSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fedex_account_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nickname' => 'string',
        'pickup_type' => '\Nmusco\ShipEngine\v1\Models\FedexPickupType',
        'smart_post_hub' => '\Nmusco\ShipEngine\v1\Models\SmartPostHub',
        'smart_post_endorsement' => '\Nmusco\ShipEngine\v1\Models\AncillaryServiceEndorsement',
        'is_primary_account' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nickname' => null,
        'pickup_type' => null,
        'smart_post_hub' => null,
        'smart_post_endorsement' => null,
        'is_primary_account' => null
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
        'nickname' => 'nickname',
        'pickup_type' => 'pickup_type',
        'smart_post_hub' => 'smart_post_hub',
        'smart_post_endorsement' => 'smart_post_endorsement',
        'is_primary_account' => 'is_primary_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nickname' => 'setNickname',
        'pickup_type' => 'setPickupType',
        'smart_post_hub' => 'setSmartPostHub',
        'smart_post_endorsement' => 'setSmartPostEndorsement',
        'is_primary_account' => 'setIsPrimaryAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nickname' => 'getNickname',
        'pickup_type' => 'getPickupType',
        'smart_post_hub' => 'getSmartPostHub',
        'smart_post_endorsement' => 'getSmartPostEndorsement',
        'is_primary_account' => 'getIsPrimaryAccount'
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
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['pickup_type'] = $data['pickup_type'] ?? null;
        $this->container['smart_post_hub'] = $data['smart_post_hub'] ?? null;
        $this->container['smart_post_endorsement'] = $data['smart_post_endorsement'] ?? null;
        $this->container['is_primary_account'] = $data['is_primary_account'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['nickname']) && (mb_strlen($this->container['nickname']) < 1)) {
            $invalidProperties[] = "invalid value for 'nickname', the character length must be bigger than or equal to 1.";
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
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname Account nickname
     *
     * @return self
     */
    public function setNickname($nickname)
    {

        if (!is_null($nickname) && (mb_strlen($nickname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nickname when calling FedexAccountSettings., must be bigger than or equal to 1.');
        }

        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets pickup_type
     *
     * @return FedexPickupType|null
     */
    public function getPickupType()
    {
        return $this->container['pickup_type'];
    }

    /**
     * Sets pickup_type
     *
     * @param FedexPickupType|null $pickup_type pickup_type
     *
     * @return self
     */
    public function setPickupType($pickup_type)
    {
        $this->container['pickup_type'] = $pickup_type;

        return $this;
    }

    /**
     * Gets smart_post_hub
     *
     * @return SmartPostHub|null
     */
    public function getSmartPostHub()
    {
        return $this->container['smart_post_hub'];
    }

    /**
     * Sets smart_post_hub
     *
     * @param SmartPostHub|null $smart_post_hub smart_post_hub
     *
     * @return self
     */
    public function setSmartPostHub($smart_post_hub)
    {
        $this->container['smart_post_hub'] = $smart_post_hub;

        return $this;
    }

    /**
     * Gets smart_post_endorsement
     *
     * @return AncillaryServiceEndorsement|null
     */
    public function getSmartPostEndorsement()
    {
        return $this->container['smart_post_endorsement'];
    }

    /**
     * Sets smart_post_endorsement
     *
     * @param AncillaryServiceEndorsement|null $smart_post_endorsement smart_post_endorsement
     *
     * @return self
     */
    public function setSmartPostEndorsement($smart_post_endorsement)
    {
        $this->container['smart_post_endorsement'] = $smart_post_endorsement;

        return $this;
    }

    /**
     * Gets is_primary_account
     *
     * @return bool|null
     */
    public function getIsPrimaryAccount()
    {
        return $this->container['is_primary_account'];
    }

    /**
     * Sets is_primary_account
     *
     * @param bool|null $is_primary_account is_primary_account
     *
     * @return self
     */
    public function setIsPrimaryAccount($is_primary_account)
    {
        $this->container['is_primary_account'] = $is_primary_account;

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

