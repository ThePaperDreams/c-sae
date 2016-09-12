<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Incapacidades' => ['Incapacidad/inicio'],        
        'Crear'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Incapacidad/inicio'],
        ]
    ];    
?>
<div class="col-sm-12">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'empleado' => $empleado, 'enfermedades' => $enfermedades, 'accidentes' => $accidentes, 'riesgo' => $riesgo, 'porcentaje' => $porcentaje, 'salario' => $salario]); ?>
</div>
