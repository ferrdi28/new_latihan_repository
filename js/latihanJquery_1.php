<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Jquery</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <br>
    <br>
    <center>
        <button class="btn btn-primary btn-hilang">Tombol 1</button>
        <button class="btn btn-success btn-muncul">Tombol 2</button>
        <button class="btn btn-dark btn-toggle">Tombol 3</button>
        <br>
        <br>
        <h3>Ini adalah text h3 atau judul</h3>
        <!-- Ini file import jquery dan js -->
        <script src="bootstrap-5.0.2-dist/js/jquery-3.6.4.min.js"></script>
        <script>
        $(document).ready(function() {
            $(".btn-hilang").click(function() {
                // $("h3").hide();
                // $("h3").fadeOut();
                $("h3").slideUp();
            })
            $(".btn-muncul").click(function() {
                // $("h3").show();
                // $("h3").fadeIn();
                $("h3").slideDown();
            })
            $(".btn-toggle").click(function() {
                // $("h3").show();
                // $("h3").fadeIn();
                // $("h3").toggle();
                // $("h3").fadeToggle();
                $("h3").slideToggle();
            })
        })
        </script>
    </center>
</body>

</html>