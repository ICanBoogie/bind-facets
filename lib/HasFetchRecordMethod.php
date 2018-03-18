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

use ICanBoogie\Facets\Fetcher;
use ICanBoogie\Facets\RecordCollection;

/**
 * Indicates that an instance has a `fetch_record` method, whether it is a class method or a
 * prototype one.
 *
 * @see \ICanBoogie\Binding\Facets\Hooks::fetch_record()
 */
interface HasFetchRecordMethod
{
	/**
	 * @param array $conditions
	 * @param Fetcher $fetcher If the parameter `fetcher` is present, the {@link Fetcher}
	 * instance used to fetch the record is stored inside.
	 *
	 * @return RecordCollection
	 */
	public function fetch_record(array $conditions, &$fetcher = null): RecordCollection;
}
