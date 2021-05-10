<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoMenusFixture
 */
class CoMenusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'co_menus';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'co_menu_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'icon' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'posicion' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'destino' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'co_menu_id' => ['type' => 'index', 'columns' => ['co_menu_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'co_menus_ibfk_1' => ['type' => 'foreign', 'columns' => ['co_menu_id'], 'references' => ['co_menus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => '173edd15-d3c6-488d-a748-e808c5367aa3',
                'co_menu_id' => '0a0b5c50-e6dd-47f8-a1a6-d437571078d9',
                'icon' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'posicion' => 1,
                'destino' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2021-05-06 22:05:42',
                'modified' => '2021-05-06 22:05:42',
            ],
        ];
        parent::init();
    }
}
