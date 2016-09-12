<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Profesiones'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Profesion/crear'],
        ]
    ];
?>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Profesion',
    # id, nombre, descripcion
    'columnas' => 'id, nombre, descripcion',
    'opciones' => true,
    'paginacion' => 10,
]) ?>