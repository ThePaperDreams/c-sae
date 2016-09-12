<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Incapacidades' => ['Incapacidad/inicio'],        
        'Ver'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Incapacidad/inicio'],
            'Crear' => ['Incapacidad/crear'],
            'Modificar' => ['Incapacidad/editar', 'id' => $modelo->id],
        ]
    ];
?>
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
                    <th><?php echo $modelo->obtenerEtiqueta('empleado_id') ?></th>
                    <td><?php echo $modelo->empleado_id; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('dias') ?></th>
                    <td><?php echo $modelo->dias; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('tipo') ?></th>
                    <td><?php echo $modelo->tipo; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('enfermedad_id') ?></th>
                    <td><?php echo $modelo->enfermedad_id; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('accidente_id') ?></th>
                    <td><?php echo $modelo->accidente_id; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('total_empresa') ?></th>
                    <td><?php echo $modelo->total_empresa; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('total_eps') ?></th>
                    <td><?php echo $modelo->total_eps; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('fecha') ?></th>
                    <td><?php echo $modelo->fecha; ?></td>
                </tr>
                            </tbody>
        </table>

    </div>
</div>
