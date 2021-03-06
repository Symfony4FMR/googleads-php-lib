<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getOrdersByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\OrderPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\OrderPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\OrderPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\OrderPage $rval
     * @return \Google\AdsApi\Dfp\v201705\getOrdersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
