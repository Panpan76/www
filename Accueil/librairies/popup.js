$(document).ready(function(){
  $('#popup').hide();
});


popupFormulaire = function(page){
  $('#popup').show();
  $('#popup').append('<h3>Ajouter un '+page+'</h3>');
  $('#popup').append('Nom : <input name="nom" type="text" /><br />');
  $('#popup').append('<button onclick="validerFormulaire(\''+page+'\')">Créer</button>');
}

validerFormulaire = function(type){
  nom = $('input[name="nom"]').val();
  $.post('scripts/creerProjet.php', {nom: nom}, function(data){
    $('#popup').hide();
  });
  console.log(type);
  console.log(nom);
}
