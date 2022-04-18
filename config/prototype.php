<?php

namespace ICanBoogie\Binding\Facets;

use ICanBoogie\ActiveRecord\Model;

return [

	Model::class . '::get_criteria' => [ Hooks::class, 'criteria_from' ],
	Model::class . '::get_criterion_list' => [ Hooks::class, 'criterion_list_from' ],
	Model::class . '::fetch_records' => [ Hooks::class, 'fetch_records' ],
	Model::class . '::fetch_record' => [ Hooks::class, 'fetch_record' ]

];
