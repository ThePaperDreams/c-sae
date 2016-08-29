<?php 
$formulario = new CBForm(['id' => 'form-empleados']);
$formulario->abrir();
?>

<div class="row">
    <div class="col-sm-6">
        <?= $formulario->campoTexto($modelo, 'nombre', ['label' => true, 'group' => true]) ?>
    </div>
    <div class="col-sm-6">
        <?= $formulario->campoTexto($modelo, 'apellidos', ['label' => true, 'group' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <?= $formulario->campoTexto($modelo, 'cedula', ['label' => true, 'group' => true]) ?>        
    </div>
    <div class="col-sm-6">
        <?= $formulario->listaM($modelo, 'cargo_id', 'Cargo', 'id', 'nombre', ['label' => true, 'group' => true, 'defecto' => 'Seleccione un cargo']) ?>        
    </div>
</div>
<div class="row">
    <div class="">
        
    </div>
</div>
<?= $formulario->campoTexto($modelo, 'direccion', ['label' => true, 'group' => true]) ?>
<?= $formulario->listaM($modelo, 'profesion_id', 'Profesion', 'id', 'nombre', ['label' => true, 'group' => true, 'defecto' => 'Seleccione una profesión']) ?>
<?= $formulario->campoTexto($modelo, 'salario', ['label' => true, 'group' => true]) ?>
<?= $formulario->listaM($modelo, 'nivel_id', 'Nivel', 'id', 'nivel', ['label' => true, 'group' => true]) ?>

<div class="row">
    <div class="col-sm-offset-6 col-sm-3">
        <?= CHtml::link(CBoot::fa('undo').' Cancelar', ['empleado/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
    </div>
    <div class="col-sm-3">
        <?= CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
    </div>
</div>

<?php $formulario->cerrar(); ?>