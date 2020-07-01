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
        <nav class="navbar rounded navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">GUNUNG SULAWESI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?=base_url('welcome')?>">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="<?=base_url('welcome/doc')?>">Dokumentasi</a>
                    <!-- <a class="nav-item nav-link" href="#">Pricing</a> -->
                    <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </nav>

        <div class="card">
            <div class="card-body">
                <h3>Dokumentasi API</h3>
                <p>Dokumentasi ini menjelaskan cara mengakses layanan API Gunung Sulawesi. API ini memiliki 3 method
                    yaitu mengambil data, menambah data dan menghapus data.
                </p>
                <hr>

                <h5>Method GET</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">URL</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Parameter</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Respon</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>URL</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>http://localhost/api-rekweb/gunung</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>Key</td>
                                    <td>Ya</td>
                                    <td>String </td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>Gunung</td>
                                    <td>Tidak</td>
                                    <td>String</td>
                                    <td>Nama Gunung</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        {<br>
                        "id_gunung": "2",<br>
                        "nama_gunung": "bawakaraeng",<br>
                        "ketinggian": "1000mdpl",<br>
                        "status": "tertutup"<br>
                        },<br>
                    </div>
                </div>

                <hr>

                <h5>Method POST</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab"
                            aria-controls="home" aria-selected="true">URL</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab"
                            aria-controls="profile" aria-selected="false">Parameter</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab"
                            aria-controls="contact" aria-selected="false">Respon</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>URL</td>
                                </tr>
                                <tr>
                                    <td>POST</td>
                                    <td>http://localhost/api-rekweb/gunung</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                                <tr>
                                    <td>POST</td>
                                    <td>Key</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>POST</td>
                                    <td>Nama</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>Nama Gunung</td>
                                </tr>
                                <tr>
                                    <td>POST</td>
                                    <td>Tinggi</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>Tinggi Gunung</td>
                                </tr>
                                <tr>
                                    <td>POST</td>
                                    <td>Status</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>Status Gunung</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                        {<br>

                        "status": true,<br>
                        "pesan": "Data ditambahkan" <br>

                        }
                    </div>
                </div>

                <hr>

                <h5>Method DELETE</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab"
                            aria-controls="home" aria-selected="true">URL</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab"
                            aria-controls="profile" aria-selected="false">Parameter</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact2" role="tab"
                            aria-controls="contact" aria-selected="false">Respon</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>URL</td>
                                </tr>
                                <tr>
                                    <td>DELETE</td>
                                    <td>http://localhost/api-rekweb/gunung</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                                <tr>
                                    <td>DELETE</td>
                                    <td>Key</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>DELETE</td>
                                    <td>Id</td>
                                    <td>Ya</td>
                                    <td>String</td>
                                    <td>Id_Gunung</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
                        {<br>


                        "status": true,<br>
                        "id": "5",<br>
                        "pesan": "Data telah dihapus"<br>

                        }
                    </div>
                </div>
                <hr>
                <b>CATATAN :</b>
                <p> Method GET berfungsi untuk mengambil data <br>
                    Method POST berfungsi untuk menambahkan data <br>
                    Method DELETE berfungsi untuk menghapus data</p>
            </div>
        </div>
    </div>

</body>

</html>