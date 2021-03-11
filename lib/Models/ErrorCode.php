<?php
/**
 * ErrorCode
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
use \Nmusco\ShipEngine\v1\ObjectSerializer;

/**
 * ErrorCode Class Doc Comment
 *
 * @category Class
 * @description The error code specified for the failed API Call
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    const AUTO_FUND_NOT_SUPPORTED = 'auto_fund_not_supported';
    const BATCH_CANNOT_BE_MODIFIED = 'batch_cannot_be_modified';
    const CARRIER_CONFLICT = 'carrier_conflict';
    const CARRIER_DISCONNECTED = 'carrier_disconnected';
    const CARRIER_NOT_CONNECTED = 'carrier_not_connected';
    const CARRIER_NOT_SUPPORTED = 'carrier_not_supported';
    const CONFIRMATION_NOT_SUPPORTED = 'confirmation_not_supported';
    const DEFAULT_WAREHOUSE_CANNOT_BE_DELETED = 'default_warehouse_cannot_be_deleted';
    const FIELD_CONFLICT = 'field_conflict';
    const FIELD_VALUE_REQUIRED = 'field_value_required';
    const FORBIDDEN = 'forbidden';
    const IDENTIFIER_CONFLICT = 'identifier_conflict';
    const IDENTIFIERS_MUST_MATCH = 'identifiers_must_match';
    const INSUFFICIENT_FUNDS = 'insufficient_funds';
    const INVALID_ADDRESS = 'invalid_address';
    const INVALID_BILLING_PLAN = 'invalid_billing_plan';
    const INVALID_FIELD_VALUE = 'invalid_field_value';
    const INVALID_IDENTIFIER = 'invalid_identifier';
    const INVALID_STATUS = 'invalid_status';
    const INVALID_STRING_LENGTH = 'invalid_string_length';
    const LABEL_IMAGES_NOT_SUPPORTED = 'label_images_not_supported';
    const METER_FAILURE = 'meter_failure';
    const ORDER_SOURCE_NOT_ACTIVE = 'order_source_not_active';
    const RATE_LIMIT_EXCEEDED = 'rate_limit_exceeded';
    const REFRESH_NOT_SUPPORTED = 'refresh_not_supported';
    const REQUEST_BODY_REQUIRED = 'request_body_required';
    const RETURN_LABEL_NOT_SUPPORTED = 'return_label_not_supported';
    const SETTINGS_NOT_SUPPORTED = 'settings_not_supported';
    const SUBSCRIPTION_INACTIVE = 'subscription_inactive';
    const TERMS_NOT_ACCEPTED = 'terms_not_accepted';
    const TRACKING_NOT_SUPPORTED = 'tracking_not_supported';
    const TRIAL_EXPIRED = 'trial_expired';
    const UNAUTHORIZED = 'unauthorized';
    const UNKNOWN = 'unknown';
    const UNSPECIFIED = 'unspecified';
    const VERIFICATION_FAILURE = 'verification_failure';
    const WAREHOUSE_CONFLICT = 'warehouse_conflict';
    const WEBHOOK_EVENT_TYPE_CONFLICT = 'webhook_event_type_conflict';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO_FUND_NOT_SUPPORTED,
            self::BATCH_CANNOT_BE_MODIFIED,
            self::CARRIER_CONFLICT,
            self::CARRIER_DISCONNECTED,
            self::CARRIER_NOT_CONNECTED,
            self::CARRIER_NOT_SUPPORTED,
            self::CONFIRMATION_NOT_SUPPORTED,
            self::DEFAULT_WAREHOUSE_CANNOT_BE_DELETED,
            self::FIELD_CONFLICT,
            self::FIELD_VALUE_REQUIRED,
            self::FORBIDDEN,
            self::IDENTIFIER_CONFLICT,
            self::IDENTIFIERS_MUST_MATCH,
            self::INSUFFICIENT_FUNDS,
            self::INVALID_ADDRESS,
            self::INVALID_BILLING_PLAN,
            self::INVALID_FIELD_VALUE,
            self::INVALID_IDENTIFIER,
            self::INVALID_STATUS,
            self::INVALID_STRING_LENGTH,
            self::LABEL_IMAGES_NOT_SUPPORTED,
            self::METER_FAILURE,
            self::ORDER_SOURCE_NOT_ACTIVE,
            self::RATE_LIMIT_EXCEEDED,
            self::REFRESH_NOT_SUPPORTED,
            self::REQUEST_BODY_REQUIRED,
            self::RETURN_LABEL_NOT_SUPPORTED,
            self::SETTINGS_NOT_SUPPORTED,
            self::SUBSCRIPTION_INACTIVE,
            self::TERMS_NOT_ACCEPTED,
            self::TRACKING_NOT_SUPPORTED,
            self::TRIAL_EXPIRED,
            self::UNAUTHORIZED,
            self::UNKNOWN,
            self::UNSPECIFIED,
            self::VERIFICATION_FAILURE,
            self::WAREHOUSE_CONFLICT,
            self::WEBHOOK_EVENT_TYPE_CONFLICT,
        ];
    }
}


