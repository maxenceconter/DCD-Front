<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">  
    <title>Accueil</title>
</head>

<body>
        <div class="banner d-flex justify-content-center">
            <div class="logo_site">
                <img src="src/47c9bb2a71217e679e96607f8e2e2337.png" alt="logo_site" width="80px" height="80px">
            </div>
            <div class="titre_site">
                <h1>TITRE DU SITE</h1>
            </div>
        </div>
        <div class="nav_bar">
            <?php include 'nav_bar.php'; ?>
        </div>
        <div class="block_cal_map">
            <?php include 'calendar.php'; ?>
            <?php include 'map.php'; ?>
        </div>
        <div class="ads">
            <img src="src/veggie_king_offert_avec_coupon.jpg" alt="ads" class="ads_params">
        </div>
        <div class="avis">
            <div class="notes">
                <?php include 'notes.php'; ?>
                <?php include 'photos.php'; ?>
            </div>
        </div>
        <div class="description">
            <?php include 'description.php'; ?>
        </div>
        <div class="nav_bar">
            <?php include 'nav_bar.php'; ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
</body>

</html>