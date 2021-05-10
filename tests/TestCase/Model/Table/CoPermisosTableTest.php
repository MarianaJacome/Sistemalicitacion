<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoPermisosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoPermisosTable Test Case
 */
class CoPermisosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoPermisosTable
     */
    protected $CoPermisos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CoPermisos',
        'app.CoGrupos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CoPermisos') ? [] : ['className' => CoPermisosTable::class];
        $this->CoPermisos = $this->getTableLocator()->get('CoPermisos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CoPermisos);

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
