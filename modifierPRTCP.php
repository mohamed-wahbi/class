<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
    
    include_once("connexion.php");
    $id=$_GET['id'];
    $req = mysqli_query($con,"SELECT * FROM participant where prtcpID=$id");
    $row=mysqli_fetch_assoc($req);
    if(isset($_POST['btn'])){
        $numero =$_POST['numero'];
        $nom_prenom=$_POST['nometprenom'];
        $CIN=$_POST['Ncin'];
        $direction=$_POST['directionPRTCP'];
        $entreprise=$_POST['entreprise'];
        $email=$_POST['emailPRTCP'];
        $telephone=$_POST['telephonePRTCP'];
        $themeformation=$_POST['themeformation'];
        $dateDEBUT=$_POST['date'];

        if(($numero) && ($CIN) && ($nom_prenom) && ($direction) && ($entreprise) && ($email) && ($telephone) && ($themeformation) && ($dateDEBUT)){
            $req = mysqli_query($con,"UPDATE participant SET numero='$numero',nometprenom='$nom_prenom',Ncin='$CIN',directionPRTCP='$direction',entreprise='$entreprise',emailPRTCP='$email',telephonePRTCP='$telephone',themeformation='$themeformation',dateDEBUT='$dateDEBUT' WHERE prtcpID=$id ");
            if($req){
                header("location:index.php");
            }
            
        }
        $message="veuillez remplire tous les champs slvp !";  
    }
    ?>



    <div class="form">
        <a href="index.php" class="back_btn">RETOUR <i class="fa-solid fa-rotate-left"></i></a>
        <h2>Update un PARTICIPANT :</h2>
        <p class="errorMessage">veuiller remplire tous les champs !</p>
        <form method="POST">
            <label>numero</label>
            <input type="number" name="numero" value="<?=$row['numero']?>">

            <label>nom_prenom</label>
            <input type="text" name="nometprenom" value="<?=$row['nometprenom']?>">

            <label>CIN</label>
            <input type="number" name="Ncin" value="<?=$row['Ncin']?>">


            <label>direction</label>
            <input type="text" name="directionPRTCP" value="<?=$row['directionPRTCP']?>">

            <label>entreprise</label>
            <input type="text" name="entreprise" value="<?=$row['entreprise']?>">

            <label>email</label>
            <input type="text" name="emailPRTCP" value="<?=$row['emailPRTCP']?>">

            <label>telephone</label>
            <input type="number" name="telephonePRTCP" value="<?=$row['telephonePRTCP']?>">

            <label>theme de formation</label>
            <select name="themeformation" id="">
                <option value="<?=$row['themeformation'] ?>"><?=$row['themeformation'] ?></option>
                <option value="mecanique">mecanique</option>
                <option value="electrique">electrique</option>
                <option value="managment">managment</option>
                <option value="gp">gestion de processus</option>
                <option value="informatique">informatique</option>
            </select>

            <label>date de debut</label>
            <input type="date" name="date" value="<?=$row['dateDEBUT']?>">

            <button type="submit" name="btn" class="inputSUBMIT">Update <i class="fa-solid fa-wrench"></i></button>
            
        </form>
    </div>
</body>
</html>