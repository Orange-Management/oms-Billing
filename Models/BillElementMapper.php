<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\Billing\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Billing\Models;

use phpOMS\DataStorage\Database\DataMapperAbstract;

/**
 * Mapper class.
 *
 * @package Modules\Billing\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class BillElementMapper extends DataMapperAbstract
{
    /**
     * Columns.
     *
     * @var array<string, array{name:string, type:string, internal:string, autocomplete?:bool, readonly?:bool, writeonly?:bool, annotations?:array}>
     * @since 1.0.0
     */
    protected static array $columns = [
        'billing_bill_element_id'                                  => ['name' => 'billing_bill_element_id',      'type' => 'int',    'internal' => 'id'],
        'billing_bill_element_order'                               => ['name' => 'billing_bill_element_order',      'type' => 'int',    'internal' => 'order'],
        'billing_bill_element_item'                                => ['name' => 'billing_bill_element_item',      'type' => 'int',    'internal' => 'item'],
        'billing_bill_element_item_number'                         => ['name' => 'billing_bill_element_item_number',      'type' => 'string',    'internal' => 'itemNumber'],
        'billing_bill_element_item_name'                           => ['name' => 'billing_bill_element_item_name',      'type' => 'string',    'internal' => 'itemName'],
        'billing_bill_element_item_desc'                           => ['name' => 'billing_bill_element_item_desc',      'type' => 'string',    'internal' => 'itemDescription'],
        'billing_bill_element_quantity'                            => ['name' => 'billing_bill_element_quantity',      'type' => 'int',    'internal' => 'quantity'],
        'billing_bill_element_single_salesprice_net'               => ['name' => 'billing_bill_element_single_salesprice_net',      'type' => 'Serializable',    'internal' => 'singleSalesPriceNet'],
        'billing_bill_element_single_purchaseprice_net'            => ['name' => 'billing_bill_element_single_purchaseprice_net',      'type' => 'Serializable',    'internal' => 'singlePurchasePriceNet'],
        'billing_bill_element_total_salesprice_net'                => ['name' => 'billing_bill_element_total_salesprice_net',      'type' => 'Serializable',    'internal' => 'totalSalesPriceNet'],
        'billing_bill_element_total_purchaseprice_net'             => ['name' => 'billing_bill_element_total_purchaseprice_net',      'type' => 'Serializable',    'internal' => 'totalPurchasePriceNet'],
        'billing_bill_element_bill'                                => ['name' => 'billing_bill_element_bill',      'type' => 'int',    'internal' => 'bill'],
    ];

    /**
     * Belongs to.
     *
     * @var array<string, array{mapper:string, external:string}>
     * @since 1.0.0
     */
    protected static array $belongsTo = [
        'bill' => [
            'mapper'     => BillMapper::class,
            'external'   => 'billing_bill_element_bill',
        ],
    ];

    /**
     * Primary field name.
     *
     * @var string
     * @since 1.0.0
     */
    public static string $primaryField = 'billing_bill_element_id';

    /**
     * Primary table.
     *
     * @var string
     * @since 1.0.0
     */
    public static string $table = 'billing_bill_element';
}
