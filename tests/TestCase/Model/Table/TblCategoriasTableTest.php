<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblCategoriasTable Test Case
 */
class TblCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblCategoriasTable
     */
    public $TblCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_categorias',
        'app.tbl_ofertas',
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
        $config = TableRegistry::exists('TblCategorias') ? [] : ['className' => 'App\Model\Table\TblCategoriasTable'];
        $this->TblCategorias = TableRegistry::get('TblCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblCategorias);

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
}
