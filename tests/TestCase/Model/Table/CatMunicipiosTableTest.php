<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatMunicipiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatMunicipiosTable Test Case
 */
class CatMunicipiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatMunicipiosTable
     */
    protected $CatMunicipios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatMunicipios',
        'app.CatEstados',
        'app.CatLicitaciones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CatMunicipios') ? [] : ['className' => CatMunicipiosTable::class];
        $this->CatMunicipios = $this->getTableLocator()->get('CatMunicipios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatMunicipios);

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
