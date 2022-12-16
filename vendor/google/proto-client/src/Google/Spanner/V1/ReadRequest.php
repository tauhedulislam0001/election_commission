<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Read][google.spanner.v1.Spanner.Read] and
 * [StreamingRead][google.spanner.v1.Spanner.StreamingRead].
 *
 * Generated from protobuf message <code>google.spanner.v1.ReadRequest</code>
 */
class ReadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session in which the read should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    private $transaction = null;
    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3;</code>
     */
    private $table = '';
    /**
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     */
    private $index = '';
    /**
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
     */
    private $columns;
    /**
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6;</code>
     */
    private $key_set = null;
    /**
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     */
    private $limit = 0;
    /**
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 9;</code>
     */
    private $resume_token = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * Required. The session in which the read should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session in which the read should be performed.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @return \Google\Spanner\V1\TransactionSelector
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @param \Google\Spanner\V1\TransactionSelector $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\TransactionSelector::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3;</code>
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
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;

        return $this;
    }

    /**
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
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
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6;</code>
     * @return \Google\Spanner\V1\KeySet
     */
    public function getKeySet()
    {
        return $this->key_set;
    }

    /**
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6;</code>
     * @param \Google\Spanner\V1\KeySet $var
     * @return $this
     */
    public function setKeySet($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\KeySet::class);
        $this->key_set = $var;

        return $this;
    }

    /**
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 9;</code>
     * @return string
     */
    public function getResumeToken()
    {
        return $this->resume_token;
    }

    /**
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     *
     * Generated from protobuf field <code>bytes resume_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setResumeToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->resume_token = $var;

        return $this;
    }

}

