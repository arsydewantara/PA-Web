<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTuber</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css">
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
                    <li id="akun_id"><a href="logout.php">Log out</a></li>
                </ul>
                <i class="fa-solid fa-xmark" id="close"></i>
            </div>
            <i class="fa-solid fa-bars" id="bars"></i>
        </nav>
    </header>
    <main>
        <div class="head-table">
            <h3>MANAGEMENT DATA GADGET</h3>
        </div>
        <nav>
            <button class="addbutton" id="tmbhbtn"><a href="formadd.php" style="text-decoration: none;">TAMBAH DATA</a></button>
            <div class="searchbar">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Bar" value="<?php if(isset($_GET['keyword'])){echo $_GET['keyword'];}?>">
                <button type="submit" class="searchbtn" name="search">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </nav>
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
                        if(isset($_GET['keyword'])){
                            $keyword = $_GET['keyword'];
                            
                            $query = "SELECT * FROM barang WHERE merk LIKE '%".$keyword."%' OR spec '%".$keyword."%' OR warna '%".$keyword."%'";
                        } else {
                            $query = "SELECT * FROM barang";
                            
                        }
                        $i = 1;
                        $hasil = mysqli_query($db, $query);
                        while ($row = mysqli_fetch_array($hasil)) {

                    ?>

                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['merk']?></td>
                    <td><?=$row['spec']?></td>
                    <td><?=$row['warna']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['rilis']?></td>
                    <td><img src="model/<?=$row['gambarhp']?>" alt="" id="gmbrhp"></td>
                    <td class="edit"><a href="editform.php?id=<?=$row['id']?>"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="del"><a href="hapusform.php?id=<?=$row['id']?>"><i class="fa-solid fa-trash"></i></a></td>
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
        <div class="mode">
            <input type="checkbox" id="darkmode_id">
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>

<?php
    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        
        $hasil = mysqli_query($db, "SELECT * FROM belanja WHERE merk LIKE '%".$keyword."%' OR spec '%".$keyword."%' OR warna '%".$keyword."%'");
    } else {
        $hasil = mysqli_query($db, "SELECT * FROM belanja");
        
    }
    
    $vtuber = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $vtuber = $row;
    }
    
?>