<?php 
    $this->migas = [
        'Home' => ['principal/inicio'],
        'Listar Nivel' => ['Nivel/inicio'],        
        'Ver'
    ];
    
    $this->opciones = [
        'elementos' => [
            'Listar' => ['Nivel/inicio'],
            'Crear' => ['Nivel/crear'],
            'Modificar' => ['Nivel/editar', 'id' => $modelo->id],
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
                    <th><?php echo $modelo->obtenerEtiqueta('nivel') ?></th>
                    <td><?php echo $modelo->nivel; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('descripcion') ?></th>
                    <td><?php echo $modelo->descripcion; ?></td>
                </tr>
                                <tr>
                    <th><?php echo $modelo->obtenerEtiqueta('porcentaje') ?></th>
                    <td><?php echo $modelo->porcentaje; ?></td>
                </tr>
                            </tbody>
        </table>

    </div>
</div>
