<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSucursalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSucursalesTable Test Case
 */
class TblSucursalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSucursalesTable
     */
    public $TblSucursales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sucursales',
        'app.tbl_empresas',
        'app.tbl_ofertas',
        'app.tbl_categorias',
        'app.tbl_imageofertas',
        'app.tbl_ofertas_tbl_sucursales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TblSucursales') ? [] : ['className' => 'App\Model\Table\TblSucursalesTable'];
        $this->TblSucursales = TableRegistry::get('TblSucursales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSucursales);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
