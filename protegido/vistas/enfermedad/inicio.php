<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Enfermedades'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Enfermedad/crear'],
        ]
    ];
?>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Enfermedad',
    # id, nombre, descripcion
    'columnas' => 'id, nombre, descripcion',
    'opciones' => true,
    'paginacion' => 10,
]) ?>