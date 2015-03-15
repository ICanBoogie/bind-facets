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

class HooksTest extends \PHPUnit_Framework_TestCase
{
	public function test_synthesize_config()
	{
		$config = Hooks::synthesize_config([

			uniqid() => [

				'facets' => [

					'nodes' => [

						'nid' => 'App\Modules\Nodes\NidCriterion',
						'title' => 'App\Modules\Nodes\TitleCriterion'

					],

					'articles' => [

						'date' => 'App\Modules\Articles\DateCriterion'

					]

				],

				uniqid() => uniqid()

			],

			uniqid() => [

			],

			uniqid() => [

				uniqid() => uniqid(),

				'facets' => [

					'nodes' => [

						'slug' => 'App\Modules\Nodes\SlugCriterion'

					],

					'articles' => [

						'is_online' => 'App\Modules\Articles\IsOnlineCriterion'

					],

					'comments' => [

						'author' => 'App\Modules\Comments\AuthorCriterion'

					]

				],

				uniqid() => uniqid()

			]

		]);

		$this->assertSame([

			'nodes' => [

				'nid' => 'App\Modules\Nodes\NidCriterion',
				'title' => 'App\Modules\Nodes\TitleCriterion',
				'slug' => 'App\Modules\Nodes\SlugCriterion'

			],

			'articles' => [

				'date' => 'App\Modules\Articles\DateCriterion',
				'is_online' => 'App\Modules\Articles\IsOnlineCriterion'

			],

			'comments' => [

				'author' => 'App\Modules\Comments\AuthorCriterion'

			]

		], $config);
	}
}
