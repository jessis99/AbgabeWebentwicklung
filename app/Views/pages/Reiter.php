<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiter</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">

    <div class="row">
        <?php echo view('templates/menu.php');?>
    </div>

    <div class="row">
        <div class="col">
            <form method="post" action="<?= base_url(); ?>/Reiter/reiter_edit_delete">
            <div class="row container-fluid">
                <table class="table table-responsive">
                    <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Beschreibung</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reiter as $item): ?>
                        <tr>
                            <td> <?php echo $item['name'] ?></td>
                            <td> <?php echo $item['beschreibung'] ?></td>
                            <td style="text-align: right">
                                <form action="reiter_edit_delete" method="post">
                                    <input type="hidden" value="<?=$item['id']?>" name="id" id="id">
                                    <button type="submit" class='btn' name="btnBearbeiten">
                                        <i class="fa-solid fa-pen-to-square" ></i>
                                    </button>
                            </td>
                            <td style="text-align: right">
                                <button type="submit" class='btn' value="<?=$item['id']?>" name="btnLoeschen" id="btnLoeschen">
                                    <i class="fa-solid fa-trash-can ms-3"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </form>
            </br>
            </br>
            <div class="h3 mt-5">
                <form action="reiter_submit" method="post">
                    <?= (isset($aktueller_reiter['id']))? 'Bearbeiten': 'Erstellen' ?>
            </div>
            <input type="hidden" id="id" name="id" value="<?=(isset($aktueller_reiter['id'])? $aktueller_reiter['id'] : '') ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bezeichnung des Reiters:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= (isset($aktueller_reiter['name']))? $aktueller_reiter['name'] : '' ?>" placeholder="Reiter">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Beschreibung</label>
                <textarea placeholder="Beschreibung" class="form-control" id="beschreibung" name="beschreibung" rows="3"><?= (isset($aktueller_reiter['beschreibung']))? $aktueller_reiter['beschreibung'] : '' ?></textarea>
            </div>
            <div><button type="submit" name="btnSpeichern" id="btnSpeichern" class="btn btn-primary">Speichern</button>
                <button type="submit" name="btnReset" id="btnReset" class="btn btn-success">Reset</button>
            </div>
            </form>
    </div>
</div>
</body>
</html>