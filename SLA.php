<?php
    include 'connect.php';
    include 'functiondefinitions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple layer application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="SLA.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center titel">
                <h3><b>Simple Layer Application</b></h3>
            </div>
            <div class="col-xl-12">
            <div class="form-group">
                <form name="form1" method="POST" action="controller.php">
                    <div class="form-group">
                        <label>Vul het studentnummer in</label>
                        <input name="leerling_nr" type="number" class="form-control" required placeholder="bijv: 02448883">
                    </div>
                    <div class="form-group">
                        <label>Vul een voornaam in</label>
                        <input name="voornaam" type="text" class="form-control" required placeholder="bijv: Bob">
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </form>
            </div>
            <div class="col-xl-12">
                <?php
                    leesnaam("student_nummer","voornaam","naamtabel");
                ?>
            </div>
        </div>
    </div>
</body>
</html>