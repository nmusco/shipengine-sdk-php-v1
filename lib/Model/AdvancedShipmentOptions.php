<?php
/**
 * AdvancedShipmentOptions
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

namespace Nmusco\ShipEngine\v1\Model;

use \ArrayAccess;
use \Nmusco\ShipEngine\v1\ObjectSerializer;

/**
 * AdvancedShipmentOptions Class Doc Comment
 *
 * @category Class
 * @description Advanced shipment options
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdvancedShipmentOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'advanced_shipment_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bill_to_account' => 'string',
        'bill_to_country_code' => 'string',
        'bill_to_party' => 'BillToParty',
        'bill_to_postal_code' => 'string',
        'contains_alcohol' => 'bool',
        'delivered_duty_paid' => 'bool',
        'dry_ice' => 'bool',
        'dry_ice_weight' => 'Weight',
        'non_machinable' => 'bool',
        'saturday_delivery' => 'bool',
        'use_ups_ground_freight_pricing' => 'bool',
        'freight_class' => 'string',
        'custom_field1' => 'string',
        'custom_field2' => 'string',
        'custom_field3' => 'string',
        'origin_type' => 'OriginType',
        'collect_on_delivery' => '\Nmusco\ShipEngine\v1\Model\CollectOnDelivery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bill_to_account' => null,
        'bill_to_country_code' => null,
        'bill_to_party' => null,
        'bill_to_postal_code' => null,
        'contains_alcohol' => null,
        'delivered_duty_paid' => null,
        'dry_ice' => null,
        'dry_ice_weight' => null,
        'non_machinable' => null,
        'saturday_delivery' => null,
        'use_ups_ground_freight_pricing' => null,
        'freight_class' => null,
        'custom_field1' => null,
        'custom_field2' => null,
        'custom_field3' => null,
        'origin_type' => null,
        'collect_on_delivery' => null
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
        'bill_to_account' => 'bill_to_account',
        'bill_to_country_code' => 'bill_to_country_code',
        'bill_to_party' => 'bill_to_party',
        'bill_to_postal_code' => 'bill_to_postal_code',
        'contains_alcohol' => 'contains_alcohol',
        'delivered_duty_paid' => 'delivered_duty_paid',
        'dry_ice' => 'dry_ice',
        'dry_ice_weight' => 'dry_ice_weight',
        'non_machinable' => 'non_machinable',
        'saturday_delivery' => 'saturday_delivery',
        'use_ups_ground_freight_pricing' => 'use_ups_ground_freight_pricing',
        'freight_class' => 'freight_class',
        'custom_field1' => 'custom_field1',
        'custom_field2' => 'custom_field2',
        'custom_field3' => 'custom_field3',
        'origin_type' => 'origin_type',
        'collect_on_delivery' => 'collect_on_delivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_to_account' => 'setBillToAccount',
        'bill_to_country_code' => 'setBillToCountryCode',
        'bill_to_party' => 'setBillToParty',
        'bill_to_postal_code' => 'setBillToPostalCode',
        'contains_alcohol' => 'setContainsAlcohol',
        'delivered_duty_paid' => 'setDeliveredDutyPaid',
        'dry_ice' => 'setDryIce',
        'dry_ice_weight' => 'setDryIceWeight',
        'non_machinable' => 'setNonMachinable',
        'saturday_delivery' => 'setSaturdayDelivery',
        'use_ups_ground_freight_pricing' => 'setUseUpsGroundFreightPricing',
        'freight_class' => 'setFreightClass',
        'custom_field1' => 'setCustomField1',
        'custom_field2' => 'setCustomField2',
        'custom_field3' => 'setCustomField3',
        'origin_type' => 'setOriginType',
        'collect_on_delivery' => 'setCollectOnDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_to_account' => 'getBillToAccount',
        'bill_to_country_code' => 'getBillToCountryCode',
        'bill_to_party' => 'getBillToParty',
        'bill_to_postal_code' => 'getBillToPostalCode',
        'contains_alcohol' => 'getContainsAlcohol',
        'delivered_duty_paid' => 'getDeliveredDutyPaid',
        'dry_ice' => 'getDryIce',
        'dry_ice_weight' => 'getDryIceWeight',
        'non_machinable' => 'getNonMachinable',
        'saturday_delivery' => 'getSaturdayDelivery',
        'use_ups_ground_freight_pricing' => 'getUseUpsGroundFreightPricing',
        'freight_class' => 'getFreightClass',
        'custom_field1' => 'getCustomField1',
        'custom_field2' => 'getCustomField2',
        'custom_field3' => 'getCustomField3',
        'origin_type' => 'getOriginType',
        'collect_on_delivery' => 'getCollectOnDelivery'
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
        $this->container['bill_to_account'] = isset($data['bill_to_account']) ? $data['bill_to_account'] : 'null';
        $this->container['bill_to_country_code'] = isset($data['bill_to_country_code']) ? $data['bill_to_country_code'] : null;
        $this->container['bill_to_party'] = isset($data['bill_to_party']) ? $data['bill_to_party'] : null;
        $this->container['bill_to_postal_code'] = isset($data['bill_to_postal_code']) ? $data['bill_to_postal_code'] : 'null';
        $this->container['contains_alcohol'] = isset($data['contains_alcohol']) ? $data['contains_alcohol'] : false;
        $this->container['delivered_duty_paid'] = isset($data['delivered_duty_paid']) ? $data['delivered_duty_paid'] : false;
        $this->container['dry_ice'] = isset($data['dry_ice']) ? $data['dry_ice'] : false;
        $this->container['dry_ice_weight'] = isset($data['dry_ice_weight']) ? $data['dry_ice_weight'] : null;
        $this->container['non_machinable'] = isset($data['non_machinable']) ? $data['non_machinable'] : false;
        $this->container['saturday_delivery'] = isset($data['saturday_delivery']) ? $data['saturday_delivery'] : false;
        $this->container['use_ups_ground_freight_pricing'] = isset($data['use_ups_ground_freight_pricing']) ? $data['use_ups_ground_freight_pricing'] : null;
        $this->container['freight_class'] = isset($data['freight_class']) ? $data['freight_class'] : 'null';
        $this->container['custom_field1'] = isset($data['custom_field1']) ? $data['custom_field1'] : 'null';
        $this->container['custom_field2'] = isset($data['custom_field2']) ? $data['custom_field2'] : 'null';
        $this->container['custom_field3'] = isset($data['custom_field3']) ? $data['custom_field3'] : 'null';
        $this->container['origin_type'] = isset($data['origin_type']) ? $data['origin_type'] : null;
        $this->container['collect_on_delivery'] = isset($data['collect_on_delivery']) ? $data['collect_on_delivery'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['custom_field1']) && (mb_strlen($this->container['custom_field1']) > 100)) {
            $invalidProperties[] = "invalid value for 'custom_field1', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['custom_field2']) && (mb_strlen($this->container['custom_field2']) > 100)) {
            $invalidProperties[] = "invalid value for 'custom_field2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['custom_field3']) && (mb_strlen($this->container['custom_field3']) > 100)) {
            $invalidProperties[] = "invalid value for 'custom_field3', the character length must be smaller than or equal to 100.";
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
     * Gets bill_to_account
     *
     * @return string|null
     */
    public function getBillToAccount()
    {
        return $this->container['bill_to_account'];
    }

    /**
     * Sets bill_to_account
     *
     * @param string|null $bill_to_account This field is used to [bill shipping costs to a third party](https://www.shipengine.com/docs/shipping/bill-to-third-party/).  This field must be used in conjunction with the `bill_to_country_code`, `bill_to_party`, and `bill_to_postal_code` fields.
     *
     * @return $this
     */
    public function setBillToAccount($bill_to_account)
    {
        $this->container['bill_to_account'] = $bill_to_account;

        return $this;
    }

    /**
     * Gets bill_to_country_code
     *
     * @return string|null
     */
    public function getBillToCountryCode()
    {
        return $this->container['bill_to_country_code'];
    }

    /**
     * Sets bill_to_country_code
     *
     * @param string|null $bill_to_country_code The two-letter [ISO 3166-1 country code](https://en.wikipedia.org/wiki/ISO_3166-1) of the third-party that is responsible for shipping costs.
     *
     * @return $this
     */
    public function setBillToCountryCode($bill_to_country_code)
    {
        $this->container['bill_to_country_code'] = $bill_to_country_code;

        return $this;
    }

    /**
     * Gets bill_to_party
     *
     * @return BillToParty|null
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param BillToParty|null $bill_to_party Indicates whether to bill shipping costs to the recipient or to a third-party.  When billing to a third-party, the `bill_to_account`, `bill_to_country_code`, and `bill_to_postal_code` fields must also be set.
     *
     * @return $this
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets bill_to_postal_code
     *
     * @return string|null
     */
    public function getBillToPostalCode()
    {
        return $this->container['bill_to_postal_code'];
    }

    /**
     * Sets bill_to_postal_code
     *
     * @param string|null $bill_to_postal_code The postal code of the third-party that is responsible for shipping costs.
     *
     * @return $this
     */
    public function setBillToPostalCode($bill_to_postal_code)
    {
        $this->container['bill_to_postal_code'] = $bill_to_postal_code;

        return $this;
    }

    /**
     * Gets contains_alcohol
     *
     * @return bool|null
     */
    public function getContainsAlcohol()
    {
        return $this->container['contains_alcohol'];
    }

    /**
     * Sets contains_alcohol
     *
     * @param bool|null $contains_alcohol Indicates that the shipment contains alcohol.
     *
     * @return $this
     */
    public function setContainsAlcohol($contains_alcohol)
    {
        $this->container['contains_alcohol'] = $contains_alcohol;

        return $this;
    }

    /**
     * Gets delivered_duty_paid
     *
     * @return bool|null
     */
    public function getDeliveredDutyPaid()
    {
        return $this->container['delivered_duty_paid'];
    }

    /**
     * Sets delivered_duty_paid
     *
     * @param bool|null $delivered_duty_paid Indicates that the shipper is paying the international delivery duties for this shipment.  This option is supported by UPS, FedEx, and DHL Express.
     *
     * @return $this
     */
    public function setDeliveredDutyPaid($delivered_duty_paid)
    {
        $this->container['delivered_duty_paid'] = $delivered_duty_paid;

        return $this;
    }

    /**
     * Gets dry_ice
     *
     * @return bool|null
     */
    public function getDryIce()
    {
        return $this->container['dry_ice'];
    }

    /**
     * Sets dry_ice
     *
     * @param bool|null $dry_ice Indicates if the shipment contain dry ice
     *
     * @return $this
     */
    public function setDryIce($dry_ice)
    {
        $this->container['dry_ice'] = $dry_ice;

        return $this;
    }

    /**
     * Gets dry_ice_weight
     *
     * @return Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->container['dry_ice_weight'];
    }

    /**
     * Sets dry_ice_weight
     *
     * @param Weight|null $dry_ice_weight The weight of the dry ice in the shipment
     *
     * @return $this
     */
    public function setDryIceWeight($dry_ice_weight)
    {
        $this->container['dry_ice_weight'] = $dry_ice_weight;

        return $this;
    }

    /**
     * Gets non_machinable
     *
     * @return bool|null
     */
    public function getNonMachinable()
    {
        return $this->container['non_machinable'];
    }

    /**
     * Sets non_machinable
     *
     * @param bool|null $non_machinable Indicates that the package cannot be processed automatically because it is too large or irregularly shaped. This is primarily for USPS shipments.  See [Section 1.2 of the USPS parcel standards](https://pe.usps.com/text/dmm300/101.htm#ep1047495) for details.
     *
     * @return $this
     */
    public function setNonMachinable($non_machinable)
    {
        $this->container['non_machinable'] = $non_machinable;

        return $this;
    }

    /**
     * Gets saturday_delivery
     *
     * @return bool|null
     */
    public function getSaturdayDelivery()
    {
        return $this->container['saturday_delivery'];
    }

    /**
     * Sets saturday_delivery
     *
     * @param bool|null $saturday_delivery Enables Saturday delivery, if supported by the carrier.
     *
     * @return $this
     */
    public function setSaturdayDelivery($saturday_delivery)
    {
        $this->container['saturday_delivery'] = $saturday_delivery;

        return $this;
    }

    /**
     * Gets use_ups_ground_freight_pricing
     *
     * @return bool|null
     */
    public function getUseUpsGroundFreightPricing()
    {
        return $this->container['use_ups_ground_freight_pricing'];
    }

    /**
     * Sets use_ups_ground_freight_pricing
     *
     * @param bool|null $use_ups_ground_freight_pricing Whether to use [UPS Ground Freight pricing](https://www.shipengine.com/docs/shipping/ups-ground-freight/).  If enabled, then a `freight_class` must also be specified.
     *
     * @return $this
     */
    public function setUseUpsGroundFreightPricing($use_ups_ground_freight_pricing)
    {
        $this->container['use_ups_ground_freight_pricing'] = $use_ups_ground_freight_pricing;

        return $this;
    }

    /**
     * Gets freight_class
     *
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->container['freight_class'];
    }

    /**
     * Sets freight_class
     *
     * @param string|null $freight_class The National Motor Freight Traffic Association [freight class](http://www.nmfta.org/pages/nmfc?AspxAutoDetectCookieSupport=1), such as \"77.5\", \"110\", or \"250\".
     *
     * @return $this
     */
    public function setFreightClass($freight_class)
    {
        $this->container['freight_class'] = $freight_class;

        return $this;
    }

    /**
     * Gets custom_field1
     *
     * @return string|null
     */
    public function getCustomField1()
    {
        return $this->container['custom_field1'];
    }

    /**
     * Sets custom_field1
     *
     * @param string|null $custom_field1 An arbitrary field that can be used to store information about the shipment.
     *
     * @return $this
     */
    public function setCustomField1($custom_field1)
    {
        if (!is_null($custom_field1) && (mb_strlen($custom_field1) > 100)) {
            throw new \InvalidArgumentException('invalid length for $custom_field1 when calling AdvancedShipmentOptions., must be smaller than or equal to 100.');
        }

        $this->container['custom_field1'] = $custom_field1;

        return $this;
    }

    /**
     * Gets custom_field2
     *
     * @return string|null
     */
    public function getCustomField2()
    {
        return $this->container['custom_field2'];
    }

    /**
     * Sets custom_field2
     *
     * @param string|null $custom_field2 An arbitrary field that can be used to store information about the shipment.
     *
     * @return $this
     */
    public function setCustomField2($custom_field2)
    {
        if (!is_null($custom_field2) && (mb_strlen($custom_field2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $custom_field2 when calling AdvancedShipmentOptions., must be smaller than or equal to 100.');
        }

        $this->container['custom_field2'] = $custom_field2;

        return $this;
    }

    /**
     * Gets custom_field3
     *
     * @return string|null
     */
    public function getCustomField3()
    {
        return $this->container['custom_field3'];
    }

    /**
     * Sets custom_field3
     *
     * @param string|null $custom_field3 An arbitrary field that can be used to store information about the shipment.
     *
     * @return $this
     */
    public function setCustomField3($custom_field3)
    {
        if (!is_null($custom_field3) && (mb_strlen($custom_field3) > 100)) {
            throw new \InvalidArgumentException('invalid length for $custom_field3 when calling AdvancedShipmentOptions., must be smaller than or equal to 100.');
        }

        $this->container['custom_field3'] = $custom_field3;

        return $this;
    }

    /**
     * Gets origin_type
     *
     * @return OriginType|null
     */
    public function getOriginType()
    {
        return $this->container['origin_type'];
    }

    /**
     * Sets origin_type
     *
     * @param OriginType|null $origin_type origin_type
     *
     * @return $this
     */
    public function setOriginType($origin_type)
    {
        $this->container['origin_type'] = $origin_type;

        return $this;
    }

    /**
     * Gets collect_on_delivery
     *
     * @return \Nmusco\ShipEngine\v1\Model\CollectOnDelivery|null
     */
    public function getCollectOnDelivery()
    {
        return $this->container['collect_on_delivery'];
    }

    /**
     * Sets collect_on_delivery
     *
     * @param \Nmusco\ShipEngine\v1\Model\CollectOnDelivery|null $collect_on_delivery collect_on_delivery
     *
     * @return $this
     */
    public function setCollectOnDelivery($collect_on_delivery)
    {
        $this->container['collect_on_delivery'] = $collect_on_delivery;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


