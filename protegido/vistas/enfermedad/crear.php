<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Enfermedades' => ['Enfermedad/inicio'],        
        'Crear'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Enfermedad/inicio'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo]); ?>
</div>
