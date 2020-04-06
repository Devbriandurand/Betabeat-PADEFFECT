<?php ob_start(); ?>
    
    <h1 id="connexH1">CONNEXION & S'ENREGISTRER</h1>
        <form class="connexForm" action="index.php?action=connexion" method="POST">
                <table id="tableLogin">
                    <tbody>
                        <tr class="LoginTr">
                            <td>
                                <label id="labelLogin" for="username"><strong>LOGIN</strong></label>
                            <td>

                            <td>
                                <input id="inputLogin" type="text" name="username" placeholder="Votre identifiant">
                            </td>
                        </tr>
                            </td></td>
                            </td></td>
                        <tr class="LoginTr">
                            <td>
                                <label id="labelLogin"><strong>PASSWORD</strong></label>
                            </td>
                            <td>
                                <input id="inputLogin_2" type="password" name="mdp" placeholder=" Votre mot de passe">
                            </td>
                        
                            <td class="tdButtLogin">
                                <input id="buttLogin" type="submit" name="submitConnexion" value="connexion">
                            </td>
                        </tr>
                    </tbody>    

                </table>

                    <div class="containLinkRegister">
                            <a id="connexLink" href="index.php?action=inscription">
                                <strong>Vous n'êtes pas encore membre ?</strong>
                            </a>
                    </div>
        </form>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
