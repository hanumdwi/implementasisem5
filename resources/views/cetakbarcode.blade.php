<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
		.container{
			border:20px solid rgba(0,0,0,.5);
			width: 400px;
			height: 200px;
			background: yellow;
			position: fixed;
			top: 50%;
			left: 50%;
			margin-top: -140px;
			margin-left: -240px;
			text-align: center;
			padding:40px;
			display: table;
		}
		.box{
			background:orange;   
			display: table-cell;
			text-align: center;
			vertical-align: middle;
			border:50px solid rgba(0,0,0,.2);
		}
	</style>
</head>
<body>

<div class="row">
                        <div class="page-header">
                            <center><h1 class="pageheader-title">Cetak Barcode </h1></center>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                            </div>
                        </div>
                </div>


<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
    </div>
    
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
    </div>

<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-1px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>
</body>
</html>