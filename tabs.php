
  <?php include ("header-admin.php"); ?>

  <section class="container-fluid check-s">
    <div class="row">
      <div class="col-md-12">
        <h3>Wybierz trasę:</h3>
      </div>
      <div class="col-md-4">
        <ul class="nav nav-tabs nav-stacked">
          <li class="accept"><a data-toggle="tab" href="#56">Szczecin - Łódź</a></li>
          <li><a data-toggle="tab" href="#57">Łódź - Miasto2</a></li>
          <li><a data-toggle="tab" href="#58">Miasto2 - Miasto4</a></li>
          <li><a data-toggle="tab" href="#59">Miasto4 - Warszawa1</a></li>
          <li><a data-toggle="tab" href="#60">Warszawa1 - Szczecin</a></li>
        </ul>
      </div>

      <div class="col-md-8">
        <div class="tab-content">
          <div id="56" class="tab-pane fade active">
            <div class="row">
              <div class="col-md-3">
                <table class="table table-tab">
                  <tr>
                    <td>Przejechany dystans:&nbsp;</td>
                    <td>1 km</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze: </td>
                    <td>1 &euro;</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo: </td>
                    <td>1 l</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-9">
                <p><img class="responsive" src="/uploads/raports/086482cf03b044a8cf3b480adf0cdae6.png" alt="screen" /></p>
              </div>
            </div>
          </div>

          <div id="57" class="tab-pane fade active">
            <div class="row">
              <div class="col-md-3">
                <table class="table table-tab">
                  <tr>
                    <td>Przejechany dystans:&nbsp;</td>
                    <td>2 km</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze: </td>
                    <td>2 &euro;</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo: </td>
                    <td>2 l</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-9">
                <p><img class="responsive" src="/uploads/raports/73e1bfca8f1a886bff6558f858b6e576.png" alt="screen" /></p>
              </div>
            </div>
          </div>

          <div id="58" class="tab-pane fade active">
            <div class="row">
              <div class="col-md-3">
                <table class="table table-tab">
                  <tr>
                    <td>Przejechany dystans:&nbsp;</td>
                    <td>1 km</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze: </td>
                    <td>1 &euro;</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo: </td>
                    <td>1 l</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-9">
                <p><img class="responsive" src="/uploads/raports/dbd0d49005903530321473cda1b810f8.png" alt="screen" /></p>
              </div>
            </div>
          </div>

          <div id="59" class="tab-pane fade active">
            <div class="row">
              <div class="col-md-3">
                <table class="table table-tab">
                  <tr>
                    <td>Przejechany dystans:&nbsp;</td>
                    <td>1 km</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze: </td>
                    <td>1 &euro;</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo: </td>
                    <td>11 l</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-9">
                <p><img class="responsive" src="/uploads/raports/fc77dcd654aaa030630efcb7dd24a98f.png" alt="screen" /></p>
              </div>
            </div>
          </div>

          <div id="60" class="tab-pane fade active">
            <div class="row">
              <div class="col-md-3">
                <table class="table table-tab">
                  <tr>
                    <td>Przejechany dystans:&nbsp;</td>
                    <td>1 km</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze: </td>
                    <td>1 &euro;</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo: </td>
                    <td>1 l</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-9">
                <img class="responsive" src="http://i1-games.softpedia-static.com/screenshots/Euro-Truck-Simulation-2_22.jpg" alt="screen" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="form-group buttons tabs-buttons">
      <a href="/app_dev.php/spedytor/oddane-rozpiski" class="btn btn-decline">Odrzuć</a>
      <a href="/app_dev.php/spedytor/oddane-rozpiski" class="btn btn-accept">Zatwierdź</a>
    </div>

  </section>

  <?php include ("footer.php"); ?>
