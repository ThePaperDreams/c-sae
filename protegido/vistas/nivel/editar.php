<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Nivel' => ['Nivel/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Nivel/inicio'],
            'Crear' => ['Nivel/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
