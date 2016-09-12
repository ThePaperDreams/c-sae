<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Incapacidades' => ['Incapacidad/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Incapacidad/inicio'],
            'Crear' => ['Incapacidad/crear'],
        ]
    ];    
?>
<div class="col-sm-12">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'empleado' => $empleado, 'enfermedades' => $enfermedades, 'accidentes' => $accidentes, 'riesgo' => $riesgo, 'porcentaje' => $porcentaje, 'salario' => $salario]); ?>
</div>
