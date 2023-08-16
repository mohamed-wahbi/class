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
    $message="";
    include_once("connexion.php");
    if(isset($_POST['btn'])){
        $CIN=$_POST['cin'];
        $nom_prenom=$_POST['nomPrenom'];
        $specialite=$_POST['specialite'];
        $direction=$_POST['direction'];
        $telephone=$_POST['telephone'];
        if(($CIN) && ($nom_prenom) && ($specialite) && ($direction) && ($telephone)){
        $sql = "insert into `formateur` (cin,nom_prenom,specialite,direction,telephone) values ('$CIN', '$nom_prenom','$specialite','$direction','$telephone')";
        $req = mysqli_query($con,$sql);
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
        <h2>Ajouter un formateur :</h2>
        <p class="errorMessage">
            <?php
            if(isset($message)){
                echo $message;
            }
        ?></p>
        <form method="POST">
            <label>CIN</label>
            <input type="number" name="cin">
            <label>nom_prenom</label>
            <input type="text" name="nomPrenom">
            <label>specialite</label>
            <input type="text" name="specialite">
            <label>direction</label>
            <input type="text" name="direction">
            <label>telephone</label>
            <input type="number" name="telephone">
            <button type="submit" name="btn" class="inputSUBMIT">Ajouter <i class="fa-solid fa-user-plus"></i> </button>      
        </form>
    </div>
</body>
</html>