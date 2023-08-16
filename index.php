<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Formateur</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="prtcp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
    session_start();
    if(isset($_SESSION['passADMIN'])){
        $passADMIN=$_SESSION['passADMIN'];
    
    
?>
<body style="flex-direction: column;background: #91979c;">
    <div style="margin:30px 0px;"><a href="logout.php" style="font-size: 21px;font-family: system-ui;color: #8df2ff;font-weight: 700;text-decoration: underline;">LOGOUT</a></div>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"><i class="fa-solid fa-user-plus"></i>Ajouter</a>
        <h2 style="color: #d6e6d5;">LES FORMATEURS :</h2>
        <table class="ajoutTab" style="width: 100%;">
            <tr>
                <th>CIN</th>
                <th>nom_prenom</th>
                <th>specialite</th>
                <th>direction</th>
                <th>telephone</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            <!-- <tr>
                <td>151656185</td>
                <td>med wahbi</td>
                <td>dev web</td>
                <td>souse</td>
                <td>21010415</td>
                <td><a href="#" class="delete"> <i class="fa-solid fa-trash"></i> delete</a></td>
                <td><a href="modifier.php" class="update"><i class="fa-solid fa-wrench"></i> update</a></td>
            </tr> -->
            <?php
            include_once("connexion.php");
            $req = mysqli_query($con, "SELECT * FROM formateur");
            if (mysqli_num_rows($req) == 0) {
                echo "il n y a pas encore des formateurs !";

            } else {
                while ($row = mysqli_fetch_assoc($req)) {
                    ?>
                    <tr>
                        <td>
                            <?= $row['CIN'] ?>
                        </td>
                        <td>
                            <?= $row['nom_prenom'] ?>
                        </td>
                        <td>
                            <?= $row['specialite'] ?>
                        </td>
                        <td>
                            <?= $row['direction'] ?>
                        </td>
                        <td>
                            <?= $row['telephone'] ?>
                        </td>
                        <td><a href="supprimer.php?id=<?= $row['id'] ?>" class="delete"> <i class="fa-solid fa-trash"></i>
                                delete</a></td>
                        <td><a href="modifier.php?id=<?= $row['id'] ?>" class="update"><i class="fa-solid fa-wrench"></i>
                                update</a></td>
                    </tr>
                    <?php
                }
            }
            ?>

        </table>

        <hr>
        <hr>
        <hr>
        <br>
        <br>
        <br>
        <br>
        
        
        <!-- -----------------------------------------participants--------------------------------------------------------------------------- -->
            <div style="width:100%">
            <h2 style="color: #d6e6d5;">LES PARTICIPANTS :</h2>
            <table class="tab2" style="width:100%" >
            <tr>
                <th>numero</th>
                <th>nom_prenom</th>
                <th>CIN</th>
                <th>direction</th>
                <th>entreprise</th>
                <th>email</th>
                <th>telephone</th>
                <th> themes</th>
                <th>DATE de debut</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            <!-- <tr>
                <td>151656185</td>
                <td>med wahbi</td>
                <td>dev web</td>
                <td>souse</td>
                <td>21010415</td>
                <td><a href="#" class="delete"> <i class="fa-solid fa-trash"></i> delete</a></td>
                <td><a href="modifier.php" class="update"><i class="fa-solid fa-wrench"></i> update</a></td>
            </tr>
         <select name="" id="">
                    <option value="mecanique">mecanique</option>
                    <option value="electrique">electrique</option>
                    <option value="managment">managment</option>
                    <option value="gp">gestion de processus</option>
                    <option value="informatique">informatique</option>
                </select> -->
            <?php
            include_once("connexion.php");
            $req = mysqli_query($con, "SELECT * FROM participant");
            if (mysqli_num_rows($req) == 0) {
                echo "il n y a pas encore des formateurs !";

            } else {
                while ($row = mysqli_fetch_assoc($req)) {
                    ?>
                    <tr>
                        <td>
                            <?= $row['numero'] ?>
                        </td>
                        <td>
                            <?= $row['nometprenom'] ?>
                        </td>
                        <td>
                            <?= $row['Ncin'] ?>
                        </td>
                        <td>
                            <?= $row['directionPRTCP'] ?>
                        </td>
                        <td>
                            <?= $row['entreprise'] ?>
                        </td>
                        <td>
                            <?= $row['emailPRTCP'] ?>
                        </td>
                        <td>
                            <?= $row['telephonePRTCP'] ?>
                        </td>
                        <td>
                            <?= $row['themeformation'] ?>
                        </td>
                        <td>
                            <?= $row['dateDEBUT'] ?>
                        </td>
                        <td><a href="supprimerPRTCP.php?id=<?= $row['prtcpID'] ?>" class="delete"> <i class="fa-solid fa-trash"></i>
                                delete</a></td>
                        <td><a href="modifierPRTCP.php?id=<?= $row['prtcpID'] ?>" class="update"><i class="fa-solid fa-wrench"></i>
                                update</a></td>
                    </tr>
                    <?php
                }
            }
            ?>

        </table>
            </div>
            <hr>
        <hr>
        <hr>

    </div>
    <br>

<?php
}else{
    header("location:admin.php");
}
?>







</body>

</html>