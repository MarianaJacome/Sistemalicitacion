<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoUsuariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoUsuariosTable Test Case
 */
class CoUsuariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoUsuariosTable
     */
    protected $CoUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CoUsuarios',
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
        $config = $this->getTableLocator()->exists('CoUsuarios') ? [] : ['className' => CoUsuariosTable::class];
        $this->CoUsuarios = $this->getTableLocator()->get('CoUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CoUsuarios);

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
