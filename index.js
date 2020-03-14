$(document).ready(function(){

    $("#submit").click(function(){

        var file = $("#fileInput");
        var lenght = file[0].files.length;

        if(lenght != 0){

            upload();

        }else{

           alert("Please select a file ..")
        }


    });
        // File upload via Ajax
        function upload(){
            $("#uploadForm").on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = ((evt.loaded / evt.total) * 100);
                                $(".progress-bar").width(percentComplete + '%');
                                $(".progress-bar").html(percentComplete+'%');
                            }
                        }, false);
                        return xhr;
                    },
    
                    type: 'POST',
                    url: 'upload.php',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        $(".progress-bar").width('0%'); 
    
                    },
                    error:function(){
                        $('#uploadStatus').html('<div class="alert alert-danger"><strong>Images upload failed,</strong> please try again.</div>')
                    },
                    success: function(data){
                        $('#uploadForm')[0].reset();
                        $('#uploadStatus').html('<div class="alert alert-success"><strong>Sucessful</strong> File upload was successful.</div>')
                        $('.gallery').html(data);
                    }
                });
            });
        }


});
