@extends('backendmaster.master') 
@section('title','Alliance | Page Create') 
@section('content') @php 
$page = \App\PagemenuModel::whereis_del(0)->wheretype(0)->get();
@endphp
<link rel="stylesheet" href="{{ url('css/cropper.min.css') }}">
<link rel="stylesheet" href="{{ url('css/main.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ url('js/cropper.min.js') }}"></script>
<script src="{{ url('js/Global.js') }}"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<style>
    .mycard {
        background: white;
        padding: 10px 10px;
    }

    .imgtab {
        height: 100px;
        width: auto;

    }
</style>
 <script type="text/javascript">
    $(document).ready(function () {
        var result = $('.result'),
            img_result = $('.img-result'),
            img_w = $('.img-w'),
            img_h = $('.img-h'),
            options = $('.options'),
            save = $('.save'),
            cropped = $('.cropped'),
            dwn = $('.download'),
            upload = $('#file-input'),
            cropper = '';
        var roundedCanvas;

        $('#file-input').change(function (e) {
            if (e.target.files.length) {
                // start file reader
                var reader = new FileReader();
                reader.onload = function (e) {
                    if (e.target.result) {
                        // create new image
                        var img = document.createElement('img');
                        img.id = 'image';
                        img.src = e.target.result;
                        // clean result before
                        //result.innerHTML = '';
                        result.children().remove();
                        // append new image
                        result.append(img);
                        // show save btn and options
                        // save.removeClass('hide');
                        options.removeClass('hide');
                        // init cropper
                        cropper = new Cropper(img);
                        // cropbtn setting enabled
                        $('#cropbtn_setting').find('.btn').removeAttr("disabled");
                        $('#btncrop_download').attr("disabled", "true");
                        $('#save_toserver').attr("disabled", "true");
                        save.removeAttr("disabled");

                        $('#btn_RotateLeft').click(function () {
                            cropper.rotate(90);
                        });
                        $('#btn_RotateRight').click(function () {
                            cropper.rotate(-90);
                        });
                        $('#btn_RotateReset').click(function () {
                            cropper.reset();
                        });
                        $('#btn_Compresed').click(function () {
                            /*     cropper.(UMD, compressed);*/
                        });
                    }
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });
        $('#save').click(function (e) {
            e.preventDefault();
            // get result to data uri
            var imgSrc = cropper.getCroppedCanvas({
                width: img_w.value // input value
            }).toDataURL();
            // remove hide class of img
            cropped.removeClass('hide');
            img_result.removeClass('hide');
            // show image cropped
            cropped.attr('src', imgSrc);
            dwn.removeClass('hide');
            dwn.download = 'imagename.png';
            dwn.attr('href', imgSrc);
            // download button enabled
            $('#btncrop_download').removeAttr("disabled");
            $('#save_toserver').removeAttr("disabled");
        });
        /* function getRoundedCanvas(sourceCanvas) {
         debugger;
         var canvas = document.createElement('canvas');
         var context = canvas.getContext('2d');
         var width = 300;
         var height = 300;

         canvas.width = width;
         canvas.height = height;

         context.imageSmoothingEnabled = true;
         context.drawImage(sourceCanvas, 0, 0, width, height);
         context.globalCompositeOperation = 'destination-in';
         context.beginPath();
         context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
         context.fill();
         return canvas;
         }*/
    });
</script>
<div class="container">

    <h4>Page Menu</h4>
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/create-page-body') }}" method="post" id="createpost" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Page</label>
                        <select name="page" id="page" class="form-control" required>
                            <option value="">Select Page</option>
                            @foreach ($page as $index => $pageobject)
                                @if($index < 4)
                                @else
                                <option value="{{ $pageobject->id }}">{{ $pageobject->page_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        
                    </div>
                </div> --}}
                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Page</label>
                        <input type="text" name="page" id="page" placeholder="Enter Page Name" class="form-control" required>
                    </div>
                </div> --}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control">
                </select>
                    </div>
                </div>
               
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Description</label>
                        <div id="editor" style="height:150px;">

                            </div>
                   {{-- <textarea name="des" id="description"  rows="8" class="form-control" maxlength="1200"></textarea> --}}
                   <input type="hidden" name="des" id="description">
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Status</label>
               <select name="status" id="status" class="form-control">
                   <option value="1">Active</option>
                   <option value="0">De-Active</option>
               </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Show On Home</label>
               <select name="home" id="home" class="form-control">
                   <option value="1">Yes</option>
                   <option value="0">No</option>
               </select>
                    </div>
                </div>

                <input type="hidden" name="myimage" id="myimage">
                <div class="col-sm-12">
                        <div class="upload_image_box">
                                <div class="upload_caption">
                                    Upload photos from your computer
                                </div>
                                <div class="btn-group" data-toggle="modal" data-target="#modal_crop">
                                   
                                    <button type="button" class="btn btn-primary btn-sm res_btn">Browse Photo
                                    </button>
                                </div>
                                <!-- <input type="file" name="profile_pic" id="recend_select_file" class="profile-upload-pic"
                                        onchange="ChangeSetImage(this, _UserProfile);"/>-->
                            </div>
                    </div>
                </div>
                <div class="col-sm-12">
                        <div class="upload_image_box">
                                <div class="upload_caption">
                                    Uploaded photos
                                </div>
                                <div class="btn-group" data-toggle="modal" data-target="#modal_crop">
                                   
                                 <img style="height:300px; width:auto;" src="" alt="" id="myresultimage">
                                </div>
                                <!-- <input type="file" name="profile_pic" id="recend_select_file" class="profile-upload-pic"
                                        onchange="ChangeSetImage(this, _UserProfile);"/>-->
                            </div>
                    </div>
                </div>

                <hr>
                <div class="col-sm-4">
                    <div class="form-group">
                        &nbsp; <button onclick="enterthis();" class="btn btn-primary btn-sm">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>
<div id="modal_crop" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crop and Download your image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <main class="page">
                        <div class="box">
                            <div class="input-group">
            {{-- <span class="input-group-btn">
                <span class="btn btn-default btn-btn-primary">
                    Click Here <input type="file" id="file-input"
                                   "/>
                </span>
            </span> --}}
            <input type="file" id="file-input" name="file+" onchange="ChangeSetImage(this, image_frout, file_text_frount);>
                                <input type="text" id="file_text_frount" class="form-control" readonly="">
                            </div>
                            <p class="note_forcrop">
                             
                            </p>
                        </div>
                        <div class="box-2">
                            <div class="result">
                                {{-- <img class="cropped" id="image_frout1" src="assets/images/NoPreview_CropImg.png" alt=""> --}}
                                <img class="cropped" id="image_frout1" src="http://lagnphere.com/assets/images/NoPreview_CropImg.png" alt="">
                            </div>
                        </div>
                        <div class="box-2 img-result hide">
                            <img class="cropped" id="image_frout" src="" alt="">
                        </div>
                        <div class="box" id="cropbtn_setting">
                            <!--<div class="options hide">
                                <label> Width</label>
                                <input type="text" class="img-w" value="300" min="100" max="1200"/>
                            </div>-->
                            <button class="btn btn-info btn-sm" disabled="disabled" id="btn_RotateLeft">
                                <i class="mdi mdi-format-rotate-90 basic_icon_margin"></i>Rotate Left
                            </button>
                            <button class="btn btn-warning btn-sm center_btnmargin" disabled="disabled"
                                    id="btn_RotateRight">
                                <i class="mdi mdi-rotate-right basic_icon_margin"></i>Rotate Right
                            </button>
                            <button class="btn btn-danger btn-sm" disabled="disabled" id="btn_RotateReset">
                                <i class="mdi mdi-rotate-3d basic_icon_margin"></i>Reset
                            </button>
                            <!-- <button class="btn btn-success" id="btn_getRounded">
                                 <i class="mdi mdi-rotate-3d basic_icon_margin"></i>Rounded</button>-->
                        </div>
                    </main>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-default download" disabled="disabled" id="btncrop_download"
                       download="croped_image.png">
                        <i class="mdi mdi-folder-download basic_icon_margin"></i>Download</a>
                    <button type="button" class="btn btn-success save" id="save" disabled="disabled"><i
                                class="mdi mdi-crop basic_icon_margin"></i>Cropped
                    </button>
                    <button type="button" onclick="upload_profile();" class="btn btn-primary" disabled="disabled"
                            id="save_toserver" disabled="disabled"><i
                                class="mdi mdi-account-check basic_icon_margin"></i>Set
                    </button>
                </div>
            </div>

        </div>
    </div>
    </div>
<script>
function enterthis()
{
var all = $('.ql-editor').html();
$('#description').val(all);

var p_name = $('#page').val();
var title = $('#title').val();
if(p_name==""){
    $('#page').focus();
    return false;
}
else if(title=="")
{
    $('#title').focus();
    return false;
}
else{
    document.getElementById("createpost").submit();
}

}


   $(function() { 
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
});
        $("#userprofilepic").on('submit', function (e) {
//                var textval = $('#post_text').text();
//                $('#posttext').val(textval);
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{ url('formpicpost') }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    console.log(data);
                    location.reload();


//
                },
                error: function (xhr, status, error) {
//                    console.log('Error:', data);
//                    ShowErrorPopupMsg('Error in uploading...');
                    $('#err1').html(xhr.responseText);
                }
            });
//                }
        });

        $(document).ready(function () {
            $(document).on('change', '.btn-file :file', function () {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function (event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function () {
                readURL(this);
            });
        });
        function upload_profile() {
            var file = $('#image_frout').attr('src');
            $('#myresultimage').attr('src', file);
            $('#myimage').val(file);
                $('#modal_crop').modal('hide');
            // alert(file);

            // $.post('{{url('fileupload')}}', {file: file}, function (data) {

            //     ShowSuccessPopupMsg('Profile Picture Successfull Change');
            //     location.reload();
            // });
        }
        function  show_data(image,id) {
            var imagem = image;
            var myid = id;





            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this image",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                if (willDelete) {
                    $.get('{{url('deletepic')}}', {imagem: imagem , myid:myid}, function (data) {
                    location.reload();
                });


                    swal(" Your image has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your image is safe!");
        }
        });
        }
    </script>
@stop