<?php
     include("idcom.php");
   
       if(!empty($_POST['titre']) AND !empty($_POST['descri_ption']) AND !empty($_POST['img_prod']) AND !empty($_POST['lien_projet']) 
       AND !empty($_POST['lien_github'])){

        $titre = htmlspecialchars($_POST['titre']);
        $descri_ption = htmlspecialchars($_POST['descri_ption']);
        $img_prod = htmlspecialchars($_POST['img_prod']);
        $lien_projet = htmlspecialchars($_POST['lien_projet']);
        $lien_github = htmlspecialchars($_POST['lien_github']);

        $requete = $idcom->prepare('INSERT INTO production (titre, descri_ption, img_prod, lien_projet, lien_github) VALUES(?, ?, ?, ?, ?)');
        $requete ->execute(array($titre, $descri_ption, $img_prod, $lien_projet, $lien_github));
        
       }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend>Formulaire</legend>
            <table>
                <tr>
                    <td>Titre:</td>
                    <td><input type="text" name="titre"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><textarea  name="descri_ption"></textarea></td>
                </tr>
                <tr>
                    <td>Images:</td>
                    <td><input type="file" name="img_prod" accept="image/gif, image/jpeg, image/png"></td>
                </tr>
                <tr>
                    <td>Lien du projet:</td>
                    <td><input type="text" name="lien_projet"></td>
                </tr>
                 <tr>
                    <td>Lien_github:</td>
                   <td><input type="text" name="lien_github"></td>
                </tr>

                <tr>
                    
                    <td><input type="reset" value="Effacer"></td>
                    <td><input type="submit" nom="envoyer"></td>
                </tr>

            </table>
        </fieldset>
    </form>
    
</body>
</html>