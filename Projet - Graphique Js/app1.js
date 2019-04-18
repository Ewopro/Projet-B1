//-------------------------------------------------------------------Fonction pour le formulaire ------------------------------------------------------------\\

$(document).ready(function() {
              $('#formtest').submit(function(event) {
                            if ($('#Nom').val() != "" && $('#Prenom').val() != "" && $('#email').val() != "") {
                                alert("Votre formulaire c'est bien Envoyer !");
                            } else {
   								alert("Votre formulaire ne c'est pas Envoyer ! il semblerait que des champs ne son par remplis ! "); 
                            }
                            return false;
            });
});

//---------------------------------------------------------------------------- Fin ---------------------------------------------------------------------------\\
