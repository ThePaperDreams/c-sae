<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Empleados'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Empleado/crear'],
        ]
    ];
?>
<a href="<?= Sis::UrlBase() . Sis::apl()->controlador->ID . '/crear' ?>" class="btn btn-primary">
    Registrar
</a>
<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Empleado',
    # id, nombres, apellidos, cedula, cargo_id, direccion, profesion_id, salario, nivel_id
    'columnas' => 'nombres, apellidos, cedula',
    'opciones' => true,
    'paginacion' => 10,
]) ?>