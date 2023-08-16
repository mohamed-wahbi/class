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
    $req = mysqli_query($con,"SELECT * FROM formateur where id=$id");
    $row=mysqli_fetch_assoc($req);
    if(isset($_POST['btn'])){

        $CIN=$_POST['cin'];
        $nom_prenom=$_POST['nomPrenom'];
        $specialite=$_POST['specialite'];
        $direction=$_POST['direction'];
        $telephone=$_POST['telephone'];

        if(($CIN) && ($nom_prenom) && ($specialite) && ($direction) && ($telephone)){
            $req = mysqli_query($con,"UPDATE formateur SET CIN='$CIN' , nom_prenom='$nom_prenom' , specialite='$specialite' , direction='$direction' , telephone='$telephone' WHERE id=$id ");
            if($req){
                header("location:index.php");
            }
            else {
                die(mysqli_error($con));
            }
        }
        $message="veuillez remplire tous les champs slvp !";  
    }
    ?>



    <div class="form">
        <a href="index.php" class="back_btn">RETOUR <i class="fa-solid fa-rotate-left"></i></a>
        <h2>Update un formateur :</h2>
        <p class="errorMessage">veuiller remplire tous les champs !</p>
        <form method="POST">
            <label>CIN</label>
            <input type="number" name="cin" value="<?=$row['CIN']?>">
            <label>nom_prenom</label>
            <input type="text" name="nomPrenom" value="<?=$row['nom_prenom']?>">
            <label>specialite</label>
            <input type="text" name="specialite" value="<?=$row['specialite']?>">
            <label>direction</label>
            <input type="text" name="direction" value="<?=$row['direction']?>">
            <label>telephone</label>
            <input type="number" name="telephone" value="<?=$row['telephone']?>">

            <button type="submit" name="btn" class="inputSUBMIT">Update <i class="fa-solid fa-wrench"></i></button>
            
        </form>
    </div>
</body>
</html>