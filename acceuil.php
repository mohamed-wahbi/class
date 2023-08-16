<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="acceuil.css">
</head>

<body>
    <?php
    include_once("connexion.php");
    if(isset($_POST['inscr'])){
        $numero=$_POST['numero'];
        $nometprenom=$_POST['nometprenom'];
        $Ncin=$_POST['Ncin'];
        $directionPRTCP=$_POST['directionPRTCP'];
        $entreprise=$_POST['entreprise'];
        $emailPRTCP=$_POST['emailPRTCP'];
        $telephonePRTCP=$_POST['telephonePRTCP'];
        $themeformation=$_POST['themeformation'];
        $date=$_POST['date'];
        if(($numero)&&($nometprenom)&&($Ncin)&&($directionPRTCP)&&($entreprise)&&($emailPRTCP)&&($telephonePRTCP)&&($themeformation)&&($date)){
            $add = "insert into participant (numero,nometprenom,Ncin,directionPRTCP,entreprise,emailPRTCP,telephonePRTCP,themeformation,dateDEBUT) values ('$numero','$nometprenom','$Ncin','$directionPRTCP','$entreprise','$emailPRTCP','$telephonePRTCP','$themeformation','$date') ";
            $req=mysqli_query($con,$add);
            if($req){
                $msg= `<h3>alert("voila ! vous etes inscrit avec succes .")</h3>`;
            }
            else{
                $msg="<h3>ERROR ! remplire tous les champs slvp .</h3>";
            }

        }
    }
    ?>
    <header class="header">
        <div>
            <nav class="navbar">
                <div class="LOGO">ISET-KE</div>
                <div class="links">
                    <a href="#inscription">inscription</a>
                    <a href="#emploi">emploi du temps</a>
                    <a href="#info">info</a>
                    <a href="admin.php">admin</a>
                </div>
            </nav>
        </div>
        <div class="main">
            <div class="welcom"><span style="color:#8cd87e">VOUS ETES LES BIENVENUE !</span> <br> l'institut superieur
                des etudes technologique de kebili VOUS SOUHAITE une formation distinguée et réussie .</div>
            <div class="image">wahbi</div>
        </div>
    </header>

    <main>
        <div id="info" class="info">
            <div class="infotext">
                <h2>INFO :</h2>
                <p>En raison de nos efforts constants pour fournir les meilleurs services a nosprécieux 2tudiants , nous
                    avons crée un site aplication pour inscrire les nouveaux étudiants a distance ceci afin de faciliter
                    le déroulement du travail administratif et de répondre rapidement aux demande de nos étudiants.Comme
                    cette interface éléctronique sera ouverte toutes les périodes de pré-examen pour inscrire les
                    etudiants et déterminer les emplois des departement et leurs encadrants .</p>
            </div>
            <div class="icon">
                wahbi
            </div>
        </div>
    </main>
    

    <div class="inscription" id="inscription">
        <h2>INSCRIPTION :</h2>
        <form method="POST">
            <label>numero</label>
            <input type="number" name="numero" placeholder="entre ton numero..">

            <label>nom_prenom</label>
            <input type="text" name="nometprenom" placeholder="entre ton nom et prenom..">

            <label>CIN</label>
            <input type="number" name="Ncin" placeholder="entre ton CIN..">


            <label>direction</label>
            <input type="text" name="directionPRTCP" placeholder="entre ton lien..">

            <label>entreprise</label>
            <input type="text" name="entreprise" placeholder="entre ton entreprise..">

            <label>email</label>
            <input type="text" name="emailPRTCP" placeholder="entre ton email..">

            <label>telephone</label>
            <input type="number" name="telephonePRTCP" placeholder="entreton telephone..">

            <label>theme de formation</label>
            <select name="themeformation" id="" class="select">
                <option value="mecanique">mecanique</option>
                <option value="electrique">electrique</option>
                <option value="managment">managment</option>
                <option value="gp">gestion de processus</option>
                <option value="informatique">informatique</option>
            </select>

            <label>date de debut</label>
            <input type="date" name="date">

            <button class="btn" type="submit" name="inscr">INSCRIRE</button>
        </form>
        <?php
        if(isset($msg)){
            echo $msg;
        }
         ?>
    </div>

    <div class="emploi" id="emploi" style="height: 100vh;background: #2b302b;padding: 15px;width: 90%;margin: auto;">
        <h2>EMPLOI DU TEMPS :</h2>
        <div class="caroselEmploi">
            <a href="#">emploi1</a>
            <a href="#">emploi2</a>
            <a href="#">emploi3</a>
            <a href="#">emploi4</a>
        </div>
    </div>

    <div class="footer">
        <h2>CONTACT :</h2>
        <div class="footerContent">
            <div class="component">wahbi</div>
            <div class="component ">wahbi</div>
        </div>
    </div>

</body>

</html>