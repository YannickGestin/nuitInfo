
<?php

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="voiture.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <meta charset="utf-8">
    <title> Nuit de l'info</title>
</head>

<body>
<div class="page-header">
    <h1 class="titre1">Mojito, Auto, Dodo</h1>
    <div class="description"> Bien, la soirée commence et personne ne veut se sacrifier pour ramener en carosse la bande de pochetron que vous êtes ? Choisissez l'un des jeux que nous mettons à votre disposition et laissez le skill décider ? Vous n'êtes pas joueur ? Laissez faire le hasard :)  </div>
    <div class="return"><a href="accueil.html"><img src="../images/return2.png" alt="return_home"></a></div>
</div>

<div class="container">
    <div id="main" class="row">
        <h2><u>Test d'alcoolémie</u></h2>
        <!--<form>-->
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="form-group">
                <label id="categorie" class="control-label col-md-5">Bière</br>25 cl</label>
                <div class="input-group number-spinner col-md-7">
	              <span class="input-group-btn">
	                <a class="btn btn-danger" data-dir="moins" onclick="diminuer('biere', 'verresBiere');"><span class="glyphicon glyphicon-minus"></span></a>
	              </span>
                    <input type="text" class="form-control" size="2" value="0" id="biere">
                    <span class="input-group-btn">
	                <a class="btn btn-info" data-dir="plus" onclick="augmenter('biere', 'verresBiere');"><span class="glyphicon glyphicon-plus"></span></a>
	              </span>
                </div>
            </div>
            <div id="verresBiere" class="aligner">
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="form-group">
                <label id="categorie" class="control-label col-md-5">Vin</br>10 cl</label>
                <div class="input-group number-spinner col-md-7">
	              <span class="input-group-btn">
	                <a class="btn btn-danger" data-dir="moins" onclick="diminuer('vin', 'verresVin');"><span class="glyphicon glyphicon-minus"></span></a>
	              </span>
                    <input type="text" class="form-control" size="2" value="0" id="vin">
                    <span class="input-group-btn">
	                <a class="btn btn-info" data-dir="plus" onclick="augmenter('vin', 'verresVin');"><span class="glyphicon glyphicon-plus"></span></a>
	              </span>
                </div>
            </div>

            <div id="verresVin" class="aligner">
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="form-group">
                <label id="categorie" class="control-label col-md-5">Alcool doux</br>6 cl</label>
                <div class="input-group number-spinner col-md-7">
	              <span class="input-group-btn">
	                <a class="btn btn-danger" data-dir="moins" onclick="diminuer('alcoolDoux', 'verresAD');"><span class="glyphicon glyphicon-minus"></span></a>
	              </span>
                    <input type="text" class="form-control" size="2" value="0" id="alcoolDoux">
                    <span class="input-group-btn">
	                <a class="btn btn-info" data-dir="plus"  onclick="augmenter('alcoolDoux', 'verresAD');"><span class="glyphicon glyphicon-plus"></span></a>
	              </span>
                </div>
            </div>

            <div id="verresAD" class="aligner">
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="form-group">
                <label id="categorie" class="control-label col-md-5">Alcool fort</br>3 cl</label>
                <div class="input-group number-spinner col-md-7">
	              <span class="input-group-btn">
	                <a class="btn btn-danger" data-dir="moins" onclick="diminuer('alcoolFort', 'verresAF');"><span class="glyphicon glyphicon-minus"></span></a>
	              </span>
                    <input type="text" class="form-control" size="2" value="0" id="alcoolFort">
                    <span class="input-group-btn">
	                <a class="btn btn-info" data-dir="plus" onclick="augmenter('alcoolFort', 'verresAF');"><span class="glyphicon glyphicon-plus"></span></a>
	              </span>
                </div>
            </div>

            <div id="verresAF" class="aligner">
            </div>
        </div>

        <div>
            </br></br>
            <button class="btn btn-success center-block" onclick="calculer();">Puis-je prendre la route ?</button>
        </div>
        <!--</form>-->

        </br></br></br></br></br></br></br></br>
        <h2><u>Je suis conducteur</u></h2>

        <form method="post" action="addCovoiturage.php">
            <div class="input-group">
						<span class="input-group-addon">
						  <span class="glyphicon glyphicon-flag"></span>
						</span>
                <input id="lieuDepart" type="text" class="form-control" placeholder="Départ">
            </div>

            <div class="input-group">
						<span class="input-group-addon">
						  <span class="glyphicon glyphicon-flag"></span>
						</span>
                <input id="lieuArrivee" type="text" class="form-control" placeholder="Arrivée">
            </div>

            <div class="input-group">
						<span class="input-group-addon">
						  <span class="glyphicon glyphicon-time"></span>
						</span>
                <input id="dateDepart" type="time" class="form-control" value="00:00">
            </div>

            <div class="input-group">
						<span class="input-group-addon">
						  <span class="glyphicon glyphicon-user"></span>
						</span>
                <input id="nom" type="text" class="form-control" placeholder="Nom">
            </div>

            <div class="input-group">
						<span class="input-group-addon">
						  <span class="glyphicon glyphicon-phone"></span>
						</span>
                <input id="telephone" type="text" class="form-control" placeholder="Numéro de téléphone">
            </div>
            <input type="submit" value="Envoyer"" />
            <!-- <button id="ajTrajet" class="btn btn-success center-block" onclick="ajoutTrajet();">Ajouter mon trajet</button> -->
        </form>

        <div id = "trajets">
        </div>
    </div>
