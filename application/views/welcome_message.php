<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">GUNUNG SULAWESI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?=base_url('welcome')?>">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?=base_url('welcome/doc')?>">Dokumentasi</a>
                    <!-- <a class="nav-item nav-link" href="#">Pricing</a> -->
                    <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="card-body">
                <p>Web ini berisikan data <b>API Gunung Sulawesi</b>, disini kalian bisa menambahkan dan menghapus data yang
                    ada...</p>
                <p> API adalah singkatan dari <i>Application Programming Interface</i>, merupakan antarmuka komputasi yang
                    mendefinisikan interaksi antara beberapa perantara perangkat lunak. Ini mendefinisikan jenis
                    panggilan atau permintaan yang dapat dibuat, bagaimana
                    membuatnya, format data yang harus digunakan, konvensi yang harus diikuti, dll. Ia juga dapat
                    menyediakan mekanisme ekstensi sehingga pengguna dapat memperluas fungsionalitas yang ada dengan
                    berbagai cara dan untuk berbagai tingkat.<br></p>
                    <p>API dapat sepenuhnya khusus, khusus untuk suatu
                    komponen, atau dapat dirancang berdasarkan standar industri untuk memastikan interoperabilitas.
                    Beberapa API harus didokumentasikan, yang lain dirancang agar dapat "diinterogasi" untuk menentukan
                    fungsionalitas yang didukung. Karena komponen / sistem lain hanya mengandalkan API, sistem yang
                    menyediakan API dapat (idealnya) mengubah detail internal "di belakang" API itu tanpa mempengaruhi
                    penggunanya.</p><hr>

                <p><b>Untuk Penggunaan, silahkan gunakan key API dibawah ini :</b></p>
                <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <td>Keys</td>
                            <td>RK22NASSAMIPS</td>
                        </tr>
                    </tbody>
                </table>
<hr>
                <p>API ini adalah project tugas Rekayasa Web <Br>
                   <b> A.M.Yusril Ika Ramadhan - 42517007<br>
                    A. Nuraini - 42517001</b>
                </p>
            </div>
        </div>
    </div>
    </div>


</body>

</html>