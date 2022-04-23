<?php

namespace ICanBoogie\Binding\Facets;

use ICanBoogie\ActiveRecord\Model;
use ICanBoogie\Binding\Prototype\ConfigBuilder;

return fn(ConfigBuilder $config) => $config
    ->bind(Model::class, 'get_criteria', [ Hooks::class, 'criteria_from' ])
    ->bind(Model::class, 'get_criterion_list', [ Hooks::class, 'criterion_list_from' ])
    ->bind(Model::class, 'fetch_records', [ Hooks::class, 'fetch_records' ])
    ->bind(Model::class, 'fetch_record', [ Hooks::class, 'fetch_record' ]);
