<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Risk Credit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1 class="tt">Bienvenue sur notre site </h1>
    <form id="form" action="calcul.php" method="post">
        <p>Veuillez entrer le profil du client</p>

        <div class="form-group">
           <label>Age</label>
           <br />
           <div class="input-group">
               <input type="number" name="age" placeholder="Entrez l'age du client"/>
            </div>
        </div>

        <div class="form-group">
            <label >Revenu</label>
            <br />
            <div class="input-group">
                <input type="number" name="revenu" placeholder="Entrez le revenu"/>
            </div>
        </div>
           
        <div class="form-group">
           <label>Habitation</label>
           <br />
           <div class="input-group">
                <select name="habitation"> 
                    <option value="location">Location</option>
                    <option value="hypotheque">Hypothèque</option>
                    <option value="proprietaire">Propriétaire</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
           <label>Durée d'activité (en mois)</label>
           <br />
            <div class="input-group">
                <input type="number" name="activity" placeholder="Entrez la durée d'activité"/>
            </div>
        </div>
        
        <div class="form-group">
           <label>Motif</label>
           <br/>
            <div class="input-group">
                <select name="motif" > 
                    <option value="education">Education</option>
                    <option value="medical">Médical</option>
                    <option value="entreprise">Entreprise</option>
                    <option value="consolidation">Consolidation de dette</option>
                    <option value="habitat">Amélioration de l'habitat</option>
                    <option value="personnel">Personnel</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
           <label>Montant prêté</label>
           <br />
            <div class="input-group">
                <input type="number" name="montprete" placeholder="Entrez le montant prêté"/>
            </div>
        </div>

        <div class="form-group">
            <label>Taux d'intérêt</label>
            <br />
             <div class="input-group">
                 <input type="number" name="taux" placeholder="Entrez le taux d'intérêt"/>
             </div>
        </div>
        <button type="submit" class="btn btn-default" name="send">Envoyer</button>
     </form> 
     <!-- Code écrit et déployé par Fabrice TOKOUDAGBA en 2022 -->
</body>
</html>