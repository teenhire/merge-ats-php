<?php
/**
 * SyncStatusStatusEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge ATS API
 *
 * The unified API for building rich integrations with multiple Applicant Tracking System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeATSClient\Model;
use \MergeATSClient\ObjectSerializer;

/**
 * SyncStatusStatusEnum Class Doc Comment
 *
 * @category Class
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SyncStatusStatusEnum
{
    /**
     * Possible values of this enum
     */
    const SYNCING = 'SYNCING';
    const DONE = 'DONE';
    const FAILED = 'FAILED';
    const DISABLED = 'DISABLED';
    const PAUSED = 'PAUSED';
    const PARTIALLY_SYNCED = 'PARTIALLY_SYNCED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYNCING,
            self::DONE,
            self::FAILED,
            self::DISABLED,
            self::PAUSED,
            self::PARTIALLY_SYNCED,
        ];
    }
}


