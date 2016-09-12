<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Enfermedades' => ['Enfermedad/inicio'],        
        'Actualizar'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Enfermedad/inicio'],
            'Crear' => ['Enfermedad/crear'],
        ]
    ];    
?>
<div class="col-sm-8">    
    <?php echo $this->mostrarVistaP('_formulario', ['modelo' => $modelo, 'grupos' => $grupos]); ?>
</div>
