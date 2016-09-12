<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Cargos' => ['Cargo/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Cargo/inicio'],
            'Crear' => ['Cargo/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'niveles' => $niveles]); ?>
</div>
