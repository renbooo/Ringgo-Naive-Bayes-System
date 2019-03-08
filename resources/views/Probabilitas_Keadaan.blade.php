<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Keadaan Lokasi</title>
  </head>
  <body>
    <table class="table" border="1">
      <tr>
        <th rowspan="2">Keadaan_Lokasi</td>
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
        <td>Ramai</td>
        <td>{{$jml_ramai->ya}}</td>
        <td>{{$jml_ramai->tidak}}</td>
        <td>{{$pro_ramai->ya}}</td>
        <td>{{$pro_ramai->tidak}}</td>
      </tr>
      <tr>
        <td>Sedang</td>
        <td>{{$jml_sedang->ya}}</td>
        <td>{{$jml_sedang->tidak}}</td>
        <td>{{$pro_sedang->ya}}</td>
        <td>{{$pro_sedang->tidak}}</td>
      </tr>
      <tr>
        <td>Sepi</td>
        <td>{{$jml_sepi->ya}}</td>
        <td>{{$jml_sepi->tidak}}</td>
        <td>{{$pro_sepi->ya}}</td>
        <td>{{$pro_sepi->tidak}}</td>
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
