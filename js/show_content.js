$(document).ready(function()
{
  //By Default we display the wrapper_roses
  $("#wrapper_roses").css("display","block");

  //Display or Not the content on click
  $("#main_nav a, header #logo").click(function(){
    //Retrieve data-id attribut
    var data_id = $(this).attr("data-id");
    // Array_id of element to display
    var array_id = {
      'composition_florale':'wrapper_composition_florale',
      'fleurs_de_saison':'wrapper_fleurs_de_saison',
      'fleurs_et_chocolat':'wrapper_fleurs_et_chocolat',
      'roses':'wrapper_roses',
      'orchidees':'wrapper_orchidees',
      'plantes':'wrapper_plantes'
    };

    for (var key in array_id)
    {
      if(key == data_id)
      {
        $("#"+array_id[key]).css("display","block");
      }
      else {
        $("#"+array_id[key]).css("display","none");
      }
    }
  });

});
