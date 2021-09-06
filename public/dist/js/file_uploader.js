$(document).on('change', "#customFile", function (e) {
    e.preventDefault();
    input = document.getElementById('customFile');
    
    fd = new FormData();
    fd.append('_token', $('input[name="_token"]').val());
    for (var i = 0; i < input.files.length; i++) {
        fd.append('userFiles[' + i + ']', input.files[i]);
    }

    $.ajax({
        url: window.base_url()+"/admin/news/image_upload",
        data: fd,
        processData: false,
        contentType: false,

        type: 'POST',
        xhr: function () {
            var xhr = $.ajaxSettings.xhr();
            xhr.upload.onprogress = function (e) {
                // For uploads
                if (e.lengthComputable) {

                    pro = Math.ceil((e.loaded * 100) / e.total);
                    //console.log(pro);
                    $('#progress').text("Uploading... "+ pro + "%");
                    if (pro == 100) {
                        $('#progress').html("&nbsp;");
                    }
                }
            };
            return xhr;
        },
        success: function (data) {

            // $('#displaydata tr:nth-child(' + ind_img + ') td:nth-child(' + curlcol + ') div.img_list').html(data);
            //Reactivate .add_img button
            // $('#displaydata tr:nth-child(' + ind_img + ') td:nth-child(' + curlcol + ') button.add_img').attr("disabled", false);
        }
    }).done((resp)=>{
        // console.log(resp);
        
        $('#file_list').val(JSON.stringify(Object.assign({}, resp.data)));
        $('#default_thumbnail').remove();
        
        for (i = 0; i < resp.data.length; i++) {
            
            image_name = resp.data[i];
            console.log(image_name);
            thumb = $('#hidden_thumbnail').clone();
            thumb.removeAttr('id');
            thumb.removeAttr('hidden');
            thumb.children('a').attr('href', base_url() + resp.path + image_name);
            thumb.find('img').attr('src', base_url() + resp.path + image_name);

            $('#thumbnail_wrapper').append(thumb);
        }
    });
    //RESET input value
    input.value = null;
});