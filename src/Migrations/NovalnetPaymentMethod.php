<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License
 *
 * @author Novalnet <technic@novalnet.de>
 * @copyright Novalnet
 * @license GNU General Public License
 *
 * Script : CreatePaymentMethod.php
 *
 */

namespace Novalnet\Migrations;

use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Novalnet\Helper\PaymentHelper;
use Plenty\Plugin\Log\Loggable;
/**
 * Migration to create payment mehtods
 *
 * Class CreatePaymentMethod
 *
 * @package Novalnet\Migrations
 */
class NovalnetPaymentMethod
{
	
	use Loggable;
    /**
     * @var PaymentMethodRepositoryContract
     */
    private $paymentMethodRepository;

    /**
     * @var PaymentHelper
     */
    private $paymentHelper;

    /**
     * CreatePaymentMethod constructor.
     *
     * @param PaymentMethodRepositoryContract $paymentMethodRepository
     * @param PaymentHelper $paymentHelper
     */
    public function __construct(PaymentMethodRepositoryContract $paymentMethodRepository,
                                PaymentHelper $paymentHelper)
    {
		 $this->getLogger(__METHOD__)->error('migratoncallcons', 'migcallcons');
        $this->paymentMethodRepository = $paymentMethodRepository;
        $this->paymentHelper = $paymentHelper;
    }

    /**
     * Run on plugin build
     *
     * Create Method of Payment ID for Novalnet payment if they don't exist
     */
    public function run()
    {
        
            $paymentMethodData = ['pluginKey'  => 'plenty_novalnet',
                                  'paymentKey' => 'NOVALNET',
                                  'name'       => 'Novalnet'];
          $this->getLogger(__METHOD__)->error('migratoncall', $paymentMethodData);
                                  
            $this->paymentMethodRepository->NovalnetPaymentMethod($paymentMethodData);
       
    }
}
