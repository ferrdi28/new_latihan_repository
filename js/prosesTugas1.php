<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
        <table class="table table-hover table-striped">
        <tr>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>PROGRAM JURUSAN</th>
            <th>TAHUN</th>
        </tr>
        <tr>
             <td><?php echo $_POST['nama']; ?></td>
             <td><?php echo $_POST['email']; ?></td>
             <td><?php echo $_POST['alamat']; ?></td>
             <td><?php echo $_POST['jurusan']; ?></td>
             <td><?php echo $_POST['tahun']; ?></td>
        </tr>
    </table>
        </div>
    </div>
</div>
</body>

</html>