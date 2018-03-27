<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://website.orange-management.de
 */
declare(strict_types=1);

namespace Modules\Billing\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Task type enum.
 *
 * @package    Tasks
 * @license    OMS License 1.0
 * @link       http://website.orange-management.de
 * @since      1.0.0
 */
abstract class InvoiceType extends Enum
{
    public const BILL               = 1;
    public const DELIVERY_NOTE      = 2;
    public const CREDIT_NOTE        = 3;
    public const DEBIT_NOTE         = 4;
    public const OFFER              = 5;
    public const ORDER_CONFIRMATION = 6;
}
