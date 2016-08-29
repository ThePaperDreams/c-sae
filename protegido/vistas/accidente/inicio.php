<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Accidentes'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Accidente/crear'],
        ]
    ];
?>
<a href="<?= Sis::UrlBase() . Sis::apl()->controlador->ID . '/crear' ?>" class="btn btn-primary">
    Registrar
</a>
<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Accidente',
    # id, nombre, descripcion
    'columnas' => 'id, nombre, descripcion',
    'opciones' => true,
    'paginacion' => 10,
]) ?>