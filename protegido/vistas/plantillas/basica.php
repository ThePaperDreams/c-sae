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
                ['texto' => 'Acerca', 'url' => ['principal/acerca']],
                ['texto' => 'Contacto', 'url' => ['principal/contacto']],
                [
                    'texto' => (Sis::apl()->usuario->esVisitante? 'Iniciar sesión' : 'Cerrar sesión'),
                    'url' => ['principal/' . (Sis::apl()->usuario->esVisitante? 'entrar' : 'salir')]
                ], 
            ],
        ]); ?>
        <div class="container">
        <?= $this->contenido; ?>
        </div>
    </body>
</html>