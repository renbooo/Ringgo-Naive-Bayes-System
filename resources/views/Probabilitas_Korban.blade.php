<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Keadaan Korban</title>
  </head>
  <body>
    <table class="table" border="1">
      <tr>
        <th rowspan="2">Keadaan Korban</td>
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
        <td>{{$jml_luka->ya}}</td>
        <td>{{$jml_luka->tidak}}</td>
        <td>{{$pro_luka->ya}}</td>
        <td>{{$pro_luka->tidak}}</td>
      </tr>
      <tr>
        <td>Mobil Penumpang</td>
        <td>{{$jml_kritis->ya}}</td>
        <td>{{$jml_kritis->tidak}}</td>
        <td>{{$pro_kritis->ya}}</td>
        <td>{{$pro_kritis->tidak}}</td>
      </tr>
      <tr>
        <td>Mobil Barang</td>
        <td>{{$jml_tewas->ya}}</td>
        <td>{{$jml_tewas->tidak}}</td>
        <td>{{$pro_tewas->ya}}</td>
        <td>{{$pro_tewas->tidak}}</td>
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
