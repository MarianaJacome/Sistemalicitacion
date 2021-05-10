<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatEstadosFixture
 */
class CatEstadosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'clave' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'abrev' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'b4dff049-2ebb-45f8-8ac4-b871294f5e96',
                'name' => 'Lorem ipsum dolor sit amet',
                'clave' => 'Lo',
                'abrev' => 'Lorem ipsum d',
                'activo' => 1,
                'created' => '2021-05-06 22:05:17',
                'modified' => '2021-05-06 22:05:17',
            ],
        ];
        parent::init();
    }
}
