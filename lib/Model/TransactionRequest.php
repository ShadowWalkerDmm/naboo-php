<?php
/**
 * TransactionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NabooApi V1
 *
 * Here you have the first version of the naboo api to create checkout automatically
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TransactionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method_of_payment' => '\OpenAPI\Client\Model\Wallet[]',
        'products' => '\OpenAPI\Client\Model\ProductModel[]',
        'success_url' => 'string',
        'error_url' => 'string',
        'is_escrow' => 'bool',
        'is_merchant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method_of_payment' => null,
        'products' => null,
        'success_url' => null,
        'error_url' => null,
        'is_escrow' => null,
        'is_merchant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'method_of_payment' => false,
        'products' => true,
        'success_url' => true,
        'error_url' => true,
        'is_escrow' => false,
        'is_merchant' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'method_of_payment' => 'method_of_payment',
        'products' => 'products',
        'success_url' => 'success_url',
        'error_url' => 'error_url',
        'is_escrow' => 'is_escrow',
        'is_merchant' => 'is_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method_of_payment' => 'setMethodOfPayment',
        'products' => 'setProducts',
        'success_url' => 'setSuccessUrl',
        'error_url' => 'setErrorUrl',
        'is_escrow' => 'setIsEscrow',
        'is_merchant' => 'setIsMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method_of_payment' => 'getMethodOfPayment',
        'products' => 'getProducts',
        'success_url' => 'getSuccessUrl',
        'error_url' => 'getErrorUrl',
        'is_escrow' => 'getIsEscrow',
        'is_merchant' => 'getIsMerchant'
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
        $this->setIfExists('method_of_payment', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('error_url', $data ?? [], null);
        $this->setIfExists('is_escrow', $data ?? [], false);
        $this->setIfExists('is_merchant', $data ?? [], false);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method_of_payment'] === null) {
            $invalidProperties[] = "'method_of_payment' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
        }
        if (!is_null($this->container['success_url']) && !preg_match("/^https:\/\/[^\\s]+$/", $this->container['success_url'])) {
            $invalidProperties[] = "invalid value for 'success_url', must be conform to the pattern /^https:\/\/[^\\s]+$/.";
        }

        if (!is_null($this->container['error_url']) && !preg_match("/^https:\/\/[^\\s]+$/", $this->container['error_url'])) {
            $invalidProperties[] = "invalid value for 'error_url', must be conform to the pattern /^https:\/\/[^\\s]+$/.";
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
     * Gets method_of_payment
     *
     * @return \OpenAPI\Client\Model\Wallet[]
     */
    public function getMethodOfPayment()
    {
        return $this->container['method_of_payment'];
    }

    /**
     * Sets method_of_payment
     *
     * @param \OpenAPI\Client\Model\Wallet[] $method_of_payment method_of_payment
     *
     * @return self
     */
    public function setMethodOfPayment($method_of_payment)
    {
        if (is_null($method_of_payment)) {
            throw new \InvalidArgumentException('non-nullable method_of_payment cannot be null');
        }
        $this->container['method_of_payment'] = $method_of_payment;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\ProductModel[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\ProductModel[] $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            array_push($this->openAPINullablesSetToNull, 'products');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('products', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url success_url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            array_push($this->openAPINullablesSetToNull, 'success_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('success_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($success_url) && (!preg_match("/^https:\/\/[^\\s]+$/", ObjectSerializer::toString($success_url)))) {
            throw new \InvalidArgumentException("invalid value for \$success_url when calling TransactionRequest., must conform to the pattern /^https:\/\/[^\\s]+$/.");
        }

        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets error_url
     *
     * @return string|null
     */
    public function getErrorUrl()
    {
        return $this->container['error_url'];
    }

    /**
     * Sets error_url
     *
     * @param string|null $error_url error_url
     *
     * @return self
     */
    public function setErrorUrl($error_url)
    {
        if (is_null($error_url)) {
            array_push($this->openAPINullablesSetToNull, 'error_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($error_url) && (!preg_match("/^https:\/\/[^\\s]+$/", ObjectSerializer::toString($error_url)))) {
            throw new \InvalidArgumentException("invalid value for \$error_url when calling TransactionRequest., must conform to the pattern /^https:\/\/[^\\s]+$/.");
        }

        $this->container['error_url'] = $error_url;

        return $this;
    }

    /**
     * Gets is_escrow
     *
     * @return bool|null
     */
    public function getIsEscrow()
    {
        return $this->container['is_escrow'];
    }

    /**
     * Sets is_escrow
     *
     * @param bool|null $is_escrow is_escrow
     *
     * @return self
     */
    public function setIsEscrow($is_escrow)
    {
        if (is_null($is_escrow)) {
            throw new \InvalidArgumentException('non-nullable is_escrow cannot be null');
        }
        $this->container['is_escrow'] = $is_escrow;

        return $this;
    }

    /**
     * Gets is_merchant
     *
     * @return bool|null
     */
    public function getIsMerchant()
    {
        return $this->container['is_merchant'];
    }

    /**
     * Sets is_merchant
     *
     * @param bool|null $is_merchant is_merchant
     *
     * @return self
     */
    public function setIsMerchant($is_merchant)
    {
        if (is_null($is_merchant)) {
            throw new \InvalidArgumentException('non-nullable is_merchant cannot be null');
        }
        $this->container['is_merchant'] = $is_merchant;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


