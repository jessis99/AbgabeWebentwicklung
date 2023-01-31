<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Personen</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>


<body>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="submit_edit" method="post">
            <input type="hidden" name="id" id="id" value="<?=isset($mitglied['id']) ? $mitglied['id']: ''?>" >
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?=isset($mitglied['username']) ? $mitglied['username']: ''?>">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">E-Mail-Adresse:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?=isset($mitglied['email']) ? $mitglied['email']: ''?>">
            </div>
            <div class="form-group">
                <input type="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox"> Dem Projekt zugeordnet</label>
            </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="passwort" name="passwort" value="<?=isset($mitglied['passwort']) ? $mitglied['passwort']: ''?>">
                    </div>
                    <div class="form-group">
                </div>
                <div class="mt-3"><button type="submit" name="btnSpeichern" class="btn btn-success">Speichern</button>
                    <!-- Redirect bei Klick auf Abbrechen funktioniert noch nicht-->
                    <button type="submit" name="btnAbbrechen" id="btnAbbrechen" class="btn btn-primary">Abbrechen</button>
                </div>
        </form>
    </div>
</div>
</body>

}