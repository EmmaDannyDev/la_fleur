$('#additional_view img').click(function(){
  var additional_view_src = $(this).attr('src');
  var additional_view_alt = $(this).attr('alt');

  //-- Filling Image Viewer --
  $('#image_viewer img').attr('src',additional_view_src);
  $('#image_viewer img').attr('alt',additional_view_alt);
});
