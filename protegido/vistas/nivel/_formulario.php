<?php 
$formulario = new CBForm(['id' => 'form-nivel']);
$formulario->abrir();
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        Información del nivel
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <?php echo $formulario->campoTexto($modelo, 'nivel', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?php echo $formulario->inputAddon($modelo, 'porcentaje', 'number', ['label' => true, 'group' => true], ['pos' => '%']) ?>
            </div>
        </div>
        <?php echo $formulario->areaTexto($modelo, 'descripcion', ['label' => true, 'group' => true]) ?>    
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-3">
                <?php echo CHtml::link(CBoot::fa('undo').' Cancelar', ['nivel/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
            </div>
            <div class="col-sm-3">
                <?php echo CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
            </div>
        </div>        
    </div>
</div>


<?php $formulario->cerrar(); ?>