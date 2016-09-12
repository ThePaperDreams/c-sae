<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Grupos' => ['Grupo/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Grupo/inicio'],
            'Crear' => ['Grupo/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
