<?php
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTuber</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylebelanja.css">
</head>
<body>
<header id ="Home">
        <nav>
            <a href="index.html"><img class="Logo" src="img/gadgetblack.png" alt="gadget" id="logo" height="73px"></a>
            <div class="navi" id="naviList">
                <ul id="listNav">
                    <li><a href="index.php">Home</a></li>
                    <li id="barang"><a href="talent.php">GadgetList</a></li>
                    <li id="about_id"><a href="about.html">About Us</a></li>
                    <li id="akun_id"><a href="akun">Login</a></li>
                    <li id="darkmode_id">DarkMode</li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="head-table">
            <h3>DAFTAR GADGET YANG TERSEDIA</h3>
        </div>
        <div>
            <button class="addbutton"><a href="formadd.php" style="text-decoration: none;">TAMBAH DATA</a></button>
            <div class="searchbar">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Bar">
                <button type="submit" class="searchbtn" name="search">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="table" style="overflow-x:auto;">
            <table border="1">
                <tr>
                    <th>NO</th>
                    <th>Merk Gadget</th>
                    <th>Spesifikasi</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Tanggal Release</th>
                    <th>Gambar Gadget</th>
                    <th>Modifikasi</th>
                    <th>Menghapus</th>
                </tr>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['merk']?></td>
                    <td><?=$row['spec']?></td>
                    <td><?=$row['warna']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['rilis']?></td>
                    <td><img src="model/<?=$row['gambarhp']?>" alt="" width="100px"></td>
                    <td class="edit"><a href="editform.php?id=<?=$row['id']?>">EDIT</a></td>
                    <td class="del"><a href="hapusform.php?id=<?=$row['id']?>">HAPUS</a></td>
                </tr>
                    <?php
                        $i++;
                    }
                    ?>

            </table>
        </div>
    </main>

    <footer>
        <ul id="footer_id">
            <li><a href="#Home">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="#Contact">Contact Us</a></li>
        </ul>
        <p class="hakcipta" id="hc">
            VTuber @ 2022
        </p>
    </footer>
</body>
<script src="script.js"></script>
</html>