<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Cargos'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Cargo/crear'],
        ]
    ];
?>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Cargo',
    # id, nombre, descripcion, nivel_id
    'columnas' => 'id, nombre, descripcion, nivel_id',
    'opciones' => true,
    'paginacion' => 10,
]) ?>