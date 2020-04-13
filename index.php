<?php include('menu.php') ?>

    <div class="">
        <div class="position-relative text-center text-light" style="top: 0px;">
            <h1 style="position:absolute; top:45%; width:100%; font-style:italic">"Révélez votre vrai potentiel grâce à la séduction"</h1>
            <img src="images/caro1.jpg" class="w-100">
        </div>
    </div>
      <script type="text/javascript">
        $(window).on('load',function(){
            $('#exampleModal').modal('show');
        });
    </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLabel">Entrer Entrez votre email pour recevoir gratuitement "Construire une carrière de Freelance stable et rentable"</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="merci.php" method="get">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
            <small id="emailHelp" class="form-text text-muted">Vous recevrez un email par jour pendant 7 jours - puis vous recevrez ma newsletter hebdomadaire. Vos informations ne seront jamais cédées à des tiers.</small>
        </div>
        <style data-emotion-css="1yauslj">.css-1yauslj{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;border-style:solid;border-width:1px;text-align:center;font-family:'Lato',sans-serif;text-shadow:none;-webkit-transition:color 0.2s linear,background 0.2s linear,border-color 0.2s linear, text-shadow 0.2s linear;transition:color 0.2s linear,background 0.2s linear,border-color 0.2s linear, text-shadow 0.2s linear;-webkit-text-decoration:none;text-decoration:none;width:100%;font-weight:bold;min-height:48px;min-width:96px;padding:14px 24px;font-family:Roboto;}.css-1yauslj,.css-1yauslj:focus,.css-1yauslj:active{border-color:rgb(254,210,0);background:rgb(254,210,0);color:rgb(0,0,0);}.css-1yauslj:hover{background-color:rgb(203,168,0);border-color:rgb(203,168,0);color:rgb(0,0,0);}</style>
        <button type="submit" class="css-1yauslj">Recevoir</button>
    </form>
  </div>
  <div class="modal-footer">
  </div>
</div>
</div>
</div>
    <div class="container">
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=QueenSeduction;charset=utf8', 'root', '');
                $reponse = $bdd->query('SELECT * FROM Articles ORDER BY Date DESC');
                $donnees = $reponse->fetch();
                ?>
                <div style="margin-top: 20px; margin-bottom: 20px;">
                    <div id="Major_Content">
                            <div id="Major_Content_Left">
                                <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><img src=<?php echo '"images/' . $donnees['image'] .'"'?>></a>
                            </div>
                            <div id="Major_Content_Right">
                                <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><h1><?php echo $donnees['nom']; ?></h1></a>
                                <p><?php echo $donnees['description'];?></p>
                            </div>
                    </div>
                </div>
                <?php

                while ($donnees = $reponse->fetch())
                {
                ?>
                <div class="Minor_Content">
                    <div class="Minor_Content_Left">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><img src=<?php echo '"images/' . $donnees['image'] .'"'?>></a>
                    </div>
                    <div class="Minor_Content_Right">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><h1><?php echo $donnees['nom']; ?></h1></a>
                        <p><?php echo $donnees['description'];?></p>
                    </div>
                </div>
                <?php
                }

                $reponse->closeCursor();
                }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            } 
        ?>
        <div class="Minor_Content" style="margin-bottom : 20px; margin-top: 20px;">
            <div class="Minor_Content_Left">
                <a><img src="images/femme_fatale.jpg"></a>
            </div>
            <div class="Minor_Content_Right">
                <h1>Contrôler l'Éjaculation et Durer Longtemps au Lit</h1>
                <p>Il n’y a pas de remède miracle pour durer plus longtemps au lit ! Être plus performant au lit ne peut ...</p>
            </div>
        </div>
    </div>
    <div id="color">
<?php include('footer.php'); ?>