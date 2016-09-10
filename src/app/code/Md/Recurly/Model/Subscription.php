<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Md\Recurly\Model;



/**
 * Pay In Store payment method model
 */
class Subscription extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    //protected $_code = 'subscription';

	const CODE = 'subscription';

    protected $_code = self::CODE;

  

}
