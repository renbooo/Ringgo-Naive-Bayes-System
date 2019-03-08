<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabel Keputusan</title>
  </head>
  <body>
    <h1>Patroli ya: {{$patroli->ya->count()}}</h1>
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
         @foreach ($patroli->ya as $ya)
         <tr>
            <td>{{ $ya->ID }}</td>
            <td>{{ $ya->NAMA_KORBAN }}</td>
            <td>{{ $ya->ALAMAT_KORBAN }}</td>
            <td>{{ $ya->JENIS_KELAMIN }}</td>
            <td>{{ $ya->PEKERJAAN }}</td>
            <td>{{ $ya->LOKASI_KEJADIAN }}</td>
            <td>{{ $ya->RENTANG_USIA }}</td>
            <td>{{ $ya->KEADAAN_LOKASI }}</td>
            <td>{{ $ya->WAKTU_KEJADIAN }}</td>
            <td>{{ $ya->KENDARAAN }}</td>
            <td>{{ $ya->KEADAAN_KORBAN }}</td>
            <td>{{ $ya->STATUS_TERSANGKA }}</td>
            <td>{{ $ya->JARAK_KANTOR_POLISI_KE_TKP }}</td>
            <td>{{ $ya->KERUGIAN_MATERIAL }}</td>
            <td>{{ $ya->PATROLI_RUTIN }}</td>
         </tr>
         @endforeach
      </table>
      <br><br>
      <h1>Patroli Tidak: {{$patroli->tidak->count()}}</h1>
      <table border="1">
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
      @foreach ($patroli->tidak as $no)
      <tr>
         <td>{{ $no->ID }}</td>
         <td>{{ $no->NAMA_KORBAN }}</td>
         <td>{{ $no->ALAMAT_KORBAN }}</td>
         <td>{{ $no->JENIS_KELAMIN }}</td>
         <td>{{ $no->PEKERJAAN }}</td>
         <td>{{ $no->LOKASI_KEJADIAN }}</td>
         <td>{{ $no->RENTANG_USIA }}</td>
         <td>{{ $no->KEADAAN_LOKASI }}</td>
         <td>{{ $no->WAKTU_KEJADIAN }}</td>
         <td>{{ $no->KENDARAAN }}</td>
         <td>{{ $no->KEADAAN_KORBAN }}</td>
         <td>{{ $no->STATUS_TERSANGKA }}</td>
         <td>{{ $no->JARAK_KANTOR_POLISI_KE_TKP }}</td>
         <td>{{ $no->KERUGIAN_MATERIAL }}</td>
         <td>{{ $no->PATROLI_RUTIN }}</td>
      </tr>
      @endforeach
   </table>
  </body>
</html>
