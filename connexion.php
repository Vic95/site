<?php
include('header.php');
    ?>
<div id="form">
    <form action="post" action="#">

        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" id="pseudo" autofocus><br>
        <br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Connexion">

    </form>
</div>
<a href="inscription.php"><button href="inscription.php">Pas encore inscrit ?</button></a>



<?php
    include('footer.php')
?>
