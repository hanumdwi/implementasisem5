@extends('template')

@section('title', 'Cetak Tabel TnJ 108')

@section('container')

<div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Barang </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Barang</li>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Cetak Barcode</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    @foreach($barang as $brg)
                                    <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $brg -> ID_BARANG }}</td>
                                    <td>{{ $brg -> NAMA_BARANG }}</td>
                                    <td>
                                    <a href="pdf-barcode/{{$brg->ID_BARANG}}">
                                    <button type="button" class="btn btn-warning">Cetak Barcode</button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  console.log('x : ')
            const x = document.getElementsByClassName('post0');
            for(let i=0;i<x.length;i++){
                x[i].addEventListener('click',function(){
                    x[i].submit();
                });
            }
            swal("Welcome to Print Barcode!", "You clicked the button!", "success");
</script>

@endsection