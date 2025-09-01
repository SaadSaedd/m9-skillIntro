<?php
$host = 'mariadb';
$db   = 'saad';
$user = 'saadUser';
$pass = 'saad123';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

$projects = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <section class="main">
        <div class="main_cv">
            <div class="main_cv_left">
                <div class="main_cv_left_logo"><img class="logo" src="img/logo-livingshapes.png" alt="logo"></div>
                <div class="main_cv_left_text"><h2>contact</h2><h2>information</h2><h2>copy</h2></div>
            </div>
            <div class="main_cv_right">
                <div class="main_cv_right_foto">
                    <div class="main_cv_right_foto_1 main_cv_right_foto_all">
                        <div class="photo-card">
                            <div class="photo-inner">
                                <div class="photo-front">
                                    <img src="/assets/img/projects/<?=htmlspecialchars( isset($projects[0]['image_main']) ? $projects[0]['image_main'] : (isset($projects[0]['image_second']) ? $projects[0]['image_second'] : 'placeholder.jpg')  )?>" alt="<?=htmlspecialchars(isset($projects[0]['title']) ? $projects[0]['title'] : 'foto1') ?>">
                                </div>
                                <div class="photo-back">
                                    <img src="/assets/img/projects/<?=  htmlspecialchars( isset($projects[0]['image_second']) ? $projects[0]['image_second'] : (isset($projects[0]['image_main']) ? $projects[0]['image_main'] : 'placeholder.jpg')  )?>" alt="<?= htmlspecialchars(isset($projects[0]['title']) ? $projects[0]['title'] : 'foto1-back') ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_cv_right_foto_2 main_cv_right_foto_all">
                        <div class="photo-card">
                            <div class="photo-inner">
                                <div class="photo-front">
                                    <img id="myImage" src="/assets/img/projects/<?= htmlspecialchars( isset($projects[1]['image_main']) ? $projects[1]['image_main'] : (isset($projects[1]['image_second']) ? $projects[1]['image_second'] : 'placeholder.jpg') )?>" alt="<?=htmlspecialchars(isset($projects[1]['title']) ? $projects[1]['title'] : 'foto2')?>">
                                </div>
                                <div class="photo-back">
                                    <img id="myImage" src="/assets/img/projects/<?=htmlspecialchars(  isset($projects[1]['image_second']) ? $projects[1]['image_second'] :  (isset($projects[1]['image_main']) ? $projects[1]['image_main'] : 'placeholder.jpg') ) ?>" alt="<?= htmlspecialchars(isset($projects[1]['title']) ? $projects[1]['title'] : 'foto2-back')?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_cv_right_foto_3 main_cv_right_foto_all">
                        <div class="photo-card">
                            <div class="photo-inner">
                                <div class="photo-front">
                                    <img src="/assets/img/projects/<?= htmlspecialchars(  isset($projects[2]['image_main']) ? $projects[2]['image_main'] : (isset($projects[2]['image_second']) ? $projects[2]['image_second'] : 'placeholder.jpg') ) ?>" alt="<?= htmlspecialchars(isset($projects[2]['title']) ? $projects[2]['title'] : 'foto3')?>">
                                </div>
                                <div class="photo-back">
                                    <img src="/assets/img/projects/<?=htmlspecialchars(isset($projects[2]['image_second']) ? $projects[2]['image_second'] :(isset($projects[2]['image_main']) ? $projects[2]['image_main'] : 'placeholder.jpg'))?>" alt="<?= htmlspecialchars(isset($projects[2]['title']) ? $projects[2]['title'] : 'foto3-back')?>">
                                </div>
                            </div>
                        </div>
                    </div>

           <div class="main_cv_right_foto_4 main_cv_right_foto_all">
                    <div class="photo-card">
                            <div class="photo-inner">
                                <div class="photo-front">
                                    <img src="/assets/img/projects/<?=htmlspecialchars( isset($projects[3]['image_main']) ? $projects[3]['image_main'] :(isset($projects[3]['image_second']) ? $projects[3]['image_second'] : 'placeholder.jpg'))?>" alt="<?= htmlspecialchars(isset($projects[3]['title']) ? $projects[3]['title'] : 'foto4')?>">
                                </div>
                                <div class="photo-back">
                                    <img src="/assets/img/projects/<?=htmlspecialchars( isset($projects[3]['image_second']) ? $projects[3]['image_second'] :(isset($projects[3]['image_main']) ? $projects[3]['image_main'] : 'placeholder.jpg')   ) ?>" alt="<?=htmlspecialchars(isset($projects[3]['title']) ? $projects[3]['title'] : 'foto4-back') ?>">
                                </div>
                            </div>
                        </div>
                 </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
