<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input,select{
            margin: 15px;
            padding:6px;
            border-radius:10px;
        }
        fieldset{
            width:55px ;
            text-align:center;
            border-color:orange;
            border-radius:10px;
        }
        [type="submit"]{
            width: 200px;
            background-color:orange;
        }
        legend{
            color:orange;
        }
        form{
            display: flex;
            justify-content: center;
        }
        ul{
            position: relative;
            top:-300px;
            left:800px;
        }
    </style>
</head>
<body>
    <form action="" method="Post">
        <fieldset>
            <legend>Nouvel utilisateur</legend>
            <label>Civilité</label><br>
            <select name="civ">
                <option value="Mme" <?php if (isset($_POST["civ"]) and $_POST["civ"]=="Mme"){echo "selected";} ?>>Mme</option>
                <option value="Me" <?php if (isset($_POST["civ"]) and $_POST["civ"]=="Me"){echo "selected";} ?>>Me</option>
            </select><br>
            <label>Nom</label><br>
            <input type="text" name="text1" id="text1" value="<?php if (isset($_POST["text1"])){echo $_POST["text1"];} ?>"><br>
            <label>Prenom</label><br>
            <input type="text" name="text2" id="text2" value="<?php if (isset($_POST["text2"])){echo $_POST["text2"];} ?>"><br>
            <label>Email</label><br>
            <input type="text" name="email" id="email" value="<?php if (isset($_POST["email"])){echo $_POST["email"];} ?>"><br>
            <label>Mot de passe</label><br>
            <input type="password" name="pass1" value="<?php if (isset($_POST["pass1"])){echo $_POST["pass1"];} ?>"><br>
            <label>Confirmer le mot de passe</label><br>
            <input type="password"  name="pass2" value="<?php if (isset($_POST["pass2"])){echo $_POST["pass2"];} ?>"><br>
            <input type="submit" value="Submit" name="btn">
        </fieldset>
    </form>
    <ul style='color:red'>
        <?php
        $test=true;
        if ( empty($_POST["civ"])){
            echo "<li > Le champ “civilité” est obligatoire</li>";
            $test=false;
        }
        if (empty($_POST["text1"])){
            echo "<li> Le champ “Nom” est obligatoire</li>";
            $test=false;
        }
        if (empty($_POST["text2"])){
            echo "<li> Le champ “prenom” est obligatoire</li>";
            $test=false;
        }
        if (empty($_POST["email"])){
            echo "<li> Le champ “email” est obligatoire</li>";
            $test=false;
        }
        if (empty($_POST["pass1"]) or empty($_POST["pass2"])){
            echo "<li> Le champ “Mot de passe” est obligatoire</li>";
            $test=false;
        }
        if (($_POST["pass1"]) != ($_POST["pass2"])){
            echo "<li> Mots de passes non identiques</li>";
            $test=false;
        } 
        if ($test and isset($_POST["btn"])){
            header("Location:EX1.affichage.php?");
        }
        ?>
    </ul>
</body>
</html>