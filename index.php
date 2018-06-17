<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>PAMI | Adan</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<head>
    <title>Registro Alpha PAMI Adan</title>
</head>

<body>
    <div class="container">
        <form action="registrar.php" method="post" enctype="multipart/form-data">
            <div class="wizard-header text-center">
                <h3 class="wizard-title">Crea tu perfil PAMI</h3>
            </div>
            <div class="row">
                <h5 class="info-text">Queremos conocerte :)</h5>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                            <input type="file" id="userpicture" name="imagen">
                        </div>
                        <h6>Elegir Imagen</h6>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nombre <small>(requerido)</small></label>
                        <input name="name" type="text" class="form-control" placeholder="Nombre..." required>
                    </div>
                    <div class="form-group">
                        <label>Apellido <small>(requerido)</small></label>
                        <input name="lastname" type="text" class="form-control" placeholder="Apellido..." required>
                    </div>
                </div>
                <div class="col-sm-10">
                    <h5 class="info-text">Datos de Accesso</h5>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label>Email <small>(requerido)</small></label>
                        <input name="email" type="email" class="form-control" placeholder="nombre@dominio.com" required>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label>Password <small>(requerido)</small></label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                </div>
            </div>
    </div>
    <div class="wizard-footer">
        <div class="pull-right">
            <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finalizar' />
        </div>
        <div class="clearfix"></div>
    </div>
    </form>
</body>

</html>
