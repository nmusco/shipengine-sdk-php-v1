<?php
/**
 * CalculateRatesResponseBodyTest
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
 * Please update the test case below to test the model.
 */

namespace Nmusco\ShipEngine\v1;

use PHPUnit\Framework\TestCase;

/**
 * CalculateRatesResponseBodyTest Class Doc Comment
 *
 * @category    Class
 * @description A rate shipment response body
 * @package     Nmusco\ShipEngine\v1
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CalculateRatesResponseBodyTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CalculateRatesResponseBody"
     */
    public function testCalculateRatesResponseBody()
    {
    }

    /**
     * Test attribute "shipment_id"
     */
    public function testPropertyShipmentId()
    {
    }

    /**
     * Test attribute "ship_date"
     */
    public function testPropertyShipDate()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "modified_at"
     */
    public function testPropertyModifiedAt()
    {
    }

    /**
     * Test attribute "shipment_status"
     */
    public function testPropertyShipmentStatus()
    {
    }

    /**
     * Test attribute "return_to"
     */
    public function testPropertyReturnTo()
    {
    }

    /**
     * Test attribute "confirmation"
     */
    public function testPropertyConfirmation()
    {
    }

    /**
     * Test attribute "customs"
     */
    public function testPropertyCustoms()
    {
    }

    /**
     * Test attribute "advanced_options"
     */
    public function testPropertyAdvancedOptions()
    {
    }

    /**
     * Test attribute "insurance_provider"
     */
    public function testPropertyInsuranceProvider()
    {
    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {
    }

    /**
     * Test attribute "packages"
     */
    public function testPropertyPackages()
    {
    }

    /**
     * Test attribute "total_weight"
     */
    public function testPropertyTotalWeight()
    {
    }

    /**
     * Test attribute "rate_response"
     */
    public function testPropertyRateResponse()
    {
    }

    /**
     * Test attribute "carrier_id"
     */
    public function testPropertyCarrierId()
    {
    }

    /**
     * Test attribute "service_code"
     */
    public function testPropertyServiceCode()
    {
    }

    /**
     * Test attribute "external_order_id"
     */
    public function testPropertyExternalOrderId()
    {
    }

    /**
     * Test attribute "items"
     */
    public function testPropertyItems()
    {
    }

    /**
     * Test attribute "external_shipment_id"
     */
    public function testPropertyExternalShipmentId()
    {
    }

    /**
     * Test attribute "ship_to"
     */
    public function testPropertyShipTo()
    {
    }

    /**
     * Test attribute "ship_from"
     */
    public function testPropertyShipFrom()
    {
    }

    /**
     * Test attribute "warehouse_id"
     */
    public function testPropertyWarehouseId()
    {
    }

    /**
     * Test attribute "origin_type"
     */
    public function testPropertyOriginType()
    {
    }

    /**
     * Test attribute "order_source_code"
     */
    public function testPropertyOrderSourceCode()
    {
    }
}
