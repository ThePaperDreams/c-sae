<?php 
$formulario = new CBForm(['id' => 'form-profesiones']);
$formulario->abrir();
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        Información de la profesión
    </div>
    <div class="panel-body">
        <?php echo $formulario->campoTexto($modelo, 'nombre', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
        <?php echo $formulario->campoTexto($modelo, 'descripcion', ['label' => true, 'group' => true]) ?>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-3">
                <?php echo CHtml::link(CBoot::fa('undo').' Cancelar', ['profesion/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
            </div>
            <div class="col-sm-3">
                <?php echo CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
            </div>
        </div>        
    </div>
</div>


<?php $formulario->cerrar(); ?>