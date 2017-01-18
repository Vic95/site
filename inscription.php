<?php
    include('header.php');
?>
<div id="form_insc">
    <form action="profile.php" method="post">

        <label for="id">Identifiant</label>
        <input type="text" name="id" id="id" autofocus><br>
        <br>
        <label for="email">Nom</label>
        <input type="mail" name="mail" id="mail" ><br>
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp"><br>
        <br>
        <label for="mdp_conf">Confirmation <br>du mot de passe</label>
        <input type="password" name="mdp_conf" id="mdp_conf">
        <br>
        <input type="submit" value="Inscription">


    </form>
</div>
<?php
    include('footer.php')
?>