<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Profesiones' => ['Profesion/inicio'],        
        'Ver'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Profesion/inicio'],
            'Crear' => ['Profesion/crear'],
            'Modificar' => ['Profesion/editar', 'id' => $modelo->id],
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
                    <th><?php echo $modelo->obtenerEtiqueta('nombre') ?></th>
                    <td><?php echo $modelo->nombre; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('descripcion') ?></th>
                    <td><?php echo $modelo->descripcion; ?></td>
                </tr>
                            </tbody>
        </table>

    </div>
</div>
