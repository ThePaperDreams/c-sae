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

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Empleado',
    # id, nombres, apellidos, cedula, cargo_id, direccion, profesion_id, salario
//    'columnas' => 'id, nombres, apellidos, cedula',
    'columnas' => [
        'nombres',
        'apellidos', 
        'cedula', 
        'profesion_id' => 'Profesion->nombre', 
        'cargo_id' => 'Cargo->nombre',
    ],
    'opciones' => [
        ['i' => 'eye', 'url' => 'empleado/ver&{id:pk}'],
        ['i' => 'pencil', 'url' => 'empleado/ver&{id:pk}'],
        ['i' => 'plus', 'url' => 'incapacidad/agregar&{id:pk}'],
    ],
    'paginacion' => 10,
]) ?>