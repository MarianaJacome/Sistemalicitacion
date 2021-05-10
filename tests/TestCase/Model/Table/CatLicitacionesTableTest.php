<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatLicitacionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatLicitacionesTable Test Case
 */
class CatLicitacionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatLicitacionesTable
     */
    protected $CatLicitaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatLicitaciones',
        'app.CatMunicipios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CatLicitaciones') ? [] : ['className' => CatLicitacionesTable::class];
        $this->CatLicitaciones = $this->getTableLocator()->get('CatLicitaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatLicitaciones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
