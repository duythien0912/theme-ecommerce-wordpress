document.onkeydown = function(e) {
        if ((e.ctrlKey && 
            (e.keyCode === 85 || 
             e.keyCode === 117 ))|| e.keyCode === 0) {
            return false;
        } else {
            return true;
        }

};

    var sumcart = 0;
    var cartarray = '';
setTimeout(function(){
    jQuery(function($) {
        var id = document.getElementsByClassName("price-pre");
        var ids = document.getElementsByClassName("production-content-pre");
        for (var i = id.length - 1; i >= 0; i--) {
            var x = parseInt(id[i].innerText.replace(/[^0-9\.]+/g, "").replace(/\./g,''));
            cartarray += ids[i].innerText;
            cartarray += 'brraryyay ';
            sumcart += x;
        }
        ;
        $(".item-text-total").prepend(sumcart.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        $(".order-total-text").prepend(sumcart.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    });
}, 200);
 jQuery(function($) {
    
    if (typeof $.session.get("imgsrc-session") !== "undefined") {
             $(".add-cart-div").append($.session.get("html-page-session"));
             $(".cart-page").append($.session.get("html-page-session"));
             $(".cb-counter-label").text( $.session.get("couter-session") );
    }
     size = $('.size-choose').text();
          $(document).on('click', 'html', function(e) {
         $('.add-cart-div').hide(200);
    });
     $(document).on('click', '.size-div', function(e) {
         e.preventDefault();
         $('.size-div .text-size-shop').hide();
         $(this).find('.text-size-shop').show();
         size = $(this).find('.text-size-shop').text();
         $(this).find('.text-size-shop').css('background-color', '#d9d9d9');
         $('.size-choose').text(size);
     });
     $('._add-to-cart-btn').on('click', function() {
         $(".cart-button").removeClass('shake_effect');
         setTimeout(function() {
             $(".cart-button").addClass('shake_effect')
         }, 1);
         var img = $(".entry-image-shop img:first").attr('src');
         var title = $(".entry-title").text();
         var price = $(".price-data").text();
         var content = $(".entry-content").text();
         if (size != '') {
         	 $('.error-choose').text('');
         	 $(".cb-counter-label").text(parseInt($(".cb-counter-label").text())+1);
             $.session.set("imgsrc-session", img);
             $.session.set("title-session", title);
             $.session.set("price-session", price);
             $.session.set("content-session", content);
             $.session.set("size-session", size);
             $.session.set("couter-session", $(".cb-counter-label").text());
             $(".cb-counter-label").text( $.session.get("couter-session") );
             $(".add-cart-div").append("<div class='production-pre'>" + "<img src='" + $.session.get("imgsrc-session") + "'>" + "<div class='production-content-pre'>" + "<div class='title-pre'>" + $.session.get("title-session") + "</div>" + "<div class='price-pre'>" + $.session.get("price-session") + "</div>" + "<div class='content-pre'>" + $.session.get("content-session") + "</div>" + "<div>Size: " +$.session.get("size-session")+"</div>"+"<div class='amount'> x"+1+"</div>" + "</div>" + "</div>");
             $.session.set("html-page-session", $(".add-cart-div").html());
         } else {
             $('.error-choose').text('please choose size');
         }
     });

     $('.cart-button').on('hover', function() {
         $('.add-cart-div').show(200);
     });
     $('.btn-next-cart').on('click', function() {
         $('.adress-page').slideDown(300);
     });
    $(document).keyup(function(e) {
      if (e.keyCode === 27) $('.adress-page').hide();   // esc
    });

    $( document).ready( function() {
    
        var userSubmitButton = document.getElementById( 'btn-submit-cart' );

        var adminAjaxRequest = function( formData, action ) {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: screenReaderText.adminAjax,
                data: {
                    action: action,
                    data: formData,
                    security: screenReaderText.security
                },
                success: function(response) {
                    if ( true === response.success ) {
                        alert( 'this was a success'+response.data );
                    } else {
                        alert( 'You Suck' );
                    }
                }
            });
        };

        $('.btn-submit-cart').on( 'click', function(e) {
            e.preventDefault();
            var payby = '';
            if ($('#checkboxinputcart').is(':checked')) {
                if ($('#checkboxinputcod').is(':checked')) {
                 payby += 'Credit card + COD';
            }
                 payby += 'Bank card/Credit card';
            }else{
            if ($('#checkboxinputcod').is(':checked')) {
                payby += 'COD'
            }
            }
            if ( $('#checkboxinputcart').is(':checked') || $('#checkboxinputcod').is(':checked')) {
                if( document.getElementById( 'visitor_name').value !== "" && document.getElementById( 'visitor_mobi').value !== "" && document.getElementById( 'visitor_address').value !== "" ){
                var formData = {
                    'name' : document.getElementById( 'visitor_name').value,
                    'mobi' : document.getElementById( 'visitor_mobi').value,
                    'city' : document.getElementById( 'visitor_city').value,
                    'county' : document.getElementById( 'visitor_county').value,
                    'ward' : document.getElementById( 'visitor_ward').value,
                    'address' : document.getElementById( 'visitor_address').value,
                    'note' : document.getElementById( 'visitor_note' ).value,
                    'shipby' : payby,
                    'price' : sumcart.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"),
                    'cartitem' : cartarray,
                };
                adminAjaxRequest( formData, 'process_user_generated_post' );
                }else{
                 $("#warningcart").html('Xin hãy nhập đủ thông tin cần thiết');
                }
            }else{
                 $("#warningcart").html('Xin hãy chọn cách thanh toán');
            }
        } );

    });


 });

