<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="coba" style="height: 68.031496px; width:143.622047px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:143.622047px" alt="barcode" />
            
            <div class="coba1" style="margin-top:-2px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:-2px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>
</body>
</html>