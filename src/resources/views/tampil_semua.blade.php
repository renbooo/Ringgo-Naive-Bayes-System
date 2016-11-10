<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tampil Semuanya</title>
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
         @foreach ($data as $d)
         <tr>
            <td>{{ $d->ID }}</td>
            <td>{{ $d->NAMA_KORBAN }}</td>
            <td>{{ $d->ALAMAT_KORBAN }}</td>
            <td>{{ $d->JENIS_KELAMIN }}</td>
            <td>{{ $d->PEKERJAAN }}</td>
            <td>{{ $d->RENTANG_USIA }}</td>
            <td>{{ $d->LOKASI_KEJADIAN }}</td>
            <td>{{ $d->KEADAAN_LOKASI }}</td>
            <td>{{ $d->WAKTU_KEJADIAN }}</td>
            <td>{{ $d->KENDARAAN }}</td>
            <td>{{ $d->KEADAAN_KORBAN }}</td>
            <td>{{ $d->STATUS_TERSANGKA }}</td>
            <td>{{ $d->JARAK_KANTOR_POLISI_KE_TKP }}</td>
            <td>{{ $d->KERUGIAN_MATERIAL }}</td>
            <td>{{ $d->PATROLI_RUTIN }}</td>
         </tr>
         @endforeach
      </table>
  </body>
</html>
