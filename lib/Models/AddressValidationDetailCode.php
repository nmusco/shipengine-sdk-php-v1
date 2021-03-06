<?php
/**
 * AddressValidationDetailCode
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
 * AddressValidationDetailCode Class Doc Comment
 *
 * @category Class
 * @description The detailed error codes that can be returned by the address validation API
 * @package  Nmusco\ShipEngine\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddressValidationDetailCode
{
    /**
     * Possible values of this enum
     */
    const UNSUPPORTED_COUNTRY = 'unsupported_country';
    const NON_SUPPORTED_COUNTRY = 'non_supported_country';
    const MINIMUM_POSTAL_CODE_VERIFICATION_FAILED = 'minimum_postal_code_verification_failed';
    const STREET_DOES_NOT_MATCH_UNIQUE_STREET_NAME = 'street_does_not_match_unique_street_name';
    const MULTIPLE_DIRECTIONALS = 'multiple_directionals';
    const MULTIPLE_MATCHES = 'multiple_matches';
    const SUITE_NOT_VALID = 'suite_not_valid';
    const SUITE_MISSING = 'suite_missing';
    const INCOMPATIBLE_PAIRED_LABELS = 'incompatible_paired_labels';
    const INVALID_HOUSE_NUMBER = 'invalid_house_number';
    const MISSING_HOUSE_NUMBER = 'missing_house_number';
    const INVALID_BOX_NUMBER = 'invalid_box_number';
    const INVALID_CHARGE_EVENT = 'invalid_charge_event';
    const MISSING_BOX_NUMBER = 'missing_box_number';
    const MISSING_CMRA_OR_PRIVATE_MAIL_BOX_NUMBER = 'missing_cmra_or_private_mail_box_number';
    const SUITE_HAS_NO_SECONDARIES = 'suite_has_no_secondaries';
    const POSTAL_CODE_CHANGED_OR_ADDED = 'postal_code_changed_or_added';
    const STATE_PROVINCE_CHANGED_OR_ADDED = 'state_province_changed_or_added';
    const CITY_LOCALITY_CHANGED_OR_ADDED = 'city_locality_changed_or_added';
    const URBANIZATION_CHANGED = 'urbanization_changed';
    const STREET_NAME_SPELLING_CHANGED_OR_ADDED = 'street_name_spelling_changed_or_added';
    const STREET_NAME_TYPE_CHANGED_OR_ADDED = 'street_name_type_changed_or_added';
    const STREET_DIRECTION_CHANGED_OR_ADDED = 'street_direction_changed_or_added';
    const SUITE_TYPE_CHANGED_OR_ADDED = 'suite_type_changed_or_added';
    const SUITE_UNIT_NUMBER_CHANGED_OR_ADDED = 'suite_unit_number_changed_or_added';
    const DOUBLE_DEPENDENT_LOCALITY_CHANGED_OR_ADDED = 'double_dependent_locality_changed_or_added';
    const SUBADMINISTRATIVE_AREA_CHANGED_OR_ADDED = 'subadministrative_area_changed_or_added';
    const SUBNATIONAL_AREA_CHANGED_OR_ADDED = 'subnational_area_changed_or_added';
    const PO_BOX_CHANGED_OR_ADDED = 'po_box_changed_or_added';
    const PREMISE_TYPE_CHANGED_OR_ADDED = 'premise_type_changed_or_added';
    const HOUSE_NUMBER_CHANGED = 'house_number_changed';
    const ORGANIZATION_CHANGED_OR_ADDED = 'organization_changed_or_added';
    const PARTIALLY_VERIFIED_TO_STATE_LEVEL = 'partially_verified_to_state_level';
    const PARTIALLY_VERIFIED_TO_CITY_LEVEL = 'partially_verified_to_city_level';
    const PARTIALLY_VERIFIED_TO_STREET_LEVEL = 'partially_verified_to_street_level';
    const PARTIALLY_VERIFIED_TO_PREMISE_LEVEL = 'partially_verified_to_premise_level';
    const VERIFIED_TO_STATE_LEVEL = 'verified_to_state_level';
    const VERIFIED_TO_CITY_LEVEL = 'verified_to_city_level';
    const VERIFIED_TO_STREET_LEVEL = 'verified_to_street_level';
    const VERIFIED_TO_PREMISE_LEVEL = 'verified_to_premise_level';
    const VERIFIED_TO_SUITE_LEVEL = 'verified_to_suite_level';
    const CODED_TO_STREET_LAVEL = 'coded_to_street_lavel';
    const CODED_TO_NEIGHBORHOOD_LEVEL = 'coded_to_neighborhood_level';
    const CODED_TO_COMMUNITY_LEVEL = 'coded_to_community_level';
    const CODED_TO_STATE_LEVEL = 'coded_to_state_level';
    const CODED_TO_ROOFTOP_LEVEL = 'coded_to_rooftop_level';
    const CODED_TO_ROOFTOP_INTERPOLATION_LEVEL = 'coded_to_rooftop_interpolation_level';
    const NAME_MAX_LENGTH_EXCEEDED = 'name_max_length_exceeded';
    const PHONE_MAX_LENGTH_EXCEEDED = 'phone_max_length_exceeded';
    const COMPANY_NAME_MAX_LENGTH_EXCEEDED = 'company_name_max_length_exceeded';
    const LINE1_MIN_MAX_LENGTH = 'line1_min_max_length';
    const LINE2_MAX_LENGTH_EXCEEDED = 'line2_max_length_exceeded';
    const LINE3_MAX_LENGTH_EXCEEDED = 'line3_max_length_exceeded';
    const CITY_LOCALITY_MAX_LENGTH_EXCEEDED = 'city_locality_max_length_exceeded';
    const STATE_PROVINCE_MAX_LENGTH_EXCEEDED = 'state_province_max_length_exceeded';
    const INVALID_POSTAL_CODE = 'invalid_postal_code';
    const COUNTRY_INVALID_LENGTH = 'country_invalid_length';
    const ADDRESS_NOT_FOUND = 'address_not_found';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSUPPORTED_COUNTRY,
            self::NON_SUPPORTED_COUNTRY,
            self::MINIMUM_POSTAL_CODE_VERIFICATION_FAILED,
            self::STREET_DOES_NOT_MATCH_UNIQUE_STREET_NAME,
            self::MULTIPLE_DIRECTIONALS,
            self::MULTIPLE_MATCHES,
            self::SUITE_NOT_VALID,
            self::SUITE_MISSING,
            self::INCOMPATIBLE_PAIRED_LABELS,
            self::INVALID_HOUSE_NUMBER,
            self::MISSING_HOUSE_NUMBER,
            self::INVALID_BOX_NUMBER,
            self::INVALID_CHARGE_EVENT,
            self::MISSING_BOX_NUMBER,
            self::MISSING_CMRA_OR_PRIVATE_MAIL_BOX_NUMBER,
            self::SUITE_HAS_NO_SECONDARIES,
            self::POSTAL_CODE_CHANGED_OR_ADDED,
            self::STATE_PROVINCE_CHANGED_OR_ADDED,
            self::CITY_LOCALITY_CHANGED_OR_ADDED,
            self::URBANIZATION_CHANGED,
            self::STREET_NAME_SPELLING_CHANGED_OR_ADDED,
            self::STREET_NAME_TYPE_CHANGED_OR_ADDED,
            self::STREET_DIRECTION_CHANGED_OR_ADDED,
            self::SUITE_TYPE_CHANGED_OR_ADDED,
            self::SUITE_UNIT_NUMBER_CHANGED_OR_ADDED,
            self::DOUBLE_DEPENDENT_LOCALITY_CHANGED_OR_ADDED,
            self::SUBADMINISTRATIVE_AREA_CHANGED_OR_ADDED,
            self::SUBNATIONAL_AREA_CHANGED_OR_ADDED,
            self::PO_BOX_CHANGED_OR_ADDED,
            self::PREMISE_TYPE_CHANGED_OR_ADDED,
            self::HOUSE_NUMBER_CHANGED,
            self::ORGANIZATION_CHANGED_OR_ADDED,
            self::PARTIALLY_VERIFIED_TO_STATE_LEVEL,
            self::PARTIALLY_VERIFIED_TO_CITY_LEVEL,
            self::PARTIALLY_VERIFIED_TO_STREET_LEVEL,
            self::PARTIALLY_VERIFIED_TO_PREMISE_LEVEL,
            self::VERIFIED_TO_STATE_LEVEL,
            self::VERIFIED_TO_CITY_LEVEL,
            self::VERIFIED_TO_STREET_LEVEL,
            self::VERIFIED_TO_PREMISE_LEVEL,
            self::VERIFIED_TO_SUITE_LEVEL,
            self::CODED_TO_STREET_LAVEL,
            self::CODED_TO_NEIGHBORHOOD_LEVEL,
            self::CODED_TO_COMMUNITY_LEVEL,
            self::CODED_TO_STATE_LEVEL,
            self::CODED_TO_ROOFTOP_LEVEL,
            self::CODED_TO_ROOFTOP_INTERPOLATION_LEVEL,
            self::NAME_MAX_LENGTH_EXCEEDED,
            self::PHONE_MAX_LENGTH_EXCEEDED,
            self::COMPANY_NAME_MAX_LENGTH_EXCEEDED,
            self::LINE1_MIN_MAX_LENGTH,
            self::LINE2_MAX_LENGTH_EXCEEDED,
            self::LINE3_MAX_LENGTH_EXCEEDED,
            self::CITY_LOCALITY_MAX_LENGTH_EXCEEDED,
            self::STATE_PROVINCE_MAX_LENGTH_EXCEEDED,
            self::INVALID_POSTAL_CODE,
            self::COUNTRY_INVALID_LENGTH,
            self::ADDRESS_NOT_FOUND,
        ];
    }
}


