<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="sidebar d-flex flex-column p-3 bg-dark text-white" style=" width: 45vh; height: 100vh; ">

        <a href="../" class=" h1 mb-0 fs-4 text-decoration-none text-white"><img class="mb-0" src="../prof.png" width="39vh" height="36vh"> Storage Yasz</a>
        <hr>
        <ul class=" nav nav-pills flex-column mb-auto">
            <li class=" nav-item">
                <a href="../" class=" nav-link text-white"><i class="bi bi-house-door"></i> Dashboard</a>
            </li>
            <li class=" nav-item">
                <a href="../barang/" class=" nav-link text-white mt-2"><i class="bi bi-box-seam"></i> Barang</a>
            </li>
            <li class=" nav-item">
                <a href="../supplier/" class=" nav-link text-white mt-2"><i class="bi bi-card-checklist"></i> Supplier</a>
            </li>
            <li class=" nav-item">
                <a href="" class=" nav-link text-white mt-2 active"><i class="bi bi-cart"></i> Transaksi</a>
            </li>
        </ul>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>