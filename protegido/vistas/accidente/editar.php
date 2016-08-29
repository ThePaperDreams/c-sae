<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Accidentes' => ['Accidente/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Accidente/inicio'],
            'Crear' => ['Accidente/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
