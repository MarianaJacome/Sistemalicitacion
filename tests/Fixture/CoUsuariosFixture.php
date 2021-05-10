<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoUsuariosFixture
 */
class CoUsuariosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'co_grupo_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'paterno' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'materno' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'login' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'ultimo_acceso' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'co_grupo_id' => ['type' => 'index', 'columns' => ['co_grupo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'co_usuarios_ibfk_1' => ['type' => 'foreign', 'columns' => ['co_grupo_id'], 'references' => ['co_grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => '4d2723a1-4f2e-4fe1-b109-64bb7c6c751b',
                'co_grupo_id' => 'a0c619d4-50ab-4a5f-bf55-2b5d8e444b6d',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'paterno' => 'Lorem ipsum dolor sit amet',
                'materno' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'login' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'ultimo_acceso' => '2021-05-06 22:05:53',
                'created' => '2021-05-06 22:05:53',
                'modified' => '2021-05-06 22:05:53',
            ],
        ];
        parent::init();
    }
}
