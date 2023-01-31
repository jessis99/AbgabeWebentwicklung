<!--ul class="list-group">
    <li class="list-group-item">
        <a href="Logout">Logout</a>
    </li>
    <li class="list-group-item">
        <a href="Projekte">Projekte </a>
    </li>
    <!?php if (isset($_SESSION['projekt'])){ ?>
    <li class="list-group-item">
        <!?php
            $aktuelles_projekt = $_SESSION['projekt'];
            $name = $_SESSION['projektname']?>
        <a href="Todo"><!?= $name?></a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Reiter">Reiter</a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Aufgaben">Aufgaben</a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Personen">Mitglieder</a>
    </li>
    <!?php }?>
</ul-->

<div class="container-fluid mb-3">
<nav class="navbar navbar-light bg-light">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="Projekte">Projekte</a>
        </li>
        <?php if (isset($_SESSION['projekt'])){ ?>
        <li class="nav-item">
            <div class="dropdown show">
                <a class="navbar dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    $aktuelles_projekt = $_SESSION['projekt'];
                    $name = $_SESSION['projektname']?>
                    <?= $name?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Todo">Projektübersicht</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Reiter">Reiter</a>
                    <a class="dropdown-item" href="Aufgaben">Aufgaben</a>
                    <a class="dropdown-item" href="Personen">Mitglieder</a>
                </div>
            </div>
        </li>
        <?php }?>
    </ul>
    <span class="navbar">
        <a class="btn btn-primary" href="Logout" role="button" id="LogoutLink">
            Logout
        </a>
    </span>
</nav>
</div>