<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblOfertasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblOfertasTable Test Case
 */
class TblOfertasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblOfertasTable
     */
    public $TblOfertas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_ofertas',
        'app.tbl_categorias',
        'app.tbl_imageofertas',
        'app.tbl_sucursales',
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
        $config = TableRegistry::exists('TblOfertas') ? [] : ['className' => 'App\Model\Table\TblOfertasTable'];
        $this->TblOfertas = TableRegistry::get('TblOfertas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblOfertas);

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
