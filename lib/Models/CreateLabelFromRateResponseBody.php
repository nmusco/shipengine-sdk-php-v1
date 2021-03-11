<?php
/**
 * CreateLabelFromRateResponseBody
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
 * CreateLabelFromRateResponseBody Class Doc Comment
 *
 * @category Class
 * @description A create label from rate response body
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateLabelFromRateResponseBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_label_from_rate_response_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_id' => 'string',
        'status' => 'LabelStatus',
        'shipment_id' => 'string',
        'shipment' => 'Shipment',
        'ship_date' => '\DateTime',
        'created_at' => '\DateTime',
        'shipment_cost' => 'MonetaryValue',
        'insurance_cost' => 'MonetaryValue',
        'tracking_number' => 'string',
        'is_return_label' => 'bool',
        'rma_number' => 'string',
        'is_international' => 'bool',
        'batch_id' => 'string',
        'carrier_id' => 'string',
        'charge_event' => 'LabelChargeEvent',
        'outbound_label_id' => 'string',
        'service_code' => 'string',
        'test_label' => 'bool',
        'package_code' => 'string',
        'validate_address' => 'ValidateAddress',
        'voided' => 'bool',
        'voided_at' => '\DateTime',
        'label_download_type' => 'LabelDownloadType',
        'label_format' => 'LabelFormat',
        'display_scheme' => 'DisplayScheme',
        'label_layout' => 'LabelLayout',
        'trackable' => 'bool',
        'label_image_id' => 'string',
        'carrier_code' => 'string',
        'tracking_status' => 'TrackingStatus',
        'label_download' => 'LabelDownload',
        'form_download' => 'Link',
        'insurance_claim' => 'Link',
        'packages' => '\Nmusco\ShipEngine\v1\Models\Package[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_id' => null,
        'status' => null,
        'shipment_id' => null,
        'shipment' => null,
        'ship_date' => null,
        'created_at' => null,
        'shipment_cost' => null,
        'insurance_cost' => null,
        'tracking_number' => null,
        'is_return_label' => null,
        'rma_number' => null,
        'is_international' => null,
        'batch_id' => null,
        'carrier_id' => null,
        'charge_event' => null,
        'outbound_label_id' => null,
        'service_code' => null,
        'test_label' => null,
        'package_code' => null,
        'validate_address' => null,
        'voided' => null,
        'voided_at' => null,
        'label_download_type' => null,
        'label_format' => null,
        'display_scheme' => null,
        'label_layout' => null,
        'trackable' => null,
        'label_image_id' => null,
        'carrier_code' => null,
        'tracking_status' => null,
        'label_download' => null,
        'form_download' => null,
        'insurance_claim' => null,
        'packages' => null
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
        'label_id' => 'label_id',
        'status' => 'status',
        'shipment_id' => 'shipment_id',
        'shipment' => 'shipment',
        'ship_date' => 'ship_date',
        'created_at' => 'created_at',
        'shipment_cost' => 'shipment_cost',
        'insurance_cost' => 'insurance_cost',
        'tracking_number' => 'tracking_number',
        'is_return_label' => 'is_return_label',
        'rma_number' => 'rma_number',
        'is_international' => 'is_international',
        'batch_id' => 'batch_id',
        'carrier_id' => 'carrier_id',
        'charge_event' => 'charge_event',
        'outbound_label_id' => 'outbound_label_id',
        'service_code' => 'service_code',
        'test_label' => 'test_label',
        'package_code' => 'package_code',
        'validate_address' => 'validate_address',
        'voided' => 'voided',
        'voided_at' => 'voided_at',
        'label_download_type' => 'label_download_type',
        'label_format' => 'label_format',
        'display_scheme' => 'display_scheme',
        'label_layout' => 'label_layout',
        'trackable' => 'trackable',
        'label_image_id' => 'label_image_id',
        'carrier_code' => 'carrier_code',
        'tracking_status' => 'tracking_status',
        'label_download' => 'label_download',
        'form_download' => 'form_download',
        'insurance_claim' => 'insurance_claim',
        'packages' => 'packages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_id' => 'setLabelId',
        'status' => 'setStatus',
        'shipment_id' => 'setShipmentId',
        'shipment' => 'setShipment',
        'ship_date' => 'setShipDate',
        'created_at' => 'setCreatedAt',
        'shipment_cost' => 'setShipmentCost',
        'insurance_cost' => 'setInsuranceCost',
        'tracking_number' => 'setTrackingNumber',
        'is_return_label' => 'setIsReturnLabel',
        'rma_number' => 'setRmaNumber',
        'is_international' => 'setIsInternational',
        'batch_id' => 'setBatchId',
        'carrier_id' => 'setCarrierId',
        'charge_event' => 'setChargeEvent',
        'outbound_label_id' => 'setOutboundLabelId',
        'service_code' => 'setServiceCode',
        'test_label' => 'setTestLabel',
        'package_code' => 'setPackageCode',
        'validate_address' => 'setValidateAddress',
        'voided' => 'setVoided',
        'voided_at' => 'setVoidedAt',
        'label_download_type' => 'setLabelDownloadType',
        'label_format' => 'setLabelFormat',
        'display_scheme' => 'setDisplayScheme',
        'label_layout' => 'setLabelLayout',
        'trackable' => 'setTrackable',
        'label_image_id' => 'setLabelImageId',
        'carrier_code' => 'setCarrierCode',
        'tracking_status' => 'setTrackingStatus',
        'label_download' => 'setLabelDownload',
        'form_download' => 'setFormDownload',
        'insurance_claim' => 'setInsuranceClaim',
        'packages' => 'setPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_id' => 'getLabelId',
        'status' => 'getStatus',
        'shipment_id' => 'getShipmentId',
        'shipment' => 'getShipment',
        'ship_date' => 'getShipDate',
        'created_at' => 'getCreatedAt',
        'shipment_cost' => 'getShipmentCost',
        'insurance_cost' => 'getInsuranceCost',
        'tracking_number' => 'getTrackingNumber',
        'is_return_label' => 'getIsReturnLabel',
        'rma_number' => 'getRmaNumber',
        'is_international' => 'getIsInternational',
        'batch_id' => 'getBatchId',
        'carrier_id' => 'getCarrierId',
        'charge_event' => 'getChargeEvent',
        'outbound_label_id' => 'getOutboundLabelId',
        'service_code' => 'getServiceCode',
        'test_label' => 'getTestLabel',
        'package_code' => 'getPackageCode',
        'validate_address' => 'getValidateAddress',
        'voided' => 'getVoided',
        'voided_at' => 'getVoidedAt',
        'label_download_type' => 'getLabelDownloadType',
        'label_format' => 'getLabelFormat',
        'display_scheme' => 'getDisplayScheme',
        'label_layout' => 'getLabelLayout',
        'trackable' => 'getTrackable',
        'label_image_id' => 'getLabelImageId',
        'carrier_code' => 'getCarrierCode',
        'tracking_status' => 'getTrackingStatus',
        'label_download' => 'getLabelDownload',
        'form_download' => 'getFormDownload',
        'insurance_claim' => 'getInsuranceClaim',
        'packages' => 'getPackages'
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
        $this->container['label_id'] = $data['label_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipment'] = $data['shipment'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['shipment_cost'] = $data['shipment_cost'] ?? null;
        $this->container['insurance_cost'] = $data['insurance_cost'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['is_return_label'] = $data['is_return_label'] ?? null;
        $this->container['rma_number'] = $data['rma_number'] ?? null;
        $this->container['is_international'] = $data['is_international'] ?? null;
        $this->container['batch_id'] = $data['batch_id'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['charge_event'] = $data['charge_event'] ?? null;
        $this->container['outbound_label_id'] = $data['outbound_label_id'] ?? null;
        $this->container['service_code'] = $data['service_code'] ?? null;
        $this->container['test_label'] = $data['test_label'] ?? false;
        $this->container['package_code'] = $data['package_code'] ?? null;
        $this->container['validate_address'] = $data['validate_address'] ?? null;
        $this->container['voided'] = $data['voided'] ?? null;
        $this->container['voided_at'] = $data['voided_at'] ?? null;
        $this->container['label_download_type'] = $data['label_download_type'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['display_scheme'] = $data['display_scheme'] ?? null;
        $this->container['label_layout'] = $data['label_layout'] ?? null;
        $this->container['trackable'] = $data['trackable'] ?? null;
        $this->container['label_image_id'] = $data['label_image_id'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['tracking_status'] = $data['tracking_status'] ?? null;
        $this->container['label_download'] = $data['label_download'] ?? null;
        $this->container['form_download'] = $data['form_download'] ?? null;
        $this->container['insurance_claim'] = $data['insurance_claim'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['tracking_number']) && (mb_strlen($this->container['tracking_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be bigger than or equal to 1.";
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
     * Gets label_id
     *
     * @return string|null
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param string|null $label_id A string that uniquely identifies the label. This ID is generated by ShipEngine when the label is created.
     *
     * @return self
     */
    public function setLabelId($label_id)
    {
        $this->container['label_id'] = $label_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return LabelStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param LabelStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id The shipment that this label is for.  ShipEngine can create a shipment for you automatically when you [create a label](https://www.shipengine.com/docs/labels/create-a-label/), or you can [create your own shipment](https://www.shipengine.com/docs/shipping/create-a-shipment/) and then [use it to print a label](https://www.shipengine.com/docs/labels/create-from-shipment/)
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment
     *
     * @return Shipment|null
     */
    public function getShipment()
    {
        return $this->container['shipment'];
    }

    /**
     * Sets shipment
     *
     * @param Shipment|null $shipment The shipment information used to generate the label
     *
     * @return self
     */
    public function setShipment($shipment)
    {
        $this->container['shipment'] = $shipment;

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
     * @param \DateTime|null $ship_date The date that the package was (or will be) shippped.  ShipEngine will take the day of week into consideration. For example, if the carrier does not operate on Sundays, then a package that would have shipped on Sunday will ship on Monday instead.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

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
     * @param \DateTime|null $created_at The date and time that the label was created in ShipEngine.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets shipment_cost
     *
     * @return MonetaryValue|null
     */
    public function getShipmentCost()
    {
        return $this->container['shipment_cost'];
    }

    /**
     * Sets shipment_cost
     *
     * @param MonetaryValue|null $shipment_cost The cost of shipping, delivery confirmation, and other carrier charges.  This amount **does not** include insurance costs.
     *
     * @return self
     */
    public function setShipmentCost($shipment_cost)
    {
        $this->container['shipment_cost'] = $shipment_cost;

        return $this;
    }

    /**
     * Gets insurance_cost
     *
     * @return MonetaryValue|null
     */
    public function getInsuranceCost()
    {
        return $this->container['insurance_cost'];
    }

    /**
     * Sets insurance_cost
     *
     * @param MonetaryValue|null $insurance_cost The insurance cost for this package.  Add this to the `shipment_cost` field to get the total cost.
     *
     * @return self
     */
    public function setInsuranceCost($insurance_cost)
    {
        $this->container['insurance_cost'] = $insurance_cost;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number for the package. Tracking number formats vary across carriers.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {

        if (!is_null($tracking_number) && (mb_strlen($tracking_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling CreateLabelFromRateResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets is_return_label
     *
     * @return bool|null
     */
    public function getIsReturnLabel()
    {
        return $this->container['is_return_label'];
    }

    /**
     * Sets is_return_label
     *
     * @param bool|null $is_return_label Indicates whether this is a return label.  You may also want to set the `rma_number` so you know what is being returned.
     *
     * @return self
     */
    public function setIsReturnLabel($is_return_label)
    {
        $this->container['is_return_label'] = $is_return_label;

        return $this;
    }

    /**
     * Gets rma_number
     *
     * @return string|null
     */
    public function getRmaNumber()
    {
        return $this->container['rma_number'];
    }

    /**
     * Sets rma_number
     *
     * @param string|null $rma_number An optional Return Merchandise Authorization number.  This field is useful for return labels.  You can set it to any string value.
     *
     * @return self
     */
    public function setRmaNumber($rma_number)
    {
        $this->container['rma_number'] = $rma_number;

        return $this;
    }

    /**
     * Gets is_international
     *
     * @return bool|null
     */
    public function getIsInternational()
    {
        return $this->container['is_international'];
    }

    /**
     * Sets is_international
     *
     * @param bool|null $is_international Indicates whether this is an international shipment.  That is, the originating country and destination country are different.
     *
     * @return self
     */
    public function setIsInternational($is_international)
    {
        $this->container['is_international'] = $is_international;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param string|null $batch_id If this label was created as part of a [batch](https://www.shipengine.com/docs/labels/bulk/), then this is the unique ID of that batch.
     *
     * @return self
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

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
     * @param string|null $carrier_id The unique ID of the [carrier account](https://www.shipengine.com/docs/carriers/setup/) that was used to create this label
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
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
     * Gets outbound_label_id
     *
     * @return string|null
     */
    public function getOutboundLabelId()
    {
        return $this->container['outbound_label_id'];
    }

    /**
     * Sets outbound_label_id
     *
     * @param string|null $outbound_label_id The `label_id` of the original (outgoing) label that the return label is for. This associates the two labels together, which is required by some carriers.
     *
     * @return self
     */
    public function setOutboundLabelId($outbound_label_id)
    {
        $this->container['outbound_label_id'] = $outbound_label_id;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string|null $service_code The [carrier service](https://www.shipengine.com/docs/shipping/use-a-carrier-service/) used to ship the package, such as `fedex_ground`, `usps_first_class_mail`, `flat_rate_envelope`, etc.
     *
     * @return self
     */
    public function setServiceCode($service_code)
    {
        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets test_label
     *
     * @return bool|null
     */
    public function getTestLabel()
    {
        return $this->container['test_label'];
    }

    /**
     * Sets test_label
     *
     * @param bool|null $test_label Indicate if this label is being used only for testing purposes. If true, then no charge will be added to your account.
     *
     * @return self
     */
    public function setTestLabel($test_label)
    {
        $this->container['test_label'] = $test_label;

        return $this;
    }

    /**
     * Gets package_code
     *
     * @return string|null
     */
    public function getPackageCode()
    {
        return $this->container['package_code'];
    }

    /**
     * Sets package_code
     *
     * @param string|null $package_code The [package type](https://www.shipengine.com/docs/reference/list-carrier-packages/), such as `thick_envelope`, `small_flat_rate_box`, `large_package`, etc.  The code `package` indicates a custom or unknown package type.
     *
     * @return self
     */
    public function setPackageCode($package_code)
    {
        $this->container['package_code'] = $package_code;

        return $this;
    }

    /**
     * Gets validate_address
     *
     * @return ValidateAddress|null
     */
    public function getValidateAddress()
    {
        return $this->container['validate_address'];
    }

    /**
     * Sets validate_address
     *
     * @param ValidateAddress|null $validate_address validate_address
     *
     * @return self
     */
    public function setValidateAddress($validate_address)
    {
        $this->container['validate_address'] = $validate_address;

        return $this;
    }

    /**
     * Gets voided
     *
     * @return bool|null
     */
    public function getVoided()
    {
        return $this->container['voided'];
    }

    /**
     * Sets voided
     *
     * @param bool|null $voided Indicates whether the label has been [voided](https://www.shipengine.com/docs/labels/voiding/)
     *
     * @return self
     */
    public function setVoided($voided)
    {
        $this->container['voided'] = $voided;

        return $this;
    }

    /**
     * Gets voided_at
     *
     * @return \DateTime|null
     */
    public function getVoidedAt()
    {
        return $this->container['voided_at'];
    }

    /**
     * Sets voided_at
     *
     * @param \DateTime|null $voided_at The date and time that the label was [voided](https://www.shipengine.com/docs/labels/voiding/), or `null` if the label has not been voided
     *
     * @return self
     */
    public function setVoidedAt($voided_at)
    {
        $this->container['voided_at'] = $voided_at;

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
     * Gets trackable
     *
     * @return bool|null
     */
    public function getTrackable()
    {
        return $this->container['trackable'];
    }

    /**
     * Sets trackable
     *
     * @param bool|null $trackable Indicates whether the shipment is trackable, in which case the `tracking_status` field will reflect the current status and each package will have a `tracking_number`.
     *
     * @return self
     */
    public function setTrackable($trackable)
    {
        $this->container['trackable'] = $trackable;

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
     * Gets carrier_code
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string|null $carrier_code The [shipping carrier](https://www.shipengine.com/docs/carriers/setup/) who will ship the package, such as `fedex`, `dhl_express`, `stamps_com`, etc.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets tracking_status
     *
     * @return TrackingStatus|null
     */
    public function getTrackingStatus()
    {
        return $this->container['tracking_status'];
    }

    /**
     * Sets tracking_status
     *
     * @param TrackingStatus|null $tracking_status The current status of the package, such as `in_transit` or `delivered`
     *
     * @return self
     */
    public function setTrackingStatus($tracking_status)
    {
        $this->container['tracking_status'] = $tracking_status;

        return $this;
    }

    /**
     * Gets label_download
     *
     * @return LabelDownload|null
     */
    public function getLabelDownload()
    {
        return $this->container['label_download'];
    }

    /**
     * Sets label_download
     *
     * @param LabelDownload|null $label_download label_download
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
     * @return Link|null
     */
    public function getFormDownload()
    {
        return $this->container['form_download'];
    }

    /**
     * Sets form_download
     *
     * @param Link|null $form_download The link to downlaod the customs form (a.k.a. commercial invoice) for this shipment, if any.  Forms are in PDF format. This field is null if the shipment does not require a customs form, or if the carrier does not support it.
     *
     * @return self
     */
    public function setFormDownload($form_download)
    {
        $this->container['form_download'] = $form_download;

        return $this;
    }

    /**
     * Gets insurance_claim
     *
     * @return Link|null
     */
    public function getInsuranceClaim()
    {
        return $this->container['insurance_claim'];
    }

    /**
     * Sets insurance_claim
     *
     * @param Link|null $insurance_claim The link to submit an insurance claim for the shipment.  This field is null if the shipment is not insured or if the insurance provider does not support online claim submission.
     *
     * @return self
     */
    public function setInsuranceClaim($insurance_claim)
    {
        $this->container['insurance_claim'] = $insurance_claim;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \Nmusco\ShipEngine\v1\Models\Package[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Nmusco\ShipEngine\v1\Models\Package[]|null $packages The label's package(s).  > **Note:** Some carriers only allow one package per label.  If you attempt to create a multi-package label for a carrier that doesn't allow it, an error will be returned.
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

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

