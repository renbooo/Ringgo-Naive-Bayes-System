<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Tersangka</title>
  </head>
  <body>
    <table class="table" border="1">
      <tr>
        <th rowspan="2">Status_Tersangka</td>
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
        <td>Tertangkap</td>
        <td>{{$jml_tertangkap->ya}}</td>
        <td>{{$jml_tertangkap->tidak}}</td>
        <td>{{$pro_tertangkap->ya}}</td>
        <td>{{$pro_tertangkap->tidak}}</td>
      </tr>
      <tr>
        <td>Kabur</td>
        <td>{{$jml_kabur->ya}}</td>
        <td>{{$jml_kabur->tidak}}</td>
        <td>{{$pro_kabur->ya}}</td>
        <td>{{$pro_kabur->tidak}}</td>
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
