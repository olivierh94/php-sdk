<?php
namespace ShoppingFeed\Sdk\Api\Order;

use ShoppingFeed\Sdk\Api\Order as ApiOrder;
use ShoppingFeed\Sdk\Order\OrderOperation;
use ShoppingFeed\Sdk\Resource\AbstractDomainResource;

/**
 * @method ApiOrder\OrderResource[] getIterator()
 * @method ApiOrder\OrderResource[] getAll($page = 1, $limit = 100)
 */
class OrderDomain extends AbstractDomainResource
{
    /**
     * @var string
     */
    protected $resourceClass = ApiOrder\OrderResource::class;

    /**
     * Init new order operation queue
     *
     * @return OrderOperation
     */
    public function newOperations()
    {
        return new OrderOperation();
    }
}
