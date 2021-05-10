<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatLicitacionesFixture
 */
class CatLicitacionesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'convocatoria' => ['type' => 'string', 'length' => 36, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'numero_licitacion' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'lugar' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'cat_municipio_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'monto' => ['type' => 'decimal', 'length' => 10, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'obra' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'cat_municipio_id' => ['type' => 'index', 'columns' => ['cat_municipio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cat_licitaciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['cat_municipio_id'], 'references' => ['cat_municipios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => '3752cdb9-2cf6-4230-89b1-46211a27282d',
                'convocatoria' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'numero_licitacion' => 'Lorem ipsum dolor sit amet',
                'lugar' => 'Lorem ipsum dolor sit amet',
                'cat_municipio_id' => 'e330df38-c1de-42fe-8d0b-19feaaa0cd53',
                'monto' => 1.5,
                'obra' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2021-05-07 19:42:48',
                'modified' => '2021-05-07 19:42:48',
            ],
        ];
        parent::init();
    }
}
