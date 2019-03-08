<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Waktu Kejadian</title>
  </head>
  <body>
    <table class="table" border="1">
      <tr>
        <th rowspan="2">Waktu_Kejadian</td>
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
        <td>Pagi</td>
        <td>{{$jml_pagi->ya}}</td>
        <td>{{$jml_pagi->tidak}}</td>
        <td>{{$pro_pagi->ya}}</td>
        <td>{{$pro_pagi->tidak}}</td>
      </tr>
      <tr>
        <td>Siang</td>
        <td>{{$jml_siang->ya}}</td>
        <td>{{$jml_siang->tidak}}</td>
        <td>{{$pro_siang->ya}}</td>
        <td>{{$pro_siang->tidak}}</td>
      </tr>
      <tr>
        <td>Sore</td>
        <td>{{$jml_sore->ya}}</td>
        <td>{{$jml_sore->tidak}}</td>
        <td>{{$pro_sore->ya}}</td>
        <td>{{$pro_sore->tidak}}</td>
      </tr>
      <tr>
        <td>Malam</td>
        <td>{{$jml_malam->ya}}</td>
        <td>{{$jml_malam->tidak}}</td>
        <td>{{$pro_malam->ya}}</td>
        <td>{{$pro_malam->tidak}}</td>
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
