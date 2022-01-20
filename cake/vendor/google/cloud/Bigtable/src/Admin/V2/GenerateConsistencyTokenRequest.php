<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.GenerateConsistencyToken][google.bigtable.admin.v2.BigtableTableAdmin.GenerateConsistencyToken]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.GenerateConsistencyTokenRequest</code>
 */
class GenerateConsistencyTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the Table for which to create a consistency token.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the Table for which to create a consistency token.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the Table for which to create a consistency token.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the Table for which to create a consistency token.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

