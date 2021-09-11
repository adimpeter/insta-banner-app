$(document).ready(function(){
    var promoOptionsDisplay = $('.promo-options-display');
    var discountOptionsDisplay = $('.discount-options-display');

    $('.promo-add-btn').on('click', function(){
        promoOptionsDisplay.toggleClass('show-element');
        discountOptionsDisplay.removeClass('show-element');
    });

    $('.discount-add-btn').on('click', function(){
        discountOptionsDisplay.toggleClass('show-element');
        promoOptionsDisplay.removeClass('show-element');
    });

    $('#instagramHandleInput').on('keyup', function(e){
        if($(this).val().length > 0){
            $('.insta-handle-banner').text('@' + $(this).val());
        }
    });

    $('#productTextInput').on('keyup', function(){
        var input           = $(this).val();
        var maxWordCount    = 30;
        var wordCount       = input.length;

        var wordsLeft       = maxWordCount - wordCount;

        $('.word-count').text(wordsLeft);

        if(wordsLeft <= 0){
            $(this).val(input.slice(0, -1));
        }

        var text= $(this).val();
        var textArray = text.split(' ');
        var editedtext = ``;

        textArray.forEach((item, index)=>{
            var styleClass = `class="banner-text-primary"`;
            if(index % 2 == 0){
                editedtext += `<span>${item}</span>`;
            }
            else{
                editedtext += `<span ${styleClass}>${item}</span>`;
            }
        });

        $('.banner-text-container p').html(editedtext);
    });

    $('#createBanner').on('click', function(){
        var filename = $('#filename').val();
        var discount = $('.discount-inner-banner').text();
        var instagramHandle = $('.insta-handle-banner').text();
        var promo = $('.discount-inner-banner').text();
        var productText = $('#productTextInput').val();
        var imageData = $('#imageData').val();

        $('.process-overlay').removeClass('hide');
        $('.loading').removeClass('hide');
        $('.process-overlay .text').text('Processing...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = (evt.loaded / evt.total) * 100;
                        //Do something with upload progress here
                    }
               }, false);
               return xhr;
            },
            type: 'POST',
            url: "/generate-banner",
            dataType: 'json',
            data: {
                file_name: filename,
                discount: discount,
                promo: promo,
                instagram_handle: instagramHandle,
                product_text: productText,
                image_id: imageData
             },
            success: function(data){
                var bannerDownLoadPath = data.downloadPath;
                $('.downloadbanner').attr('href', bannerDownLoadPath).removeClass('hide');

                $('.process-overlay').removeClass('hide');
                $('.loading').addClass('hide');
                $('.process-overlay .text').text('Banner ready!');

            },
            error: function(data){

                $('.process-overlay').removeClass('hide');
                $('.loading').addClass('hide');
                $('.process-overlay .text').text('Oops Something went wrong!');
                
            }
        });
    });

    $('.close-overlay').on('click', function(e){
        $('.process-overlay').addClass('hide');
    });

    $('#imageInput').on('change', function(){
        var form = $("#uploadImageForm");
        var formData = new FormData(form[0]);

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = (evt.loaded / evt.total) * 100;
                        //Do something with upload progress here
                    }
               }, false);
               return xhr;
            },
            type: 'POST',
            url: "/upload",
            dataType: 'json',
            data: formData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,   // tell jQuery not to set contentType
            success: function(data){
                fullImagePath = data.filepath + data.filename;
                $('#pic-display-container img').attr('src', `${fullImagePath}`);
                $('#filename').val(data.filename);
                $('#imageData').val(data._img_data);
                $('.downloadbanner').addClass('hide');
                console.log(fullImagePath);
            }
        });
    });


    $('.add-value-btn').on('click', function(){
        var value = $(this).text();
        $('.discount-inner-banner').text(value);
    })
});