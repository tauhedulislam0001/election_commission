<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/mutation.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Arguments to [insert][google.spanner.v1.Mutation.insert], [update][google.spanner.v1.Mutation.update], [insert_or_update][google.spanner.v1.Mutation.insert_or_update], and
 * [replace][google.spanner.v1.Mutation.replace] operations.
 *
 * Generated from protobuf message <code>google.spanner.v1.Mutation.Write</code>
 */
class Mutation_Write extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The table whose rows will be written.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * The names of the columns in [table][google.spanner.v1.Mutation.Write.table] to be written.
     * The list of columns must contain enough columns to allow
     * Cloud Spanner to derive values for all primary key columns in the
     * row(s) to be modified.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     */
    private $columns;
    /**
     * The values to be written. `values` can contain more than one
     * list of values. If it does, then multiple rows are written, one
     * for each entry in `values`. Each list in `values` must have
     * exactly as many entries as there are entries in [columns][google.spanner.v1.Mutation.Write.columns]
     * above. Sending multiple lists is equivalent to sending multiple
     * `Mutation`s, each containing one `values` entry and repeating
     * [table][google.spanner.v1.Mutation.Write.table] and [columns][google.spanner.v1.Mutation.Write.columns]. Individual values in each list are
     * encoded as described [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue values = 3;</code>
     */
    private $values;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        parent::__construct();
    }

    /**
     * Required. The table whose rows will be written.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The table whose rows will be written.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * The names of the columns in [table][google.spanner.v1.Mutation.Write.table] to be written.
     * The list of columns must contain enough columns to allow
     * Cloud Spanner to derive values for all primary key columns in the
     * row(s) to be modified.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * The names of the columns in [table][google.spanner.v1.Mutation.Write.table] to be written.
     * The list of columns must contain enough columns to allow
     * Cloud Spanner to derive values for all primary key columns in the
     * row(s) to be modified.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $arr;

        return $this;
    }

    /**
     * The values to be written. `values` can contain more than one
     * list of values. If it does, then multiple rows are written, one
     * for each entry in `values`. Each list in `values` must have
     * exactly as many entries as there are entries in [columns][google.spanner.v1.Mutation.Write.columns]
     * above. Sending multiple lists is equivalent to sending multiple
     * `Mutation`s, each containing one `values` entry and repeating
     * [table][google.spanner.v1.Mutation.Write.table] and [columns][google.spanner.v1.Mutation.Write.columns]. Individual values in each list are
     * encoded as described [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue values = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The values to be written. `values` can contain more than one
     * list of values. If it does, then multiple rows are written, one
     * for each entry in `values`. Each list in `values` must have
     * exactly as many entries as there are entries in [columns][google.spanner.v1.Mutation.Write.columns]
     * above. Sending multiple lists is equivalent to sending multiple
     * `Mutation`s, each containing one `values` entry and repeating
     * [table][google.spanner.v1.Mutation.Write.table] and [columns][google.spanner.v1.Mutation.Write.columns]. Individual values in each list are
     * encoded as described [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue values = 3;</code>
     * @param \Google\Protobuf\ListValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->values = $arr;

        return $this;
    }

}

