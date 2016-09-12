<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Incapacidades'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Crear' => ['Incapacidad/crear'],
        ]
    ];
?>

<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Incapacidad',
    # id, empleado_id, dias, tipo, enfermedad_id, accidente_id, total_empresa, total_eps, fecha
//    'columnas' => 'id, empleado_id, dias, tipo',
    'columnas' => [
        'empleado_id' => 'Empleado->nombreDePila',
        'dias',
        'tipo' => 'txtTipo',
        'total_empresa',
        'total_eps',
    ],
    'opciones' => true,
    'paginacion' => 10,
]) ?>