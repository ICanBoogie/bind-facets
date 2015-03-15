<?php

namespace ICanBoogie\Binding\Facets;

use ICanBoogie\ActiveRecord\Model;

$hooks = __NAMESPACE__ . '\Hooks::';

return [

	'prototypes' => [

		Model::class . '::get_criteria' => $hooks . 'criteria_from',
		Model::class . '::get_criterion_list' => $hooks . 'criterion_list_from',
		Model::class . '::fetch_records' => $hooks . 'fetch_records',
		Model::class . '::fetch_record' => $hooks . 'fetch_record'

	]

];
