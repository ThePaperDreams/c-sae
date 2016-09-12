<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Empleados' => ['Empleado/inicio'],        
        'Crear'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Empleado/inicio'],
        ]
    ];    
?>
<div class="col-sm-12">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'profesiones' => $profesiones, 'cargos' => $cargos]); ?>
</div>
