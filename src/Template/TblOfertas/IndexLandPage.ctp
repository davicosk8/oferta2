<?php echo $this->Html->css('IndexDisplayOfertas'); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php foreach ($tblCategorias as $tblCategoria): ?>
        <li>
            <?php
            echo $this->html->link($tblCategoria->nombre,['controller'=>'TblOfertas','action'=>'verPorCategoria',$tblCategoria->id]);
            ?>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
<div class="tblOfertas index large-9 medium-8 columns content">
    <div class="row">
        <?php foreach ($tblOfertas as $tblOferta): ?>
        <div class="small-12 medium-4 columns">
            <a href="">
                <div class="cuadroOfertas">
                    <div class="esquinaEmpresa">
                        <?php echo $tblOferta->nombre ?>
                    </div>
                    <h3>
                    <?= $this->html->link($tblOferta->nombre,['controller'=>'TblOfertas','action'=>'view',$tblOferta->id]); ?>
                    </h3>
                    <?php
                        echo $this->html->link(
                            $this->html->image('/files/TblOfertas/imagen/'.$tblOferta->imagen),
                            ['controller'=>'TblOfertas','action'=>'view',$tblOferta->id],
                            ['escape' => false]
                        );
                    ?>   
                    <h5>
                    Hasta: <?= $tblOferta->fecha_fin?>
                    </h5>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>
</div>