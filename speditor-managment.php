
  <?php include("header.php"); ?>

    <section class="container-fluid">
      <div class="row">
        <!-- Speditor managment -->
        <div class="col-md-8 col-sm-6">
          <div class="table-responsive">
            <table class="table">
              <h3 class="text-center">Pogląd rozpisek</h3>
              <thead>
                <tr>
                  <th>Nazwa rozpiski</th>
                  <th>Użytkownik</th>
                  <th>Pogląd</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Rozpiska kamila</td>
                  <td>analny-rozjemca</td>
                  <td><i data-toggle="modal" data-target="#check-raport" class="fa fa-sticky-note" aria-hidden="true" ></i></td>
                </tr>
                <tr>
                  <td>Zjebana rozpiska</td>
                  <td>Człowiek co to wymyśla</td>
                  <td><i data-toggle="modal" data-target="#check-raport" class="fa fa-sticky-note" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td>dobra rozpiska</td>
                  <td>mokra_alicja_69</td>
                  <td><i data-toggle="modal" data-target="#check-raport" class="fa fa-sticky-note" aria-hidden="true"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Help -->
        <div class="col-md-4 col-sm-6">
          <h3 class="text-center">Pomoc</h3>
          <div class="panel">
            <div class="panel-heading">Dodawanie, edycja i usuwanie</div>
            <div class="panel-body">W celu sprawdzenia wypełnionej rozpiski należy kliknąć ikonę białej kartki. Jeśli wszystko się zgadza należy zatwierdzić rozpiskę lub jeśli nie odrzucić.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div id="check-raport" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Rozliczenie trasy</h4>
          </div>

          <div class="modal-body">
            <form class="form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Dystans">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Zużyte paliwo">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Wydane pieniądze">
              </div>
              <div class="form-group">
                <label>Zrzut ekranu</label>
                <img class="responsive" src="http://i1-games.softpedia-static.com/screenshots/Euro-Truck-Simulation-2_22.jpg" alt="screen" />
              </div>
              <div class="form-group buttons">
                <button class="btn btn-accept">Zatwierdź</button>
                <button class="btn btn-decline">Odmów</button>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn exit btn-default" data-dismiss="modal">Zamknij</button>
          </div>
        </div>

      </div>
    </div>

  <?php include("footer.php"); ?>
