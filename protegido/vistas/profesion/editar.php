<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Profesiones' => ['Profesion/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Profesion/inicio'],
            'Crear' => ['Profesion/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
