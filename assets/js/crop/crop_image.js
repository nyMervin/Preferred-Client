$(document).ready(function(){


  $image_crop = $('#image_demo_edit').croppie({

    enableExif: true,

    viewport: {

      width:225,

      height:225,


      type:'circle' 

    },

    boundary:{

      width:400,

      height:400

    }

  });


  $('#upload_file_image_thum_edit').on('change', function(){

      var reader = new FileReader();
      reader.onload = function (event) {
      $image_crop.croppie('bind', {

        url: event.target.result

      }).then(function(){

        console.log('jQuery bind complete');

      });

    }
     reader.readAsDataURL(this.files[0]);

    $('#uploadimageModal_edit').modal('show');

  });



  $('.crop_image_edit').click(function(event){

$('.crop_image_edit').html('Image Uploading <img src="assets/user/images/tenor1.gif" style="width:50px; height:30px; padding:10px;">');
$('.crop_image_edit').attr('disabled',true);
    $image_crop.croppie('result', {

      type: 'canvas',

      size: 'viewport'

    }).then(function(response){

      $.ajax({

        url: 'user/update_image',

        type: "POST",

        data:{"image": response},

        success:function(data)

        {
 $('.crop_image_edit').html('Crop Image');
 $('.crop_image_edit').attr('disabled',false);

          $('#uploadimageModal_edit').modal('hide');

          $('.image_preview').empty();
          $('.image_preview').html(data);

          console.log(data);

        }

      });

    })

  });



});