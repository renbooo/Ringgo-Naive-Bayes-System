<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Kendaraan</title>
  </head>
  <body>
    <table class="table" border="1">
      <tr>
        <th rowspan="2">Kendaraan</td>
        <th colspan="2">Patroli_Rutin</td>
        <th colspan="2">Probabilitas</td>
      </tr>
      <tr>
        <th>Ya</td>
        <th>Tidak</td>
        <th>Ya</td>
        <th>Tidak</td>
      </tr>
      <tr>
        <td>Motor</td>
        <td>{{$jml_motor->ya}}</td>
        <td>{{$jml_motor->tidak}}</td>
        <td>{{$pro_motor->ya}}</td>
        <td>{{$pro_motor->tidak}}</td>
      </tr>
      <tr>
        <td>Mobil Penumpang</td>
        <td>{{$jml_mobilP->ya}}</td>
        <td>{{$jml_mobilP->tidak}}</td>
        <td>{{$pro_mobilP->ya}}</td>
        <td>{{$pro_mobilP->tidak}}</td>
      </tr>
      <tr>
        <td>Mobil Barang</td>
        <td>{{$jml_mobilB->ya}}</td>
        <td>{{$jml_mobilB->tidak}}</td>
        <td>{{$pro_mobilB->ya}}</td>
        <td>{{$pro_mobilB->tidak}}</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>{{$total->ya}}</td>
        <td>{{$total->tidak}}</td>
        <td>{{$total_pro->ya}}</td>
        <td>{{$total_pro->tidak}}</td>
      </tr>
    </table>
  </body>
</html>
