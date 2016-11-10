<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Patroli tidak</title>
  </head>
  <body>
    <table border = 1>
         <tr>
           <th>ID</td>
           <th>NAMA_KORBAN</td>
           <th>ALAMAT_KORBAN</td>
           <th>JENIS_KELAMIN</td>
           <th>PEKERJAAN</td>
           <th>RENTANG_USIA</td>
           <th>LOKASI_KEJADIAN</td>
           <th>KEADAAN_LOKASI</td>
           <th>WAKTU_KEJADIAN</td>
           <th>KENDARAAN</td>
           <th>KEADAAN_KORBAN</td>
           <th>STATUS_TERSANGKA</td>
           <th>JARAK_KANTOR_POLISI_KE_TKP</td>
           <th>KERUGIAN_MATERIAL</td>
           <th>PATROLI_RUTIN</td>
         </tr>
         @foreach ($tampil as $tidak)
         <tr>
            <td>{{ $tidak->ID }}</td>
            <td>{{ $tidak->NAMA_KORBAN }}</td>
            <td>{{ $tidak->ALAMAT_KORBAN }}</td>
            <td>{{ $tidak->JENIS_KELAMIN }}</td>
            <td>{{ $tidak->PEKERJAAN }}</td>
            <td>{{ $tidak->RENTANG_USIA }}</td>
            <td>{{ $tidak->LOKASI_KEJADIAN }}</td>
            <td>{{ $tidak->KEADAAN_LOKASI }}</td>
            <td>{{ $tidak->WAKTU_KEJADIAN }}</td>
            <td>{{ $tidak->KENDARAAN }}</td>
            <td>{{ $tidak->KEADAAN_KORBAN }}</td>
            <td>{{ $tidak->STATUS_TERSANGKA }}</td>
            <td>{{ $tidak->JARAK_KANTOR_POLISI_KE_TKP }}</td>
            <td>{{ $tidak->KERUGIAN_MATERIAL }}</td>
            <td>{{ $tidak->PATROLI_RUTIN }}</td>
         </tr>
         @endforeach
      </table>
      {{$jumlah}}
  </body>
</html>
