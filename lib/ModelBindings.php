<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie\Binding\Facets;

use ICanBoogie\ActiveRecord;
use ICanBoogie\Facets\CriterionList;
use ICanBoogie\Facets\Fetcher;
use ICanBoogie\Facets\RecordCollection;

/**
 * {@link ActiveRecord\Model} prototype bindings.
 *
 * @property-read array $criteria
 * @property-read CriterionList $criterion_list
 */
trait ModelBindings
{
    /**
     * Fetches the records matching the specified conditions.
     *
     * A {@link Fetcher} instance is used to fetch the records.
     *
     * @param array $conditions
     *
     * @return RecordCollection
     */
    public function fetch_records(array $conditions)
    {
        return parent::fetch_records($conditions);
    }

    /**
     * Fetches a record matching the specified conditions.
     *
     * The model's {@link fetch_records} prototype method is used to retrieve the record.
     *
     * @param array<string, mixed> $conditions
     * @param Fetcher|null $fetcher If the parameter `fetcher` is present, the {@link Fetcher}
     * instance created to fetch the record is stored inside.
     *
     * @return ActiveRecord|null
     */
    public function fetch_record(array $conditions, Fetcher &$fetcher = null)
    {
        return parent::fetch_record($conditions, $fetcher);
    }
}
