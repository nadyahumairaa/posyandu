<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Posyandu Mawar IX</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/assets/images/dashboard/d.png" />
  </head>
  <body>
    <h3><center>{{$judul}}</h3>
      <hr>
	<table border="1">
		<tr>
      <th>No</th>
      <th>Nama Anak</th>
      <th>Jenis Kelamin</th>
			<th>Nama Ibu</th>
			<th>Tanggal Lahir</th>
    </tr>
    @php
    $no=1;
   @endphp
   @foreach($data_anak as $data)
   <tr>
   <td>{{$no++}}</td>
   <td>{{$data->nama_anak}}</td>
   <td>{{$data->jenis_kelamin}}</td>
   <td>{{$data->nama_ibu}}</td>
   <td>{{$data->tanggal_lahir_anak}}</td>
   </tr>
   @endforeach
	</table>

</body>
</html>