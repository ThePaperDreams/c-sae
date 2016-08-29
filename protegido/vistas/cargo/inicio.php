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

<a href="<?= Sis::UrlBase() . Sis::apl()->controlador->ID . '/crear' ?>" class="btn btn-primary">
    Registrar
</a>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Cargo',
    # id, nombre, descripcion, nivel_id
    'columnas' => 'id, nombre, descripcion, nivel_id',
    'opciones' => true,
    'paginacion' => 10,
]) ?>