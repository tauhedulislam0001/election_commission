<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results of de-identifying a list of items.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.DeidentifyContentResponse</code>
 */
class DeidentifyContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 1;</code>
     */
    private $items;
    /**
     * A review of the transformations that took place for each item.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.DeidentificationSummary summaries = 2;</code>
     */
    private $summaries;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\ContentItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\ContentItem::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * A review of the transformations that took place for each item.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.DeidentificationSummary summaries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSummaries()
    {
        return $this->summaries;
    }

    /**
     * A review of the transformations that took place for each item.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.DeidentificationSummary summaries = 2;</code>
     * @param \Google\Privacy\Dlp\V2beta1\DeidentificationSummary[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\DeidentificationSummary::class);
        $this->summaries = $arr;

        return $this;
    }

}

