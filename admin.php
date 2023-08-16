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
        session_start();
    ?>
    <header class="header">
        <div>
            <nav class="navbar">
                <div class="LOGO">ISET-KE</div>
                <div class="links">
                    <a href="acceuil.php">inscription</a>
                    <a href="acceuil.php#emploi">emploi du temps</a>
                    <a href="acceuil.php#info">info</a>
                    <a href="admin.php#admin">admin</a>
                </div>
            </nav>
        </div>
        <div class="main2">
            <div class="welcom" style="text-align: center;padding: 10px 0;"><span style="color:#8cd87e;">VOUS ETES LES
                    BIENVENUE MONSIEUR ADMIN !</span> <br> Cette interface est designe pour la login des admines du
                platforme . .</div>
            <div class="image" style="background-color: transparent !important;">
          
                <form method="POST" action="login.php"
                    style="width: 100%;height: 70%;background: #413737;display: flex;flex-direction: column;padding: 20px;margin-top: 25px;border-radius: 5px;">
                    <label style="font-size: 21px;display: flex;margin-bottom: 5px;">NOM :</label>
                    <input
                        style="margin-bottom: 25px;height: 40px;font-size: 17px;padding: 5px;border: none;border-radius: 2px;"
                        type="text" name="name" placeholder="entre ton nom..">
                    <label style="font-size: 21px;display: flex;margin-bottom: 5px;">PASSWORD :</label>
                    <input
                        style="margin-bottom: 25px;height: 40px;font-size: 17px;padding: 5px;border: none;border-radius: 2px;"
                        type="password" name="passADMIN" placeholder="entre password..">
                    <button style="height: 50px;font-size: 18px;cursor:pointer;width: 120px;margin: auto;margin-bottom: 5px;background: #97ba97;color: antiquewhite;font-family: cursive;" type="submit"
                        name="entre">ENTRE</button>
                </form>
            </div>
        </div>
    </header>
</body>

</html>