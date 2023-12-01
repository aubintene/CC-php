
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">  
    <title>Taxis</title>
</head>
<body>
    <form method="POST" action="index.php" enctype="multipart/form-data">
            <h3>Gestion des Taxis </h3>
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="name" name="name" >
            </div>
            <div>
                <label for="immatriculation" >immatriculation</label>
                <input type="number" id="immatriculation" name="immatriculation">
            </div>
            <div>
                <label for="maison" >maison de production :</label>
                <input type="text" id="maison" name="maison">
            </div>
            <div>
                <label for="type">type</label>
                <input id="type" type="text" name="type">
            </div>
            <div>
                <label for="couleur" > couleur: </label>
                <label for="couleur" >rouge</label>
                <input type="checkbox" id="couleur" name="couleur" value="rouge">
                <label for="couleur" >Autres</label>
                <input type="checkbox" id="couleur" name="couleur" value="Autres"><br/>
            </div>
            <div>
                <label for="Origine" >Origine</label>
                <select id="Origine" name="Origine">
                    <option value="Cameroun">Cameroun</option>
                    <option value="France">France</option>
                </select><br/>
            </div>
            <div>
                <label for="domaine">Particularite:</label>
                <label for="domaine" >rapidite</label>
                <input type="checkbox" id="domaine" name="domaine" value="informatique">
                <label for="domaine" >capacite</label>
                <input type="checkbox" id="domaine" name="domaine" value="gestion">
                <label for="domaine" >parametres</label>
                <input type="checkbox" id="domaine" name="domaine" value="pédagogie"><br/>
            </div>
            <div>
                <input type="file" name="picture"><br/>
            </div>
            <div class="boutons">
                <input type="submit" value="Envoyer">
                <input type="button" name="annuler" value="Annuler">
            </div>
    </form>
</body>
</html>