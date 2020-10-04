@extends('template')

@section('title', 'Customer')

@section('container')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>

            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Customers </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Customers</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive">
                    <form class="form-horizontal" action="customerstore2" method="post">
                        @csrf
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama</label>
                                <input name="nama" class="form-control" style="width:100%"></input>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom02">Alamat</label>
                                <input name="alamat" class="form-control" style="width:100%"></input>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Select Provinsi</label>
                            <select name="provinsi" class="form-control" style="width:100%">
                                            <option value="">--- Select provinsi ---</option>
                                                @foreach ($provinsi as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                        </select>
                                <div class="input-group">
                                        <div class="invalid-feedback">
                                            Please choose a provinsi.
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Kota</label>
                                <select name="kota" class="form-control"style="width:100%">
                                    <option>-- Select kota --</option>
                                </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Kecamatan</label>
                                <select name="kecamatan" class="form-control"style="width:100%">
                                    <option>-- Select kecamatan --</option>
                                </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Kelurahan - Kode Pos</label>
                                <select name="kelurahan" class="form-control"style="width:100%">
                                    <option>-- Select Kelurahan - Kode Pos --</option>
                                </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                            </div>
                            <p id="hasil"></p>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            </div>
                        </div>
                        
                        
                                
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Snapshoot
                        </button>

                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div id="camera" style="height:auto;width:auto; text-align:left;"></div>
                                                    </div>
                                                        <div class="col-md-2"></div>
                                                            <div class="col-md-4 mt-2">
                                                                <p id="snapShot"></p>
                                                            </div>
                                                    </div>
                                                <div class="form-row">
                                                    <div class="col-md-4"></div>
                                                        <div class="col-md-3"></div>
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-primary btn-square" id="btPic" onclick="takeSnapShot()">Ambil Foto</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="notsaveimage()" >Close</button>
                                                    <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="saveimage()">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                                
                                
                            
<div class="row">                        
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Id Kelurahan</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </form>
                        </div>
                            </div>
                            </div>
                    
                        
                                    
                         
<script>
    // CAMERA SETTINGS.
    Webcam.set({
        width: 200,
        height: 170,
        image_format: 'jpeg',
        jpeg_quality: 100,
        flip_horiz: true
    });
    Webcam.attach('#camera');

    // SHOW THE SNAPSHOT.
    takeSnapShot = function () {
        Webcam.snap(function (data_uri) {
            document.getElementById('snapShot').innerHTML = 
                '<img src="' + data_uri + '" width="200px" height="153px" />'
                 
        });
    }

    saveimage = function () {
        Webcam.snap(function (data_uri) {
         document.getElementById('hasil').innerHTML = 
                '<img src="' + data_uri + '" width="200px" height="153px" />'+
                '<input type="hidden" value="'+ data_uri +'" name="foto">'
        });
    }
         
    function notsaveimage(){
               console.log('masuk function not save image');
               document.getElementById('hasil').innerHTML = '';
            }
         
</script>

    <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="provinsi"]').on('change',function(){
               var provinsiID = jQuery(this).val();
               if(provinsiID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +provinsiID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="kota"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="kota"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="kota"]').empty();
               }
            });

            jQuery('select[name="kota"]').on('change',function(){
               var kotaID = jQuery(this).val();
               if(kotaID)
               {
                
                  jQuery.ajax({
                     url : 'dropdownlist/getkecamatan/' +kotaID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {

                        console.log(data);
                        jQuery('select[name="kecamatan"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="kecamatan"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="kecamatan"]').empty();
               }
            });

            jQuery('select[name="kecamatan"]').on('change',function(){
               var kecamatanID = jQuery(this).val();
               if(kecamatanID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getkelurahan/' +kecamatanID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="kelurahan"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="kelurahan"]').append('<option value="'+ key +'">'+ value.NAMA_KELURAHAN + ' - '+ value.KODEPOS+'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="kelurahan"]').empty();
               }
            });
            
    });
    </script>  
@endsection        