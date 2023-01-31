<!-- Gruppe 22: Leonard Richertz, Jessica Schiffer-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<?php
    $todos=array(
            array('ToDo:', 'HTML Datei erstellen (Max Mustermann)','CSS Datei erstellen (Max Mustermann)'),
            array('Erledigt:', 'PC eingeschaltet (Petra Müller)', 'Kaffee trinken (Petra Müller)'),
            array('Verschoben:', 'Für die Uni lernen (Max Mustermann)'
            )
    );

    //var_dump($todos);
?>

    <div class="container-fluid">

        <div class="row">
            <?php echo view('templates/menu.php');?>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <?php
                        foreach ($todos as $todo): ?>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><?php echo $todo[0] ?></div>
                                    <ul class="list-group list-group-flush">
                                        <?php
                                        for ($i=1; $i < count($todo); $i++): ?>
                                        <li class="list-group-item"><?php echo $todo[$i] ?></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>

</body>
</html>