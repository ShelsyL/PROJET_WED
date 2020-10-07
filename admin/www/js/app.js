
$(function(){

  $('.delete').click(function(){
    if (!confirm('Etes-vous sur de vouloir supprimer cet enregistrement ?')){
      return false;
    }

  });

});
