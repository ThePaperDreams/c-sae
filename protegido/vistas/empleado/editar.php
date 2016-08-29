<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Empleados' => ['Empleado/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Empleado/inicio'],
            'Crear' => ['Empleado/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
