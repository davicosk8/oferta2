<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblImageofertasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblImageofertasTable Test Case
 */
class TblImageofertasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblImageofertasTable
     */
    public $TblImageofertas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_imageofertas',
        'app.tbl_ofertas',
        'app.tbl_categorias',
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
        $config = TableRegistry::exists('TblImageofertas') ? [] : ['className' => 'App\Model\Table\TblImageofertasTable'];
        $this->TblImageofertas = TableRegistry::get('TblImageofertas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblImageofertas);

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
