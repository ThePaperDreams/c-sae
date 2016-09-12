<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Cargos' => ['Cargo/inicio'],        
        'Crear'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Cargo/inicio'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'niveles' => $niveles]); ?>
</div>
