<?php
/**
 * RateEstimate
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
 * RateEstimate Class Doc Comment
 *
 * @category Class
 * @description A rate estimate
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RateEstimate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'rate_estimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rate_type' => 'RateType',
        'carrier_id' => 'string',
        'shipping_amount' => 'MonetaryValue',
        'insurance_amount' => 'MonetaryValue',
        'confirmation_amount' => 'MonetaryValue',
        'other_amount' => 'MonetaryValue',
        'zone' => 'int',
        'package_type' => 'string',
        'guaranteed_service' => 'bool',
        'negotiated_rate' => 'bool',
        'service_type' => 'string',
        'service_code' => 'string',
        'trackable' => 'bool',
        'carrier_code' => 'string',
        'carrier_nickname' => 'string',
        'carrier_friendly_name' => 'string',
        'validation_status' => 'ValidationStatus',
        'warning_messages' => 'string[]',
        'error_messages' => 'string[]',
        'tax_amount' => 'MonetaryValue',
        'delivery_days' => 'int',
        'estimated_delivery_date' => '\DateTime',
        'carrier_delivery_days' => 'string',
        'ship_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rate_type' => null,
        'carrier_id' => null,
        'shipping_amount' => null,
        'insurance_amount' => null,
        'confirmation_amount' => null,
        'other_amount' => null,
        'zone' => 'int32',
        'package_type' => null,
        'guaranteed_service' => null,
        'negotiated_rate' => null,
        'service_type' => null,
        'service_code' => null,
        'trackable' => null,
        'carrier_code' => null,
        'carrier_nickname' => null,
        'carrier_friendly_name' => null,
        'validation_status' => null,
        'warning_messages' => null,
        'error_messages' => null,
        'tax_amount' => null,
        'delivery_days' => 'int32',
        'estimated_delivery_date' => null,
        'carrier_delivery_days' => null,
        'ship_date' => 'date-time'
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
        'rate_type' => 'rate_type',
        'carrier_id' => 'carrier_id',
        'shipping_amount' => 'shipping_amount',
        'insurance_amount' => 'insurance_amount',
        'confirmation_amount' => 'confirmation_amount',
        'other_amount' => 'other_amount',
        'zone' => 'zone',
        'package_type' => 'package_type',
        'guaranteed_service' => 'guaranteed_service',
        'negotiated_rate' => 'negotiated_rate',
        'service_type' => 'service_type',
        'service_code' => 'service_code',
        'trackable' => 'trackable',
        'carrier_code' => 'carrier_code',
        'carrier_nickname' => 'carrier_nickname',
        'carrier_friendly_name' => 'carrier_friendly_name',
        'validation_status' => 'validation_status',
        'warning_messages' => 'warning_messages',
        'error_messages' => 'error_messages',
        'tax_amount' => 'tax_amount',
        'delivery_days' => 'delivery_days',
        'estimated_delivery_date' => 'estimated_delivery_date',
        'carrier_delivery_days' => 'carrier_delivery_days',
        'ship_date' => 'ship_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_type' => 'setRateType',
        'carrier_id' => 'setCarrierId',
        'shipping_amount' => 'setShippingAmount',
        'insurance_amount' => 'setInsuranceAmount',
        'confirmation_amount' => 'setConfirmationAmount',
        'other_amount' => 'setOtherAmount',
        'zone' => 'setZone',
        'package_type' => 'setPackageType',
        'guaranteed_service' => 'setGuaranteedService',
        'negotiated_rate' => 'setNegotiatedRate',
        'service_type' => 'setServiceType',
        'service_code' => 'setServiceCode',
        'trackable' => 'setTrackable',
        'carrier_code' => 'setCarrierCode',
        'carrier_nickname' => 'setCarrierNickname',
        'carrier_friendly_name' => 'setCarrierFriendlyName',
        'validation_status' => 'setValidationStatus',
        'warning_messages' => 'setWarningMessages',
        'error_messages' => 'setErrorMessages',
        'tax_amount' => 'setTaxAmount',
        'delivery_days' => 'setDeliveryDays',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'carrier_delivery_days' => 'setCarrierDeliveryDays',
        'ship_date' => 'setShipDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_type' => 'getRateType',
        'carrier_id' => 'getCarrierId',
        'shipping_amount' => 'getShippingAmount',
        'insurance_amount' => 'getInsuranceAmount',
        'confirmation_amount' => 'getConfirmationAmount',
        'other_amount' => 'getOtherAmount',
        'zone' => 'getZone',
        'package_type' => 'getPackageType',
        'guaranteed_service' => 'getGuaranteedService',
        'negotiated_rate' => 'getNegotiatedRate',
        'service_type' => 'getServiceType',
        'service_code' => 'getServiceCode',
        'trackable' => 'getTrackable',
        'carrier_code' => 'getCarrierCode',
        'carrier_nickname' => 'getCarrierNickname',
        'carrier_friendly_name' => 'getCarrierFriendlyName',
        'validation_status' => 'getValidationStatus',
        'warning_messages' => 'getWarningMessages',
        'error_messages' => 'getErrorMessages',
        'tax_amount' => 'getTaxAmount',
        'delivery_days' => 'getDeliveryDays',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'carrier_delivery_days' => 'getCarrierDeliveryDays',
        'ship_date' => 'getShipDate'
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
        $this->container['rate_type'] = $data['rate_type'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['shipping_amount'] = $data['shipping_amount'] ?? null;
        $this->container['insurance_amount'] = $data['insurance_amount'] ?? null;
        $this->container['confirmation_amount'] = $data['confirmation_amount'] ?? null;
        $this->container['other_amount'] = $data['other_amount'] ?? null;
        $this->container['zone'] = $data['zone'] ?? null;
        $this->container['package_type'] = $data['package_type'] ?? null;
        $this->container['guaranteed_service'] = $data['guaranteed_service'] ?? null;
        $this->container['negotiated_rate'] = $data['negotiated_rate'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['service_code'] = $data['service_code'] ?? null;
        $this->container['trackable'] = $data['trackable'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['carrier_nickname'] = $data['carrier_nickname'] ?? null;
        $this->container['carrier_friendly_name'] = $data['carrier_friendly_name'] ?? null;
        $this->container['validation_status'] = $data['validation_status'] ?? null;
        $this->container['warning_messages'] = $data['warning_messages'] ?? null;
        $this->container['error_messages'] = $data['error_messages'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['delivery_days'] = $data['delivery_days'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
        $this->container['carrier_delivery_days'] = $data['carrier_delivery_days'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rate_type'] === null) {
            $invalidProperties[] = "'rate_type' can't be null";
        }
        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ($this->container['shipping_amount'] === null) {
            $invalidProperties[] = "'shipping_amount' can't be null";
        }
        if ($this->container['insurance_amount'] === null) {
            $invalidProperties[] = "'insurance_amount' can't be null";
        }
        if ($this->container['confirmation_amount'] === null) {
            $invalidProperties[] = "'confirmation_amount' can't be null";
        }
        if ($this->container['other_amount'] === null) {
            $invalidProperties[] = "'other_amount' can't be null";
        }
        if ($this->container['zone'] === null) {
            $invalidProperties[] = "'zone' can't be null";
        }
        if (($this->container['zone'] < 0)) {
            $invalidProperties[] = "invalid value for 'zone', must be bigger than or equal to 0.";
        }

        if ($this->container['package_type'] === null) {
            $invalidProperties[] = "'package_type' can't be null";
        }
        if ((mb_strlen($this->container['package_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'package_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['guaranteed_service'] === null) {
            $invalidProperties[] = "'guaranteed_service' can't be null";
        }
        if ($this->container['negotiated_rate'] === null) {
            $invalidProperties[] = "'negotiated_rate' can't be null";
        }
        if ($this->container['service_type'] === null) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if ((mb_strlen($this->container['service_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'service_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['service_code'] === null) {
            $invalidProperties[] = "'service_code' can't be null";
        }
        if ((mb_strlen($this->container['service_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'service_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['trackable'] === null) {
            $invalidProperties[] = "'trackable' can't be null";
        }
        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        if ((mb_strlen($this->container['carrier_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_nickname'] === null) {
            $invalidProperties[] = "'carrier_nickname' can't be null";
        }
        if ((mb_strlen($this->container['carrier_nickname']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_nickname', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_friendly_name'] === null) {
            $invalidProperties[] = "'carrier_friendly_name' can't be null";
        }
        if ((mb_strlen($this->container['carrier_friendly_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_friendly_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['validation_status'] === null) {
            $invalidProperties[] = "'validation_status' can't be null";
        }
        if ($this->container['warning_messages'] === null) {
            $invalidProperties[] = "'warning_messages' can't be null";
        }
        if ($this->container['error_messages'] === null) {
            $invalidProperties[] = "'error_messages' can't be null";
        }
        if (!is_null($this->container['delivery_days']) && ($this->container['delivery_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'delivery_days', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['carrier_delivery_days']) && (mb_strlen($this->container['carrier_delivery_days']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_delivery_days', the character length must be bigger than or equal to 1.";
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
     * Gets rate_type
     *
     * @return RateType
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param RateType $rate_type rate_type
     *
     * @return self
     */
    public function setRateType($rate_type)
    {
        $this->container['rate_type'] = $rate_type;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id A string that uniquely identifies the carrier
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return MonetaryValue
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param MonetaryValue $shipping_amount The shipping amount
     *
     * @return self
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets insurance_amount
     *
     * @return MonetaryValue
     */
    public function getInsuranceAmount()
    {
        return $this->container['insurance_amount'];
    }

    /**
     * Sets insurance_amount
     *
     * @param MonetaryValue $insurance_amount The insurance amount
     *
     * @return self
     */
    public function setInsuranceAmount($insurance_amount)
    {
        $this->container['insurance_amount'] = $insurance_amount;

        return $this;
    }

    /**
     * Gets confirmation_amount
     *
     * @return MonetaryValue
     */
    public function getConfirmationAmount()
    {
        return $this->container['confirmation_amount'];
    }

    /**
     * Sets confirmation_amount
     *
     * @param MonetaryValue $confirmation_amount The confirmation amount
     *
     * @return self
     */
    public function setConfirmationAmount($confirmation_amount)
    {
        $this->container['confirmation_amount'] = $confirmation_amount;

        return $this;
    }

    /**
     * Gets other_amount
     *
     * @return MonetaryValue
     */
    public function getOtherAmount()
    {
        return $this->container['other_amount'];
    }

    /**
     * Sets other_amount
     *
     * @param MonetaryValue $other_amount Any other charges associated with this rate
     *
     * @return self
     */
    public function setOtherAmount($other_amount)
    {
        $this->container['other_amount'] = $other_amount;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return int
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param int $zone Certain carriers base [their rates](https://blog.stamps.com/2017/09/08/usps-postal-zones/) off of custom zones that vary depending upon the ship_to and ship_from location
     *
     * @return self
     */
    public function setZone($zone)
    {

        if (($zone < 0)) {
            throw new \InvalidArgumentException('invalid value for $zone when calling RateEstimate., must be bigger than or equal to 0.');
        }

        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param string $package_type package type that this rate was estimated for
     *
     * @return self
     */
    public function setPackageType($package_type)
    {

        if ((mb_strlen($package_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $package_type when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets guaranteed_service
     *
     * @return bool
     */
    public function getGuaranteedService()
    {
        return $this->container['guaranteed_service'];
    }

    /**
     * Sets guaranteed_service
     *
     * @param bool $guaranteed_service Indicates if the rate is guaranteed.
     *
     * @return self
     */
    public function setGuaranteedService($guaranteed_service)
    {
        $this->container['guaranteed_service'] = $guaranteed_service;

        return $this;
    }

    /**
     * Gets negotiated_rate
     *
     * @return bool
     */
    public function getNegotiatedRate()
    {
        return $this->container['negotiated_rate'];
    }

    /**
     * Sets negotiated_rate
     *
     * @param bool $negotiated_rate Indicates if the rates been negotiated
     *
     * @return self
     */
    public function setNegotiatedRate($negotiated_rate)
    {
        $this->container['negotiated_rate'] = $negotiated_rate;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string $service_type service type
     *
     * @return self
     */
    public function setServiceType($service_type)
    {

        if ((mb_strlen($service_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $service_type when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string $service_code service code for the rate
     *
     * @return self
     */
    public function setServiceCode($service_code)
    {

        if ((mb_strlen($service_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $service_code when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets trackable
     *
     * @return bool
     */
    public function getTrackable()
    {
        return $this->container['trackable'];
    }

    /**
     * Sets trackable
     *
     * @param bool $trackable Indicates if rate is trackable
     *
     * @return self
     */
    public function setTrackable($trackable)
    {
        $this->container['trackable'] = $trackable;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code carrier code
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {

        if ((mb_strlen($carrier_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_code when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_nickname
     *
     * @return string
     */
    public function getCarrierNickname()
    {
        return $this->container['carrier_nickname'];
    }

    /**
     * Sets carrier_nickname
     *
     * @param string $carrier_nickname carrier nickname
     *
     * @return self
     */
    public function setCarrierNickname($carrier_nickname)
    {

        if ((mb_strlen($carrier_nickname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_nickname when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_nickname'] = $carrier_nickname;

        return $this;
    }

    /**
     * Gets carrier_friendly_name
     *
     * @return string
     */
    public function getCarrierFriendlyName()
    {
        return $this->container['carrier_friendly_name'];
    }

    /**
     * Sets carrier_friendly_name
     *
     * @param string $carrier_friendly_name carrier friendly name
     *
     * @return self
     */
    public function setCarrierFriendlyName($carrier_friendly_name)
    {

        if ((mb_strlen($carrier_friendly_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_friendly_name when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_friendly_name'] = $carrier_friendly_name;

        return $this;
    }

    /**
     * Gets validation_status
     *
     * @return ValidationStatus
     */
    public function getValidationStatus()
    {
        return $this->container['validation_status'];
    }

    /**
     * Sets validation_status
     *
     * @param ValidationStatus $validation_status validation_status
     *
     * @return self
     */
    public function setValidationStatus($validation_status)
    {
        $this->container['validation_status'] = $validation_status;

        return $this;
    }

    /**
     * Gets warning_messages
     *
     * @return string[]
     */
    public function getWarningMessages()
    {
        return $this->container['warning_messages'];
    }

    /**
     * Sets warning_messages
     *
     * @param string[] $warning_messages The warning messages
     *
     * @return self
     */
    public function setWarningMessages($warning_messages)
    {
        $this->container['warning_messages'] = $warning_messages;

        return $this;
    }

    /**
     * Gets error_messages
     *
     * @return string[]
     */
    public function getErrorMessages()
    {
        return $this->container['error_messages'];
    }

    /**
     * Sets error_messages
     *
     * @param string[] $error_messages The error messages
     *
     * @return self
     */
    public function setErrorMessages($error_messages)
    {
        $this->container['error_messages'] = $error_messages;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return MonetaryValue|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param MonetaryValue|null $tax_amount Tariff and additional taxes associated with an international shipment.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets delivery_days
     *
     * @return int|null
     */
    public function getDeliveryDays()
    {
        return $this->container['delivery_days'];
    }

    /**
     * Sets delivery_days
     *
     * @param int|null $delivery_days The number of days estimated for delivery, this will show the _actual_ delivery time if for example, the package gets shipped on a Friday
     *
     * @return self
     */
    public function setDeliveryDays($delivery_days)
    {

        if (!is_null($delivery_days) && ($delivery_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $delivery_days when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['delivery_days'] = $delivery_days;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param \DateTime|null $estimated_delivery_date estimated_delivery_date
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets carrier_delivery_days
     *
     * @return string|null
     */
    public function getCarrierDeliveryDays()
    {
        return $this->container['carrier_delivery_days'];
    }

    /**
     * Sets carrier_delivery_days
     *
     * @param string|null $carrier_delivery_days The carrier delivery days
     *
     * @return self
     */
    public function setCarrierDeliveryDays($carrier_delivery_days)
    {

        if (!is_null($carrier_delivery_days) && (mb_strlen($carrier_delivery_days) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_delivery_days when calling RateEstimate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_delivery_days'] = $carrier_delivery_days;

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
     * @param \DateTime|null $ship_date ship date
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

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

