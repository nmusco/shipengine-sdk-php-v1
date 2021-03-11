<?php
/**
 * Batch
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.0.0
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
 * Batch Class Doc Comment
 *
 * @category Class
 * @description Batches are an advanced feature of ShipEngine designed for users who need to generate hundreds or thousands of labels at a time.
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Batch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'batch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_layout' => 'LabelLayout',
        'label_format' => 'LabelFormat',
        'batch_id' => 'string',
        'batch_number' => 'string',
        'external_batch_id' => 'string',
        'batch_notes' => 'string',
        'created_at' => '\DateTime',
        'processed_at' => '\DateTime',
        'errors' => 'int',
        'warnings' => 'int',
        'completed' => 'int',
        'forms' => 'int',
        'count' => 'int',
        'batch_shipments_url' => 'OptionalLink',
        'batch_labels_url' => 'OptionalLink',
        'batch_errors_url' => 'OptionalLink',
        'label_download' => 'LabelDownload',
        'form_download' => 'OptionalLink',
        'status' => 'BatchStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_layout' => null,
        'label_format' => null,
        'batch_id' => null,
        'batch_number' => null,
        'external_batch_id' => null,
        'batch_notes' => null,
        'created_at' => null,
        'processed_at' => null,
        'errors' => 'int32',
        'warnings' => 'int32',
        'completed' => 'int32',
        'forms' => 'int32',
        'count' => 'int32',
        'batch_shipments_url' => null,
        'batch_labels_url' => null,
        'batch_errors_url' => null,
        'label_download' => null,
        'form_download' => null,
        'status' => null
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
        'label_layout' => 'label_layout',
        'label_format' => 'label_format',
        'batch_id' => 'batch_id',
        'batch_number' => 'batch_number',
        'external_batch_id' => 'external_batch_id',
        'batch_notes' => 'batch_notes',
        'created_at' => 'created_at',
        'processed_at' => 'processed_at',
        'errors' => 'errors',
        'warnings' => 'warnings',
        'completed' => 'completed',
        'forms' => 'forms',
        'count' => 'count',
        'batch_shipments_url' => 'batch_shipments_url',
        'batch_labels_url' => 'batch_labels_url',
        'batch_errors_url' => 'batch_errors_url',
        'label_download' => 'label_download',
        'form_download' => 'form_download',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_layout' => 'setLabelLayout',
        'label_format' => 'setLabelFormat',
        'batch_id' => 'setBatchId',
        'batch_number' => 'setBatchNumber',
        'external_batch_id' => 'setExternalBatchId',
        'batch_notes' => 'setBatchNotes',
        'created_at' => 'setCreatedAt',
        'processed_at' => 'setProcessedAt',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings',
        'completed' => 'setCompleted',
        'forms' => 'setForms',
        'count' => 'setCount',
        'batch_shipments_url' => 'setBatchShipmentsUrl',
        'batch_labels_url' => 'setBatchLabelsUrl',
        'batch_errors_url' => 'setBatchErrorsUrl',
        'label_download' => 'setLabelDownload',
        'form_download' => 'setFormDownload',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_layout' => 'getLabelLayout',
        'label_format' => 'getLabelFormat',
        'batch_id' => 'getBatchId',
        'batch_number' => 'getBatchNumber',
        'external_batch_id' => 'getExternalBatchId',
        'batch_notes' => 'getBatchNotes',
        'created_at' => 'getCreatedAt',
        'processed_at' => 'getProcessedAt',
        'errors' => 'getErrors',
        'warnings' => 'getWarnings',
        'completed' => 'getCompleted',
        'forms' => 'getForms',
        'count' => 'getCount',
        'batch_shipments_url' => 'getBatchShipmentsUrl',
        'batch_labels_url' => 'getBatchLabelsUrl',
        'batch_errors_url' => 'getBatchErrorsUrl',
        'label_download' => 'getLabelDownload',
        'form_download' => 'getFormDownload',
        'status' => 'getStatus'
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
        $this->container['label_layout'] = $data['label_layout'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['batch_id'] = $data['batch_id'] ?? null;
        $this->container['batch_number'] = $data['batch_number'] ?? null;
        $this->container['external_batch_id'] = $data['external_batch_id'] ?? null;
        $this->container['batch_notes'] = $data['batch_notes'] ?? '';
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['processed_at'] = $data['processed_at'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['completed'] = $data['completed'] ?? null;
        $this->container['forms'] = $data['forms'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
        $this->container['batch_shipments_url'] = $data['batch_shipments_url'] ?? null;
        $this->container['batch_labels_url'] = $data['batch_labels_url'] ?? null;
        $this->container['batch_errors_url'] = $data['batch_errors_url'] ?? null;
        $this->container['label_download'] = $data['label_download'] ?? null;
        $this->container['form_download'] = $data['form_download'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label_layout'] === null) {
            $invalidProperties[] = "'label_layout' can't be null";
        }
        if ($this->container['label_format'] === null) {
            $invalidProperties[] = "'label_format' can't be null";
        }
        if ($this->container['batch_id'] === null) {
            $invalidProperties[] = "'batch_id' can't be null";
        }
        if ($this->container['batch_number'] === null) {
            $invalidProperties[] = "'batch_number' can't be null";
        }
        if ((mb_strlen($this->container['batch_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'batch_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['external_batch_id'] === null) {
            $invalidProperties[] = "'external_batch_id' can't be null";
        }
        if ((mb_strlen($this->container['external_batch_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'external_batch_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['batch_notes'] === null) {
            $invalidProperties[] = "'batch_notes' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['processed_at'] === null) {
            $invalidProperties[] = "'processed_at' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        if (($this->container['errors'] < 0)) {
            $invalidProperties[] = "invalid value for 'errors', must be bigger than or equal to 0.";
        }

        if ($this->container['warnings'] === null) {
            $invalidProperties[] = "'warnings' can't be null";
        }
        if (($this->container['warnings'] < 0)) {
            $invalidProperties[] = "invalid value for 'warnings', must be bigger than or equal to 0.";
        }

        if ($this->container['completed'] === null) {
            $invalidProperties[] = "'completed' can't be null";
        }
        if (($this->container['completed'] < 0)) {
            $invalidProperties[] = "invalid value for 'completed', must be bigger than or equal to 0.";
        }

        if ($this->container['forms'] === null) {
            $invalidProperties[] = "'forms' can't be null";
        }
        if (($this->container['forms'] < 0)) {
            $invalidProperties[] = "invalid value for 'forms', must be bigger than or equal to 0.";
        }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if (($this->container['count'] < 0)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
        }

        if ($this->container['batch_shipments_url'] === null) {
            $invalidProperties[] = "'batch_shipments_url' can't be null";
        }
        if ($this->container['batch_labels_url'] === null) {
            $invalidProperties[] = "'batch_labels_url' can't be null";
        }
        if ($this->container['batch_errors_url'] === null) {
            $invalidProperties[] = "'batch_errors_url' can't be null";
        }
        if ($this->container['label_download'] === null) {
            $invalidProperties[] = "'label_download' can't be null";
        }
        if ($this->container['form_download'] === null) {
            $invalidProperties[] = "'form_download' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets label_layout
     *
     * @return LabelLayout
     */
    public function getLabelLayout()
    {
        return $this->container['label_layout'];
    }

    /**
     * Sets label_layout
     *
     * @param LabelLayout $label_layout label layout
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
     * @return LabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param LabelFormat $label_format label_format
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param string $batch_id A string that uniquely identifies the batch
     *
     * @return self
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return string
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string $batch_number The batch number.
     *
     * @return self
     */
    public function setBatchNumber($batch_number)
    {

        if ((mb_strlen($batch_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $batch_number when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets external_batch_id
     *
     * @return string
     */
    public function getExternalBatchId()
    {
        return $this->container['external_batch_id'];
    }

    /**
     * Sets external_batch_id
     *
     * @param string $external_batch_id A string that uniquely identifies the external batch
     *
     * @return self
     */
    public function setExternalBatchId($external_batch_id)
    {

        if ((mb_strlen($external_batch_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $external_batch_id when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['external_batch_id'] = $external_batch_id;

        return $this;
    }

    /**
     * Gets batch_notes
     *
     * @return string
     */
    public function getBatchNotes()
    {
        return $this->container['batch_notes'];
    }

    /**
     * Sets batch_notes
     *
     * @param string $batch_notes Custom notes you can add for each created batch
     *
     * @return self
     */
    public function setBatchNotes($batch_notes)
    {
        $this->container['batch_notes'] = $batch_notes;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date and time the batch was created in ShipEngine
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets processed_at
     *
     * @return \DateTime
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     *
     * @param \DateTime $processed_at The date and time the batch was processed in ShipEngine
     *
     * @return self
     */
    public function setProcessedAt($processed_at)
    {
        $this->container['processed_at'] = $processed_at;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return int
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param int $errors The number of errors that occurred while generating the batch
     *
     * @return self
     */
    public function setErrors($errors)
    {

        if (($errors < 0)) {
            throw new \InvalidArgumentException('invalid value for $errors when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return int
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param int $warnings The number of warnings that occurred while generating the batch
     *
     * @return self
     */
    public function setWarnings($warnings)
    {

        if (($warnings < 0)) {
            throw new \InvalidArgumentException('invalid value for $warnings when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return int
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param int $completed The number of labels generated in the batch
     *
     * @return self
     */
    public function setCompleted($completed)
    {

        if (($completed < 0)) {
            throw new \InvalidArgumentException('invalid value for $completed when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets forms
     *
     * @return int
     */
    public function getForms()
    {
        return $this->container['forms'];
    }

    /**
     * Sets forms
     *
     * @param int $forms The number of forms for customs that are available for download
     *
     * @return self
     */
    public function setForms($forms)
    {

        if (($forms < 0)) {
            throw new \InvalidArgumentException('invalid value for $forms when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['forms'] = $forms;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The total of errors, warnings, and completed properties
     *
     * @return self
     */
    public function setCount($count)
    {

        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling Batch., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets batch_shipments_url
     *
     * @return OptionalLink
     */
    public function getBatchShipmentsUrl()
    {
        return $this->container['batch_shipments_url'];
    }

    /**
     * Sets batch_shipments_url
     *
     * @param OptionalLink $batch_shipments_url The batch shipments endpoint
     *
     * @return self
     */
    public function setBatchShipmentsUrl($batch_shipments_url)
    {
        $this->container['batch_shipments_url'] = $batch_shipments_url;

        return $this;
    }

    /**
     * Gets batch_labels_url
     *
     * @return OptionalLink
     */
    public function getBatchLabelsUrl()
    {
        return $this->container['batch_labels_url'];
    }

    /**
     * Sets batch_labels_url
     *
     * @param OptionalLink $batch_labels_url Link to batch labels query
     *
     * @return self
     */
    public function setBatchLabelsUrl($batch_labels_url)
    {
        $this->container['batch_labels_url'] = $batch_labels_url;

        return $this;
    }

    /**
     * Gets batch_errors_url
     *
     * @return OptionalLink
     */
    public function getBatchErrorsUrl()
    {
        return $this->container['batch_errors_url'];
    }

    /**
     * Sets batch_errors_url
     *
     * @param OptionalLink $batch_errors_url Link to batch errors endpoint
     *
     * @return self
     */
    public function setBatchErrorsUrl($batch_errors_url)
    {
        $this->container['batch_errors_url'] = $batch_errors_url;

        return $this;
    }

    /**
     * Gets label_download
     *
     * @return LabelDownload
     */
    public function getLabelDownload()
    {
        return $this->container['label_download'];
    }

    /**
     * Sets label_download
     *
     * @param LabelDownload $label_download The label download for the batch
     *
     * @return self
     */
    public function setLabelDownload($label_download)
    {
        $this->container['label_download'] = $label_download;

        return $this;
    }

    /**
     * Gets form_download
     *
     * @return OptionalLink
     */
    public function getFormDownload()
    {
        return $this->container['form_download'];
    }

    /**
     * Sets form_download
     *
     * @param OptionalLink $form_download The form download for any customs that are needed
     *
     * @return self
     */
    public function setFormDownload($form_download)
    {
        $this->container['form_download'] = $form_download;

        return $this;
    }

    /**
     * Gets status
     *
     * @return BatchStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param BatchStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

