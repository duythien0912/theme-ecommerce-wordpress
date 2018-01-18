jQuery(function($) {
    
      var file_frame;
    
      $(document).on('click', '#gallery-metabox a.gallery-add', function(e) {
    
        e.preventDefault();
    
        if (file_frame) file_frame.close();
    
        file_frame = wp.media.frames.file_frame = wp.media({
          title: $(this).data('uploader-title'),
          button: {
            text: $(this).data('uploader-button-text'),
          },
          multiple: true
        });
    
        file_frame.on('select', function() {
          var listIndex = $('#gallery-metabox-list li').index($('#gallery-metabox-list li:last')),
              selection = file_frame.state().get('selection');
    
          selection.map(function(attachment, i) {
            attachment = attachment.toJSON(),
            index      = listIndex + (i + 1);
    
            $('#gallery-metabox-list').append('<li style="display: inline-block;"><input type="hidden" name="vdw_gallery_id[' + index + ']" value="' + attachment.id + '"><img class="image-preview" src="' + attachment.sizes.thumbnail.url + '"><a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image" style="display: table-cell;">Change image</a><br><small><a class="remove-image" href="#">Remove image</a></small></li>');
          });
        });
    
        makeSortable();
        
        file_frame.open();
    
      });
    
      $(document).on('click', '#gallery-metabox a.change-image', function(e) {
    
        e.preventDefault();
    
        var that = $(this);
    
        if (file_frame) file_frame.close();
    
        file_frame = wp.media.frames.file_frame = wp.media({
          title: $(this).data('uploader-title'),
          button: {
            text: $(this).data('uploader-button-text'),
          },
          multiple: false
        });
    
        file_frame.on( 'select', function() {
          attachment = file_frame.state().get('selection').first().toJSON();
    
          that.parent().find('input:hidden').attr('value', attachment.id);
          that.parent().find('img.image-preview').attr('src', attachment.sizes.thumbnail.url);
        });
    
        file_frame.open();
    
      });
    
      function resetIndex() {
        $('#gallery-metabox-list li').each(function(i) {
          $(this).find('input:hidden').attr('name', 'vdw_gallery_id[' + i + ']');
        });
      }
    
      function makeSortable() {
        $('#gallery-metabox-list').sortable({
          opacity: 0.6,
          stop: function() {
            resetIndex();
          }
        });
      }
    
      $(document).on('click', '#gallery-metabox a.remove-image', function(e) {
        e.preventDefault();
    
        $(this).parents('li').animate({ opacity: 0 }, 300, function() {
          $(this).remove();
          resetIndex();
        });
      });
    
      makeSortable();
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var x = 0; //initlal text box count
        x = $(wrapper).children("div").length;
      $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          $(".free_size_after").remove();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('<div><input type="text" id="_size_value" name="_size_value[' + x + ']" value="" size="22" placeholder="text in this"/> <span class="remove_field button" style="float: right;">remove</span><br></div>'); //add input box
          }
      });
    
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); 
          $(this).parent('div').remove(); x;
          max_fields++;
      });
      $(".free_size_button").click(function(e){
          e.preventDefault();
          $(wrapper).empty();
         // x = 0;
         x = 1;
          $(wrapper).append('<div class="free_size_after"><input type="text" id="_size_value" name="_size_value[1]" value="Free size" size="22" /> <span class="remove_field button" style="float: right;">remove</span><br></div>');
      });
      

    });

    
