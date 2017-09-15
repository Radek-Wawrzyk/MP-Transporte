<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

  <!-- Preloader -->
  <div class="preloader"></div>

  <!-- Navigation -->
  <nav class="navbar-fixed-top">
    <a href="index.php" class="nav-logo">
      <img src="img/logo.png" alt="logo" />
    </a>

    <div class="nav-wrapper-btn">
      <div class="nav-menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <ul class="nav-navigation hidden-xs">
      <li><a href="#">Strona główna</a></li>
      <li><a href="#">Forum</a></li>
    </ul>

    <div class="nav-user-panel">
      <p>Radziu</p>
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      <i class="fa fa-envelope-o" aria-hidden="true"><span class="badge">5</span></i>
      <div class="dropdown">
        <i class="fa fa-cog" data-toggle="dropdown" aria-hidden="true"></i>
        <ul class="dropdown-menu">
          <li class="nav-user-panel-nickname"><a href="">Radziu</a></li>
          <li><a href="change-password.php">Zmiana hasła</a></li>
          <li><a href="#">Opcja 1</a></li>
          <li><a href="#">Opcja 2</a></li>
          <li class="divider"></li>
          <li><a href="#">Wyloguj</a></li>
        </ul>
      </div>
    </div>

    <div class="nav-menu">
      <h2>Virtual Driver System</h2>
      <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Uwaga!</strong> obecnie niektóre funkcje panelu są wyłączone!
      </div>

      <ul class="nav-menu-hidden visible-xs">
        <li><a href="https://mptransport-vs.eu/portal/">Strona główna</a></li>
        <li><a href="https://mptransport-vs.eu/forum/">Forum</a></li>
      </ul>

      <ul class="nav-list">
        <p data-target="#user-functions" data-toggle="collapse">Użytkownik<i class="fa fa-angle-down" aria-hidden="true"></i></p>
        <ul id="user-functions" class="collapse nav-collapse-list">
          <li class=""><a href="index.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Aktualności</a></li>
          <li class=""><a href="schedule.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Panel rozpiski</a></li>
          <li class=""><a ><i class="fa fa-users" aria-hidden="true"></i>Ranking</a></li>
          <li class=""><a ><i class="fa fa-balance-scale" aria-hidden="true"></i>Rozliczenia<span>Nowość</span></a></li>
          <li class="blocked"><a ><i class="fa fa-list-alt" aria-hidden="true"></i>Logi</a></li>
          <li class="blocked"><a ><i class="fa fa-map" aria-hidden="true"></i>Mapa</a></li>
          <li class="blocked"><a ><i class="fa fa-hdd-o" aria-hidden="true"></i>Tachograf</a></li>
          <li class=""><a ><i class="fa fa-address-card" aria-hidden="true"></i>Karta kierowcy<span>Nowość</span></a></li>
          <span></span>
        </ul>

        <p data-target="#admin-functions" data-toggle="collapse">Administrator<i class="fa fa-angle-down" aria-hidden="true"></i></p>
        <ul id="admin-functions" class="collapse nav-collapse-list">
          <li class=""><a href="admin.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Aktualności</a></li>
          <li class=""><a href="user-managment.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Użytkownicy</a></li>
          <li class=""><a href="maps.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Mapy</a></li>
        </ul>

        <p data-target="#speditor-functions" data-toggle="collapse">Spedytor<i class="fa fa-angle-down" aria-hidden="true"></i></p>
        <ul id="speditor-functions" class="collapse nav-collapse-list">
          <li class="index.php"><a href="index.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Aktualności</a></li>
          <li class=""><a href="Rozliczenia nazwy"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Rozliczenia</a></li>
          <li class="blocked"><a ><i class="fa fa-users" aria-hidden="true"></i>Ranking</a></li>
        </ul>
      </ul>
    </div>
  </nav>
