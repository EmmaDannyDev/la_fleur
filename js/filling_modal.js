$("#cards_container button").click(function(){
    var data_id = $(this).attr('data-id');
    var selector = '[data-id='+data_id+']';
    var title = $(selector+' .card-title').text();
    var description = $(selector+' [data-description]').html();
    var composition = $(selector+' [data-composition]').html();
    var image_viewer_src = $(selector+' img').attr('src');
    var image_viewer_alt = $(selector+' img').attr('alt');
    var additional_view_1_src = $(selector+' [data-additional-view] img:nth-child(1)').attr('src');
    var additional_view_1_alt = $(selector+' [data-additional-view] img:nth-child(1)').attr('alt');
    var additional_view_2_src = $(selector+' [data-additional-view] img:nth-child(2)').attr('src');
    var additional_view_2_alt = $(selector+' [data-additional-view] img:nth-child(2)').attr('alt');
    var additional_view_3_src = $(selector+' [data-additional-view] img:nth-child(3)').attr('src');
    var additional_view_3_alt = $(selector+' [data-additional-view] img:nth-child(3)').attr('alt');
    var additional_view_4_src = $(selector+' [data-additional-view] img:nth-child(4)').attr('src');
    var additional_view_4_alt = $(selector+' [data-additional-view] img:nth-child(4)').attr('alt');


    //-- Filling Modal - Title --
    $('#my_modal .modal-title').html(title);
    //-- Filling Modal - Body --
    $('#my_modal .modal-body #description').html(description);
    $('#my_modal .modal-body #composition').html(composition);
    //-- Filling Modal - Additional View --
    $('#my_modal .modal-body #additional_view img:nth-child(1)').attr('src',additional_view_1_src);
    $('#my_modal .modal-body #additional_view img:nth-child(1)').attr('alt',additional_view_1_alt);
    $('#my_modal .modal-body #additional_view img:nth-child(2)').attr('src',additional_view_2_src);
    $('#my_modal .modal-body #additional_view img:nth-child(2)').attr('alt',additional_view_2_alt);
    $('#my_modal .modal-body #additional_view img:nth-child(3)').attr('src',additional_view_3_src);
    $('#my_modal .modal-body #additional_view img:nth-child(3)').attr('alt',additional_view_3_alt);
    $('#my_modal .modal-body #additional_view img:nth-child(4)').attr('src',additional_view_4_src);
    $('#my_modal .modal-body #additional_view img:nth-child(4)').attr('alt',additional_view_4_alt);
    //-- Filling Modal - Image Viewer --
    $('#my_modal .modal-body #image_viewer img').attr('src',image_viewer_src);
    $('#my_modal .modal-body #image_viewer img').attr('alt',image_viewer_alt);
});
