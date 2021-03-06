<?php
# Se importan las librerias base js y css
Sis::Recursos()->JQuery(); 
Sis::Recursos()->Select2();
Sis::Recursos()->Bootstrap3();
Sis::Recursos()->AwesomeFont();
Sis::Recursos()->JQueryUI();
Sis::Recursos()->css("estilos");
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
                    ['texto' => 'Niveles', 'url' => ['nivel/inicio']],
                    ['texto' => 'Cargos', 'url' => ['cargo/inicio']],
                    ['texto' => 'Profesiones', 'url' => ['profesion/inicio']],
                    ['texto' => 'Enfermedades', 'url' => ['enfermedad/inicio']],
                    ['texto' => 'Accidentes', 'url' => ['accidente/inicio']],
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
        <script>
            $(function(){
                $("[data-s2]").select2({
                    width: "100%",
                });
                
                $("[data-date]").datepicker({ dateFormat : 'yy-mm-dd' });
            });
        </script>
    </body>
</html>