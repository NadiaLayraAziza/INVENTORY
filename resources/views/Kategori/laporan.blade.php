<!DOCTYPE html>
<html>
<head>
    <title>Print Laporan Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                    <h3 align="center">SISTEM INVENTORY SDN GEJUGJATI 2</h3>
                    <h3 align="center">LAPORAN DATA KATEGORI BARANG</h3>
                </div>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Kategori</th>
                        <th>Barang</th>
                    </tr>
                    @foreach ($kategori as $kt => $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->kode_kategori }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>{{ $data->keterangan }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>

