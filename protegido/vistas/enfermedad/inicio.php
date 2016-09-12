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
    # id, nombre, descripcion, gurpo_id
    'columnas' => 'id, nombre, descripcion, gurpo_id',
    'opciones' => true,
    'paginacion' => 10,
]) ?>