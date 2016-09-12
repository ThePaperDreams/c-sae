<?php
$this->migas = [
    'Home' => ['principal/inicio'],
    'Listar Empleados' => ['Empleado/inicio'],
    'Ver'
];

$this->opciones = [
    'elementos' => [
        'Listar' => ['Empleado/inicio'],
        'Crear' => ['Empleado/crear'],
        'Modificar' => ['Empleado/editar', 'id' => $modelo->id],
    ]
];
?>
<div class="row">
    

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            Ver detalles
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('id') ?></th>
                    <td><?php echo $modelo->id; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('nombres') ?></th>
                    <td><?php echo $modelo->nombres; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('apellidos') ?></th>
                    <td><?php echo $modelo->apellidos; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('cedula') ?></th>
                    <td><?php echo $modelo->cedula; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('cargo_id') ?></th>
                    <td><?php echo $modelo->cargo_id; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('direccion') ?></th>
                    <td><?php echo $modelo->direccion; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('profesion_id') ?></th>
                    <td><?php echo $modelo->profesion_id; ?></td>
                </tr>
                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('salario') ?></th>
                    <td><?php echo $modelo->salario; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<hr>
<h1>Incapacidades</h1>
<?= $this->complemento('!siscoms.bootstrap3.CBGrid', [
    'modelo' => 'Incapacidad',
    'criterios' => [
        'where' => 'empleado_id=' . $modelo->id,
    ],
    # id, empleado_id, dias, tipo, enfermedad_id, accidente_id, total_empresa, total_eps, fecha
//    'columnas' => 'id, empleado_id, dias, tipo',
    'columnas' => [
        'dias',
        'tipo' => 'txtTipo',
        'accidente_id' => 'nombreAccidente',
        'enfermedad_id' => 'nombreEnfermedad',
        'total_empresa',
        'total_eps',
        'descripcion',
        'fecha',
    ],
    'paginacion' => 10,
]) ?>
