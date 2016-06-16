<?php echo $this->Html->css('IndexDisplayOfertas'); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php foreach ($tblCategorias as $tblCategoria): ?>
        <li><?php echo $tblCategoria->nombre ?></li>
        <?php endforeach; ?>
    </ul>
</nav>
<div class="tblOfertas index large-9 medium-8 columns content">
    <div class="row">
        <?php foreach ($tblOfertas as $tblOferta): ?>
            <div class="small-12 medium-4 columns">
                <div class="cuadroOfertas">
                    <h3>
                        <?= $tblOferta->nombre ?>
                    </h3>
                    <img src=<?= $tblOferta->nombre_imagen ?> alt="">
                    <?php debug($tblOferta->nombre_imagen); ?>
                    <p>
                        <?= $tblOferta->descripcion ?>
                    </p>
                    <h5>
                        <?= $tblOferta->fecha_fin?>
                    </h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>
</div>