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
use ICanBoogie\ActiveRecord\Model;
use ICanBoogie\Binding\PrototypedBindings;
use ICanBoogie\Facets\CriterionList;
use ICanBoogie\Facets\Fetcher;
use ICanBoogie\Facets\Fetcher\BasicFetcher;
use ICanBoogie\Facets\RecordCollection;

class Hooks
{
	/**
	 * Synthesizes the `activerecord_facets` config from `activerecord` fragments.
	 *
	 * @param array $fragments
	 *
	 * @return array
	 */
	static public function synthesize_config(array $fragments): array
	{
		$facets = [];

		foreach ($fragments as $fragment)
		{
			if (empty($fragment['facets']))
			{
				continue;
			}

			foreach ($fragment['facets'] as $model_id => $criteria)
			{
				if (empty($facets[$model_id]))
				{
					$facets[$model_id] = $criteria;

					continue;
				}

				$facets[$model_id] = \array_merge($facets[$model_id], $criteria);
			}
		}

		return $facets;
	}

	/**
	 * Returns the criteria associated with the specified model.
	 *
	 * The criteria include the criteria of the parent models.
	 *
	 * @param Model|PrototypedBindings $model
	 *
	 * @return array
	 */
	static public function criteria_from(Model $model): array
	{
		$criteria_list = [];
		$facets = $model->app->configs['activerecord_facets'];

		$m = $model;

		while ($m)
		{
			$id = $m->id;

			if (!empty($facets[$id]))
			{
				$criteria_list[] = $facets[$id];
			}

			$m = $m->parent_model;
		}

		if (!$criteria_list)
		{
			return [];
		}

		return \array_merge(...\array_reverse($criteria_list));
	}

	/**
	 * Returns the {@link CriterionList} instance associated with the specified model.
	 *
	 * @param Model|ModelBindings $model
	 *
	 * @return CriterionList
	 */
	static public function criterion_list_from(Model $model): CriterionList
	{
		static $instances = [];

		$model_id = $model->id;

		if (isset($instances[$model_id]))
		{
			return $instances[$model_id];
		}

		$criteria = $model->criteria;
		$instances[$model_id] = $criterion_list = new CriterionList($criteria);

		return $criterion_list;
	}

	/**
	 * Fetches the records matching the specified conditions.
	 *
	 * A {@link BasicFetcher} instance is used to fetch the records.
	 *
	 * @param Model $model
	 * @param array $conditions
	 *
	 * @return RecordCollection|null
	 */
	static public function fetch_records(Model $model, array $conditions): ?RecordCollection
	{
		$fetcher = new BasicFetcher($model);
		$records = $fetcher($conditions);

		if (!$records)
		{
			return null;
		}

		new RecordCollection\AlterEvent($records);

		return $records;
	}

	/**
	 * Fetches a record matching the specified conditions.
	 *
	 * The model's {@link fetch_records} prototype method is used to retrieve the record.
	 *
	 * @param Model|ModelBindings $model
	 * @param array $conditions
	 * @param Fetcher $fetcher If the parameter `fetcher` is present, the {@link Fetcher}
	 * instance used to fetch the record is stored inside.
	 *
	 * @return ActiveRecord|null
	 */
	static public function fetch_record(Model $model, array $conditions, &$fetcher = null): ?ActiveRecord
	{
		$records = $model->fetch_records($conditions + [ 'limit' => 1 ]);

		if (!$records)
		{
			return null;
		}

		$fetcher = $records->fetcher;

		return $records->one;
	}
}
