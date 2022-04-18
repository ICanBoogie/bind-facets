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

use ICanBoogie\Facets\RecordCollection;

/**
 * Indicates that an instance has a `fetch_records` method, whether it is a class method or a
 * prototype one.
 *
 * @see \ICanBoogie\Binding\Facets\Hooks::fetch_records()
 */
interface HasFetchRecordsMethod
{
    /**
     * @param array<string, mixed> $conditions
     */
    public function fetch_records(array $conditions): RecordCollection;
}
