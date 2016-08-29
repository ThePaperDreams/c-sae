<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Nivel'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Nivel/crear'],
        ]
    ];
?>
<a href="<?= Sis::UrlBase() . Sis::apl()->controlador->ID . '/crear' ?>" class="btn btn-primary">
    Registrar
</a>
<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Nivel',
    # id, nivel, descripcion, porcentaje
    'columnas' => 'id, nivel, descripcion, porcentaje',
    'opciones' => true,
    'paginacion' => 10,
]) ?>