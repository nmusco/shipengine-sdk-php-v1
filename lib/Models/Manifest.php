<?php
/**
 * Manifest
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
 * Manifest Class Doc Comment
 *
 * @category Class
 * @description Used for combining packages into one scannable form that a carrier can use when picking up a large  number of shipments
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Manifest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'manifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manifest_id' => 'string',
        'form_id' => 'string',
        'created_at' => '\DateTime',
        'ship_date' => '\DateTime',
        'shipments' => 'int',
        'label_ids' => 'string[]',
        'warehouse_id' => 'string',
        'submission_id' => 'string',
        'carrier_id' => 'string',
        'manifest_download' => 'ManifestDownload'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'manifest_id' => null,
        'form_id' => null,
        'created_at' => 'date-time',
        'ship_date' => 'date-time',
        'shipments' => 'int32',
        'label_ids' => null,
        'warehouse_id' => null,
        'submission_id' => null,
        'carrier_id' => null,
        'manifest_download' => null
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
        'manifest_id' => 'manifest_id',
        'form_id' => 'form_id',
        'created_at' => 'created_at',
        'ship_date' => 'ship_date',
        'shipments' => 'shipments',
        'label_ids' => 'label_ids',
        'warehouse_id' => 'warehouse_id',
        'submission_id' => 'submission_id',
        'carrier_id' => 'carrier_id',
        'manifest_download' => 'manifest_download'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manifest_id' => 'setManifestId',
        'form_id' => 'setFormId',
        'created_at' => 'setCreatedAt',
        'ship_date' => 'setShipDate',
        'shipments' => 'setShipments',
        'label_ids' => 'setLabelIds',
        'warehouse_id' => 'setWarehouseId',
        'submission_id' => 'setSubmissionId',
        'carrier_id' => 'setCarrierId',
        'manifest_download' => 'setManifestDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manifest_id' => 'getManifestId',
        'form_id' => 'getFormId',
        'created_at' => 'getCreatedAt',
        'ship_date' => 'getShipDate',
        'shipments' => 'getShipments',
        'label_ids' => 'getLabelIds',
        'warehouse_id' => 'getWarehouseId',
        'submission_id' => 'getSubmissionId',
        'carrier_id' => 'getCarrierId',
        'manifest_download' => 'getManifestDownload'
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
        $this->container['manifest_id'] = $data['manifest_id'] ?? null;
        $this->container['form_id'] = $data['form_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['shipments'] = $data['shipments'] ?? null;
        $this->container['label_ids'] = $data['label_ids'] ?? null;
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
        $this->container['submission_id'] = $data['submission_id'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['manifest_download'] = $data['manifest_download'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['shipments']) && ($this->container['shipments'] < 1)) {
            $invalidProperties[] = "invalid value for 'shipments', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['submission_id']) && (mb_strlen($this->container['submission_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'submission_id', the character length must be bigger than or equal to 1.";
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
     * Gets manifest_id
     *
     * @return string|null
     */
    public function getManifestId()
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id
     *
     * @param string|null $manifest_id A string that uniquely identifies the manifest
     *
     * @return self
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return string|null
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param string|null $form_id A string that uniquely identifies the form
     *
     * @return self
     */
    public function setFormId($form_id)
    {
        $this->container['form_id'] = $form_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date-time that the manifest was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime|null $ship_date The date-time that the manifests shipments will be picked up
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return int|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param int|null $shipments The number of shipments that are included in this manifest
     *
     * @return self
     */
    public function setShipments($shipments)
    {

        if (!is_null($shipments) && ($shipments < 1)) {
            throw new \InvalidArgumentException('invalid value for $shipments when calling Manifest., must be bigger than or equal to 1.');
        }

        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return string[]|null
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param string[]|null $label_ids An array of the label ids used in this manifest.
     *
     * @return self
     */
    public function setLabelIds($label_ids)
    {
        $this->container['label_ids'] = $label_ids;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id A string that uniquely identifies the warehouse
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets submission_id
     *
     * @return string|null
     */
    public function getSubmissionId()
    {
        return $this->container['submission_id'];
    }

    /**
     * Sets submission_id
     *
     * @param string|null $submission_id A string that uniquely identifies the submission
     *
     * @return self
     */
    public function setSubmissionId($submission_id)
    {

        if (!is_null($submission_id) && (mb_strlen($submission_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $submission_id when calling Manifest., must be bigger than or equal to 1.');
        }

        $this->container['submission_id'] = $submission_id;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string|null
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string|null $carrier_id A string that uniquely identifies the carrier
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets manifest_download
     *
     * @return ManifestDownload|null
     */
    public function getManifestDownload()
    {
        return $this->container['manifest_download'];
    }

    /**
     * Sets manifest_download
     *
     * @param ManifestDownload|null $manifest_download manifest_download
     *
     * @return self
     */
    public function setManifestDownload($manifest_download)
    {
        $this->container['manifest_download'] = $manifest_download;

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

