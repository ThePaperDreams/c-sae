<?php 
$formulario = new CBForm(['id' => 'form-empleados']);
$formulario->abrir();
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        Información del empleado
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <?php echo $formulario->campoTexto($modelo, 'nombres', ['label' => true, 'group' => true, 'autofocus' => true]) ?>        
            </div>
            <div class="col-sm-6">
                <?php echo $formulario->campoTexto($modelo, 'apellidos', ['label' => true, 'group' => true]) ?>        
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">        
                <?php echo $formulario->campoTexto($modelo, 'cedula', ['label' => true, 'group' => true]) ?>        
            </div>
            <div class="col-sm-6">        
                <?php echo $formulario->campoTexto($modelo, 'salario', ['label' => true, 'group' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $formulario->campoTexto($modelo, 'direccion', ['label' => true, 'group' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">        
                <?php echo $formulario->lista($modelo, 'profesion_id', $profesiones, ['label' => true, 'group' => true, 'data-s2' => true]) ?>
            </div>
            <div class="col-sm-6">    
                <?php echo $formulario->lista($modelo, 'cargo_id', $cargos, ['label' => true, 'group' => true, 'data-s2' => true]) ?>
            </div>
        </div>  
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-3">
                <?php echo CHtml::link(CBoot::fa('undo').' Cancelar', ['empleado/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
            </div>
            <div class="col-sm-3">
                <?php echo CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
            </div>
        </div>        
    </div>
</div>


<?php $formulario->cerrar(); ?>