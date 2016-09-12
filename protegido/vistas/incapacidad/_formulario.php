<?php 
$formulario = new CBForm(['id' => 'form-incapacidades']);
$formulario->abrir();
?>
<div class="panel panel-primary">
    <div class="panel-heading text-center">
        Incapacidad
    </div>
    <div class="panel-body">        
        <div class="row">
            <div class="col-sm-4">
                <input type="hidden" id="salario" value="<?= $salario ?>">
                <input type="hidden" id="porcentaje" value="<?= $porcentaje ?>">
                <input type="hidden" id="total_empresa" name="total_empresa">
                <input type="hidden" id="total_eps" name="total_eps">
                <?php echo CBoot::text($empleado, ['disabled' => true, 'group' => true, 'label' => 'Empleado']) ?>
            </div>
            <div class="col-sm-4">
                <?php echo CBoot::textAddOn($riesgo, ['disabled' => true, 'group' => true, 'label' => 'Nivel de riesgo', 'pos' => $porcentaje . '%']) ?>
            </div>
            <div class="col-sm-4">
                <?php echo CBoot::textAddOn(number_format($salario), ['class' => 'text-right', 'disabled' => true, 'group' => true, 'label' => 'Salario', 'pre' => '$']) ?>
            </div>
            <div class="col-sm-4">    
                <?php echo $formulario->campoNumber($modelo, 'dias', ['label' => true, 'group' => true, 'min' => 1]) ?>
            </div>
            <div class="col-sm-4">
                <?php echo $formulario->lista($modelo, 'tipo', ['Enfermedad', 'Accidente'], ['label' => true, 'group' => true]) ?>    
            </div>
            <div class="col-sm-4" id="cont-enfermedad">
                <?php echo $formulario->lista($modelo, 'enfermedad_id', $enfermedades, ['label' => true, 'group' => true, 'defecto' => 'Seleccione una enfermedad']) ?>    
            </div>
            <div class="col-sm-4" style="display:none" id="cont-accidente">
                <?php echo $formulario->lista($modelo, 'accidente_id', $accidentes, ['label' => true, 'group' => true, 'defecto' => 'Seleccione un accidente']) ?>    
            </div>
            <div class="col-sm-12">
                <?php echo $formulario->areaTexto($modelo, 'descripcion', ['label' => true, 'group' => true]) ?>    
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-6">
                <?php echo $formulario->inputAddon($modelo, 'total_empresa', 'number', ['class' => 'text-right', 'label' => true, 'group' => true, 'disabled' => true], ['pre' => '$']) ?>    
            </div>
            <div class="col-sm-6">    
                <?php echo $formulario->inputAddon($modelo, 'total_eps', 'number', ['class' => 'text-right', 'label' => true, 'group' => true, 'disabled' => true], ['pre' => '$']) ?>
            </div>
            <div class="col-sm-6">
                <?php echo $formulario->campoTexto($modelo, 'fecha', ['data-date' => true, 'label' => true, 'group' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-6 col-sm-3">
                <?php echo CHtml::link(CBoot::fa('undo').' Cancelar', ['incapacidad/inicio'], ['class' => 'btn btn-primary btn-block']); ?>
            </div>
            <div class="col-sm-3">
                <?php echo CBoot::boton(CBoot::fa('save') .' '. ($modelo->nuevo? 'Guardar' : 'Actualizar'), 'success', ['class' => 'btn-block']); ?>
            </div>
        </div>
    </div>
</div>
<?php $formulario->cerrar(); ?>
<script>
    $(function(){
        $("#Incapacidades_tipo").change(function(){
            if($(this).val() === '0'){
                $("#cont-accidente").slideUp(function(){                    
                    $("#cont-enfermedad").slideDown();
                });
            } else{
                $("#cont-enfermedad").slideUp(function(){
                    $("#cont-accidente").slideDown();
                });
            }
        });
        
        $("#Incapacidades_dias, #Incapacidades_tipo, #Incapacidades_enfermedad_id, #Incapacidades_accidente_id").change(function(){
            calcularTotal();
        });
    });
    
    function calcularTotal(){
        var totalEmpresa = 0;
        var totalEps = 0;
        var dias = parseInt($("#Incapacidades_dias").val());
        var porcentaje = parseFloat($("#porcentaje").val()) / 100;
        var salario = parseFloat($("#salario").val());
        var valorDia = salario / 30;
        
        if($("#Incapacidades_tipo").val() === '1'){
            porcentaje = 1;
        }
        
        var totEmpresa = $("#Incapacidades_total_empresa");
        var totEps = $("#Incapacidades_total_eps");
        var totHdEmpresa = $("#total_empresa");
        var totHdEps = $("#total_eps");
        
        if(dias <= 3){
            totalEmpresa = valorDia * dias;
        } else {
            totalEmpresa = valorDia * 3;
            var diasEps = dias - 3;
            totalEps = diasEps * (valorDia * porcentaje);
        }
        totEmpresa.val(totalEmpresa);
        totEps.val(totalEps);
        totHdEmpresa.val(totalEmpresa);
        totHdEps.val(totalEps);
    }
</script>