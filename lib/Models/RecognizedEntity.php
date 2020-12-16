<?php
/**
 * RecognizedEntity
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
 * RecognizedEntity Class Doc Comment
 *
 * @category Class
 * @description An entity is a single piece of data that was recognized in unstructured text.  For example, a city, a postal code, package dimensions, insured value, etc.  Each entity includes the original text and the parsed value.
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RecognizedEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recognized_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'score' => 'double',
        'text' => 'string',
        'start_index' => 'int',
        'end_index' => 'int',
        'result' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'score' => 'double',
        'text' => null,
        'start_index' => null,
        'end_index' => null,
        'result' => null
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
        'type' => 'type',
        'score' => 'score',
        'text' => 'text',
        'start_index' => 'start_index',
        'end_index' => 'end_index',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'score' => 'setScore',
        'text' => 'setText',
        'start_index' => 'setStartIndex',
        'end_index' => 'setEndIndex',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'score' => 'getScore',
        'text' => 'getText',
        'start_index' => 'getStartIndex',
        'end_index' => 'getEndIndex',
        'result' => 'getResult'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['score'] = $data['score'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['start_index'] = $data['start_index'] ?? null;
        $this->container['end_index'] = $data['end_index'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ((mb_strlen($this->container['type']) < 1)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if (($this->container['score'] > 1)) {
            $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1.";
        }

        if (($this->container['score'] < 0)) {
            $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
        }

        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ((mb_strlen($this->container['text']) < 1)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['start_index'] === null) {
            $invalidProperties[] = "'start_index' can't be null";
        }
        if (($this->container['start_index'] < 0)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 0.";
        }

        if ($this->container['end_index'] === null) {
            $invalidProperties[] = "'end_index' can't be null";
        }
        if (($this->container['end_index'] < 0)) {
            $invalidProperties[] = "invalid value for 'end_index', must be bigger than or equal to 0.";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The Entity type (e.g. \"weight\", \"person\", \"address_line1\", etc.)
     *
     * @return self
     */
    public function setType($type)
    {

        if ((mb_strlen($type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $type when calling RecognizedEntity., must be bigger than or equal to 1.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double $score A confidence score between zero and one that indicates how certain the API is that it correctly recognized this entity
     *
     * @return self
     */
    public function setScore($score)
    {

        if (($score > 1)) {
            throw new \InvalidArgumentException('invalid value for $score when calling RecognizedEntity., must be smaller than or equal to 1.');
        }
        if (($score < 0)) {
            throw new \InvalidArgumentException('invalid value for $score when calling RecognizedEntity., must be bigger than or equal to 0.');
        }

        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The substring from the original text that was recognized as this entity
     *
     * @return self
     */
    public function setText($text)
    {

        if ((mb_strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $text when calling RecognizedEntity., must be bigger than or equal to 1.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int $start_index The index of the first character of this entity within the original text
     *
     * @return self
     */
    public function setStartIndex($start_index)
    {

        if (($start_index < 0)) {
            throw new \InvalidArgumentException('invalid value for $start_index when calling RecognizedEntity., must be bigger than or equal to 0.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets end_index
     *
     * @return int
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index
     *
     * @param int $end_index The index of the last character of this entity within the original text
     *
     * @return self
     */
    public function setEndIndex($end_index)
    {

        if (($end_index < 0)) {
            throw new \InvalidArgumentException('invalid value for $end_index when calling RecognizedEntity., must be bigger than or equal to 0.');
        }

        $this->container['end_index'] = $end_index;

        return $this;
    }

    /**
     * Gets result
     *
     * @return map[string,object]|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param map[string,object]|null $result The normalized value of the entity.  Most entity results have a `value` field, which is the normalized value of the entity.  For example, if the substring \"john doe\" was recognized as a \"person\" entity, then the value might be normalized to have proper capitalization (e.g. \"John Doe\").  Or if the substring \"ft worth\" was recognized as a \"city\" entity, then the value might be normalized to \"Fort Worth\".  Some entities have other information in addition to, or instead of a `value`.  For example, a \"dimensions\" entity will have separate fields for `length`, `width`, `height`, and `unit`.
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
