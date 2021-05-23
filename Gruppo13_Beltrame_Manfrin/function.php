<!--Funzione del logo e navbar-->
<?php function navbar() { ?>
<div id="conteiner">
<div style="padding:0px; margin:0px; background-color:#ffffff; border-radius: 15px 15px 0px 0px;"><img src="Icons/logo.png" /></div>
<nav id='cssmenu'>
    <ul>
        <li <?php if($_REQUEST["id"]=="home" or $_REQUEST["id"]==""){echo "class='active'";}?>><a href="index.php?id=home" ><span><i class="fas fa-home"></i>&ensp;Home</span></a></li>
        <li <?php if($_REQUEST["id"]=="studenti"){echo "class='active'";}?>><a href="gestione_studenti.php?id=studenti" ><i class="fas fa-users"></i>&ensp;<span>Gestione Studenti</span></a></li>
        <li <?php if($_REQUEST["id"]=="prestiti"){echo "class='active'";}?>><a href="gestione_prestiti.php?id=prestiti" ><span><i class="fas fa-book"></i>&ensp;Gestione Prestiti</span></a></li>
        <li <?php if($_REQUEST["id"]=="ricerca"){echo "class='active'";}?>><a href="ricerca.php?id=ricerca" ><span><i class="fas fa-search"></i>&ensp;Ricerca</span></a></li>
        <li <?php if($_REQUEST["id"]=="statistiche"){echo "class='active'";}?>><a href="#?id=statistiche" ><span><i class="fas fa-chart-bar"></i>&ensp;Statistiche&ensp;<i class="fas fa-sort-down"></i></span></a>
            <ul>
                <li class='last'><a href="tabelle.php?id=statistiche"><span><i class="fas fa-table"></i>&ensp;Tabelle</a></li><br>
                <li><a href="grafici.php?id=statistiche"><span><i class="fas fa-chart-pie"></i>&ensp;Grafici</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php } ?>
<!--Funzione del head, con gli script necessari-->
<?php function head() { ?>
    <link rel="icon" href="Icons/favicon.png" type="image/png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="stile.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <link href="Script/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<?php } ?>

<?php function footer() { ?>
</div>
<footer style='width: 1250px; margin: 0 auto; padding: 0;'>
        <div class="footer-above">  
            <a href="https://www.facebook.com/bibliotecheferrara/"><img src="Icons/facebook.svg" width="30" height="30"></a>
            <a href="https://twitter.com/PoloUFE"><img src="Icons/twitter.svg" width="30" height="30"></a>
            <a href="https://www.instagram.com/unife.it/?hl=it"><img src="Icons/instagram.svg" width="30" height="30"></a>
            <a href="mailto:info@bibliotecheferrara.it"><img src="Icons/mail.svg" width="30" height="30"></a>
        </div>
        <div class="footer-below">
            Copyright &copy; Gruppo13 <?php echo date("Y"); ?>
        </div>
    </div>
</footer>

<?php } ?>