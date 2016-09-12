<?php 
$formulario = new CBForm(['id' => 'form-enfermedades']);
$formulario->abrir();
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        Información de la enfermedad
    </div>
    <div class="panel-body">
        <div class="row">    
            <div class="col-sm-6">
                <?php echo $formulario->campoTexto($modelo, 'nombre', ['label' => true, 'group' => true, 'autofocus' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?php echo $formulario->lista($modelo, 'gurpo_id', $grupos, ['label' => true, 'group' => true, 'data-s2' => true]) ?>        
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $formulario->areaTexto($modelo, 'descripcion', ['label' => true, 'group' => true]) ?>        
            </div>
        </div>        
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-3">
                <?php echo CHtml::link(CBoot::fa('undo').' Cancelar', ['enfermedad/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
            </div>
            <div class="col-sm-3">
                <?php echo CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
            </div>
        </div>        
    </div>
</div>


<?php $formulario->cerrar(); ?>