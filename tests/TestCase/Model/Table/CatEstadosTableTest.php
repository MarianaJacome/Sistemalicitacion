<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatEstadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatEstadosTable Test Case
 */
class CatEstadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatEstadosTable
     */
    protected $CatEstados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatEstados',
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
        $config = $this->getTableLocator()->exists('CatEstados') ? [] : ['className' => CatEstadosTable::class];
        $this->CatEstados = $this->getTableLocator()->get('CatEstados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatEstados);

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
}
