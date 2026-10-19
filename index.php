<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($eamil) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>terima kasih
<strong>$nama</strong>, pesan telah berhasil terkirim ke server SMKN
5 Batam!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>CV Danendra putra candra dinata -SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class+"avatar"></div>
            <div>
                <h1 style="margin:0;">Danendra putra candra dinata</div>
                <p style='margin:5px 0 0 0; color: gray;">murid teknik komputer dan jaringan SMKN 5 Batam </p>
            </div>
            </div>
            <nav>
                <a href="#profil">Home</a>
                <a href="#skills">skills</a>
                <button id="btn-theme" onclick="toggletheme"()"> dark mode</button>
            </nav>
        </header>
        
        <div class="main-content">

            <div class="left-column">
                <div class="card" id="profil">
                <h2> PROFIL</h2>
                <h3>  BIODATA</h3>
                <p>pelajar aktif dan prakrisi di bidang teknik komputer dan jaringan.</p>
                <h3>  pendidikan</3>
                <ul>
                    <li>SDN 19 GELUMBANG</li>
                    <li>SMPN 3 GELUMBANG</li>
                    <li>SMKN 5 BATAM</li>
                </ul>

                <h3>  pengalaman kerja</h3>
                <ul>
                    <li> praktik kerja lapangan
                </ul>
            </div>
        </div>

        <div class="right-column">
            <div class="card" id="skills">
                <h2>NEtWORK SKILLS</h2>

                <div class="skill-item">
                    <span class="skill-name">MikroTik RouterOS</span>
                    <div class="progress-bar"><div class="progress-fill" 
style="width: 90%"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Cisco Networking</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 85%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">linux server 
(debian)</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 80%;></div></div>
                </div>

                <div class="skill-name">Network Security</span>
                <div class="progress-bar"><div class="progress-fill"
style="width: 75%;"></div></div>
                </div>
            </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>

                <?php echo $pesan_status; ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>
method="POST">
                    <div class="form-group">
                        <label for="nama"> nama lengkap:</label>
                        <input type="text" id="nama" name="txt_nama"
placeholder="masukkan nama..." required>
                    <div>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" id="email" name="txt_email"
placehorder="masukkan email..." required
                    </div>

                    <div class="form-group">
                        <label for="pesan">pesan: </label>
                        <texarea id="pesan" name="txt_pesan" rows="4"
placeholder="tuliskan pesan..." required></textarea>
                    </div>

                    <button type="submit" name="btn_kirim" class="btn-
submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>
    
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
