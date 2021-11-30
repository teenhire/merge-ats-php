<?php
/**
 * AccountIntegration
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

use \ArrayAccess;
use \MergeATSClient\ObjectSerializer;

/**
 * AccountIntegration Class Doc Comment
 *
 * @category Class
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountIntegration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountIntegration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'categories' => 'string[]',
        'image' => 'string',
        'square_image' => 'string',
        'color' => 'string',
        'slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'categories' => null,
        'image' => 'uri',
        'square_image' => 'uri',
        'color' => null,
        'slug' => null
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
        'name' => 'name',
        'categories' => 'categories',
        'image' => 'image',
        'square_image' => 'square_image',
        'color' => 'color',
        'slug' => 'slug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'categories' => 'setCategories',
        'image' => 'setImage',
        'square_image' => 'setSquareImage',
        'color' => 'setColor',
        'slug' => 'setSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'categories' => 'getCategories',
        'image' => 'getImage',
        'square_image' => 'getSquareImage',
        'color' => 'getColor',
        'slug' => 'getSlug'
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

    const CATEGORIES_HRIS = 'hris';
    const CATEGORIES_ATS = 'ats';
    const CATEGORIES_ACCOUNTING = 'accounting';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoriesAllowableValues()
    {
        return [
            self::CATEGORIES_HRIS,
            self::CATEGORIES_ATS,
            self::CATEGORIES_ACCOUNTING,
        ];
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['square_image'] = $data['square_image'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 18)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['color']) && !preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $this->container['color'])) {
            $invalidProperties[] = "invalid value for 'color', must be conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Company name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Category or categories this integration belongs to. Multiple categories should be comma separated.<br/><br>Example: For [ats, hris], enter <i>ats,hris</i>
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $allowedValues = $this->getCategoriesAllowableValues();
        if (!is_null($categories) && array_diff($categories, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'categories', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image Company logo in rectangular shape. <b>Upload an image with a clear background.</b>
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets square_image
     *
     * @return string|null
     */
    public function getSquareImage()
    {
        return $this->container['square_image'];
    }

    /**
     * Sets square_image
     *
     * @param string|null $square_image Company logo in square shape. <b>Upload an image with a white background.</b>
     *
     * @return self
     */
    public function setSquareImage($square_image)
    {
        $this->container['square_image'] = $square_image;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color The color of this integration used for buttons and text throughout the app and landing pages. <b>Choose a darker, saturated color.</b>
     *
     * @return self
     */
    public function setColor($color)
    {
        if (!is_null($color) && (mb_strlen($color) > 18)) {
            throw new \InvalidArgumentException('invalid length for $color when calling AccountIntegration., must be smaller than or equal to 18.');
        }
        if (!is_null($color) && (!preg_match("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/", $color))) {
            throw new \InvalidArgumentException("invalid value for $color when calling AccountIntegration., must conform to the pattern /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.");
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

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


