<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoGruposTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoGruposTable Test Case
 */
class CoGruposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoGruposTable
     */
    protected $CoGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CoGrupos',
        'app.CoUsuarios',
        'app.CoMenus',
        'app.CoPermisos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CoGrupos') ? [] : ['className' => CoGruposTable::class];
        $this->CoGrupos = $this->getTableLocator()->get('CoGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CoGrupos);

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
