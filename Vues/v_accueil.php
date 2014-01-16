<?php
 include_once 'src/header.php';
?>

<script type="text/javascript">
    window.name="Accueil";
    alert (window.name);
</script>
<body>
    <h1>Bienvenue dans l'application</h1>
    
    <div id='menu_horiz'>
        <h2>Que voulez-vous faire ?</h2>
        <script type="text/javascript">
            
            function Ouvrir() {
                var win;
                win = window.open("","Afficher");
                if (win.location=="about:blank"){
                    win.location="Controlers/c_contacts.php?action=afficher";
                }
                else{
                    win.onFocus();
                }
            }
            function Verifier() {
                var win;
                win=window.open("","Ajouter");
                //Test la location si _blank modifier location
                if (win.location=="about:blank") {
                    win.location="Controlers/c_contacts.php?action=ajouter";
                }
                else{
                    win.focus();
                }
            }
            function onOpenTab()
            {
                
                /*var tabs = require('sdk/tabs');
                for (tab in tabs){
                console.log(tab.title);
                echo("titre ".tab.title);
                }*/
            }
        </script>
        <ul>
            
            <li><a id="myLink" href="#" onclick="Ouvrir()">Liste des contacts</a></li>
            <li><a id="myLink" href="#" onclick="Verifier()">Ajouter un contact</a></li>
        </ul>
    </div>
    <br /><br /><br />
</body>


<!---->