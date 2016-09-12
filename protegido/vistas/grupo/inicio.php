<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Grupos'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Grupo/crear'],
        ]
    ];
?>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Grupo',
    # id, nombre, descripcion
    'columnas' => 'id, nombre, descripcion',
    'opciones' => true,
    'paginacion' => 10,
]) ?>