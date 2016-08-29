<?php
# Se importan las librerias base js y css
Sis::Recursos()->JQuery(); 
Sis::Recursos()->Bootstrap3();
Sis::Recursos()->AwesomeFont();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?= Sis::apl()->nombre; ?></title>
        <meta charset="<?php echo Sis::apl()->charset; ?>">
    </head>
    <body>
        <?php $this->complemento('!siscoms.bootstrap3.CBNav', [
            'brand' => Sis::apl()->nombre,
            'elementos' => [
                ['texto' => 'Inicio', 'url' => ['principal/inicio']],
                ['texto' => 'Configuración', 'elementos' => [
                    ['texto' => 'Cargos', 'url' => ['cargo/inicio']],
                    ['texto' => 'Profesiones', 'url' => ['profesion/inicio']],
                    ['texto' => 'Niveles', 'url' => ['nivel/inicio']],
                ]],
                ['texto' => 'Empleados', 'url' => ['empleado/inicio']],
                [
                    'texto' => (Sis::apl()->usuario->esVisitante? 'Iniciar sesión' : 'Cerrar sesión'),
                    'url' => ['principal/' . (Sis::apl()->usuario->esVisitante? 'entrar' : 'salir')]
                ], 
            ],
        ]); ?>
        <div class="container">
            <div class="page-header">
                <h4><?= $this->tituloPagina ?></h4>
            </div>
            <?php if(count($this->migas) > 0): ?>
            <ol class="breadcrumb">
                <?php foreach($this->migas AS $k=>$v): ?>
                    <?php if(is_string($k)): ?>
                <li><a href="<?= Sis::crearUrl($v) ?>"><?= $k ?></a></li>
                    <?php else: ?>
                <li><?= $v ?></li>
                    <?php endif ?>
                <?php endforeach ?>
            </ol>
            <?php endif ?>
            <div class="col-sm-<?= count($this->opciones) > 0? '9' : '12' ?>">
                <?= $this->contenido; ?>
            </div>
            <?php if(count($this->opciones)): ?>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Opciones
                    </div>
                    <div class="list-group">
                    <?php foreach($this->opciones['elementos'] AS $k=>$v): ?>
                        <a href="<?= Sis::crearUrl($v) ?>" class="list-group-item">
                            <?= $k ?>
                        </a>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
            <?php endif ?>
        </div>
    </body>
</html>