</div>

<footer class="footer">
    <div id="Contacts">Team semicolon</div>
</footer>
</body>
</html>


<script text="text/javascript">

    function calculer()
    {
        var biere = document.getElementById('biere').value;
        var vin = document.getElementById('vin').value;
        var alcoolDoux = document.getElementById('alcoolDoux').value;
        var alcoolFort = document.getElementById('alcoolFort').value;

        var tauxBiere = (biere*250*0.05)/(0.65*169);
        var tauxVin = (vin*100*0.12)/(0.65*169);
        var tauxAlcoolDoux = (alcoolDoux*60*0.18)/(0.65*169);
        var tauxAlcoolFort = (alcoolFort*30*0.40)/(0.65*169);

        if((tauxBiere + tauxVin + tauxAlcoolDoux + tauxAlcoolFort) > 0.25)
        {
            alert("Vous ne pouvez pas conduire");
            document.getElementById("depart").disabled = true;
            document.getElementById("arrivee").disabled = true;
            document.getElementById("heure").disabled = true;
            document.getElementById("nom").disabled = true;
            document.getElementById("tel").disabled = true;
            document.getElementById("ajTrajet").disabled = true;
        }

        else
        {
            alert("Vous pouvez conduire");
            document.getElementById("depart").disabled = false;
            document.getElementById("arrivee").disabled = false;
            document.getElementById("heure").disabled = false;
            document.getElementById("nom").disabled = false;
            document.getElementById("tel").disabled = false;
            document.getElementById("ajTrajet").disabled = false;
        }
    }

    /*function ajoutTrajet()
    {
        console.log('debut fonction trajet');
        var departT = document.getElementById(depart).value;
        var arriveeT = document.getElementById(arrivee).value;
        var heureT = document.getElementById(heure);

        console.log(departT);
        console.log(arriveeT);
        console.log(heureT);

        document.getElementById("trajets").innerHTML = "Vous allez de " + departT + " à " + arriveeT + " en partant à " + heureT + "</br>";
    } */



    /* + et - incrementent le nombre de verres */

    function augmenter(id, div)
    {
        var countEl = document.getElementById(id);
        if(countEl.value < 5)
        {
            countEl.value++;
            var noeud = document.createElement("IMG");
            if(div == 'verresBiere')
            {
                noeud.setAttribute("src", "./images/verre-biere.png");
                noeud.setAttribute("id", "b"+countEl.value)
            }

            else if(div == 'verresVin')
            {
                noeud.setAttribute("src", "./images/verre-vin.png");
                noeud.setAttribute("id", "v"+countEl.value)
            }

            else if(div == 'verresAD')
            {
                noeud.setAttribute("src", "./images/verre-alcool-doux.png");
                noeud.setAttribute("id", "ad"+countEl.value)
            }

            else if(div == 'verresAF')
            {
                noeud.setAttribute("src", "./images/verre-alcool-fort.png");
                noeud.setAttribute("id", "af"+countEl.value)
            }


            noeud.setAttribute("height", "60");

            document.getElementById(div).appendChild(noeud);
        }
    }
    function diminuer(id, div)
    {
        var countEl = document.getElementById(id);

        if(countEl.value > 0)
        {
            var element = document.getElementById(div);
            element = element.firstChild;
            element.remove();

            countEl.value--;
        }
    }

</script>