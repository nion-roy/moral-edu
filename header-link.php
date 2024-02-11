<?php require_once 'moral-edu/includes/conn.php'; ?>
<?php require_once 'moral-edu/includes/dbconfig.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="http://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-fullscreen.css" />

<link rel="stylesheet" href="assets/css/team.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style-liberty.css">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<style>
  .lg-backdrop,
  #lg-backdrop-1 {
    background: rgba(0, 0, 0, 0.8);
  }

  #course,
  #faq,
  #about,
  #visions,
  #video {
    background: var(--bg-light);
  }

  #team {
    margin: 0;
  }

  #course h4 {
    color: #000;
  }

  #course .features15-col-text:hover h4 {
    color: var(--secondary-color);
  }

  .modal-backdrop {
    z-index: 99;
  }

  .modal-body {
    padding: 0;
  }

  @media (min-width: 992px) {

    .modal-lg,
    .modal-xl {
      max-width: 992px;
    }
  }

  @media (max-width: 992px) {

    .apply .btn {
      width: 100%;
    }
  }

  .apply {
    background: url('assets/images/banner.png');
    background-position: center;
    background-size: cover;
    padding: 3% 0 3% 3%;
    overflow: hidden;
  }

  .apply-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
  }

  .apply-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
  }

  .apply-left img {
    margin-bottom: 5%;
  }

  .apply .apply-form {
    padding: 10%;
  }
</style>