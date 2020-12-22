<?php
/**
 * CreateReturnLabelRequestBody
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
 * The version of the OpenAPI document: 1.1.202012161912
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
 * CreateReturnLabelRequestBody Class Doc Comment
 *
 * @category Class
 * @description A create return label request body
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateReturnLabelRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_return_label_request_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'charge_event' => 'LabelChargeEvent',
        'label_layout' => 'LabelLayout',
        'label_format' => 'LabelFormat',
        'label_download_type' => 'LabelDownloadType',
        'display_scheme' => 'DisplayScheme',
        'label_image_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'charge_event' => null,
        'label_layout' => null,
        'label_format' => null,
        'label_download_type' => null,
        'display_scheme' => null,
        'label_image_id' => null
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
        'charge_event' => 'charge_event',
        'label_layout' => 'label_layout',
        'label_format' => 'label_format',
        'label_download_type' => 'label_download_type',
        'display_scheme' => 'display_scheme',
        'label_image_id' => 'label_image_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_event' => 'setChargeEvent',
        'label_layout' => 'setLabelLayout',
        'label_format' => 'setLabelFormat',
        'label_download_type' => 'setLabelDownloadType',
        'display_scheme' => 'setDisplayScheme',
        'label_image_id' => 'setLabelImageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_event' => 'getChargeEvent',
        'label_layout' => 'getLabelLayout',
        'label_format' => 'getLabelFormat',
        'label_download_type' => 'getLabelDownloadType',
        'display_scheme' => 'getDisplayScheme',
        'label_image_id' => 'getLabelImageId'
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
        $this->container['charge_event'] = $data['charge_event'] ?? null;
        $this->container['label_layout'] = $data['label_layout'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['label_download_type'] = $data['label_download_type'] ?? null;
        $this->container['display_scheme'] = $data['display_scheme'] ?? null;
        $this->container['label_image_id'] = $data['label_image_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets charge_event
     *
     * @return LabelChargeEvent|null
     */
    public function getChargeEvent()
    {
        return $this->container['charge_event'];
    }

    /**
     * Sets charge_event
     *
     * @param LabelChargeEvent|null $charge_event The label charge event.
     *
     * @return self
     */
    public function setChargeEvent($charge_event)
    {
        $this->container['charge_event'] = $charge_event;

        return $this;
    }

    /**
     * Gets label_layout
     *
     * @return LabelLayout|null
     */
    public function getLabelLayout()
    {
        return $this->container['label_layout'];
    }

    /**
     * Sets label_layout
     *
     * @param LabelLayout|null $label_layout The layout (size) that you want the label to be in.  The `label_format` determines which sizes are allowed.  `4x6` is supported for all label formats, whereas `letter` (8.5\" x 11\") is only supported for `pdf` format.
     *
     * @return self
     */
    public function setLabelLayout($label_layout)
    {
        $this->container['label_layout'] = $label_layout;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return LabelFormat|null
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param LabelFormat|null $label_format The file format that you want the label to be in.  We recommend `pdf` format because it is supported by all carriers, whereas some carriers do not support the `png` or `zpl` formats.
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets label_download_type
     *
     * @return LabelDownloadType|null
     */
    public function getLabelDownloadType()
    {
        return $this->container['label_download_type'];
    }

    /**
     * Sets label_download_type
     *
     * @param LabelDownloadType|null $label_download_type label_download_type
     *
     * @return self
     */
    public function setLabelDownloadType($label_download_type)
    {
        $this->container['label_download_type'] = $label_download_type;

        return $this;
    }

    /**
     * Gets display_scheme
     *
     * @return DisplayScheme|null
     */
    public function getDisplayScheme()
    {
        return $this->container['display_scheme'];
    }

    /**
     * Sets display_scheme
     *
     * @param DisplayScheme|null $display_scheme The display format that the label should be shown in.
     *
     * @return self
     */
    public function setDisplayScheme($display_scheme)
    {
        $this->container['display_scheme'] = $display_scheme;

        return $this;
    }

    /**
     * Gets label_image_id
     *
     * @return string|null
     */
    public function getLabelImageId()
    {
        return $this->container['label_image_id'];
    }

    /**
     * Sets label_image_id
     *
     * @param string|null $label_image_id The label image resource that was used to create a custom label image.
     *
     * @return self
     */
    public function setLabelImageId($label_image_id)
    {
        $this->container['label_image_id'] = $label_image_id;

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

