
  <?php include ("header.php"); ?>

  <section class="container-fluid" id="news">
    <div class="row">
      <div class="col-md-6">
        <div class="table-box">
          <h3 class="text-center">Aktualna trasa</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nr Trasy</th>
                  <th>Miasto początkowe</th>
                  <th>Miasto końcowe</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Gdynia</td>
                  <td>Białogard</td>
                  <td><a href="schedule.php">Podgląd</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="table-box">
          <h3 class="text-center">Statystyki całkowite</h3>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Całkowita ilość km</td>
                  <td>518456 km</td>
                </tr>
                <tr>
                  <td>Ilość km w aktualnym miesiącu</td>
                  <td>12004 km</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="table-box">
          <h3 class="text-center">Top 5 mesiąca</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Pozycja</th>
                  <th>Nick</th>
                  <th>Kilometry</th>
                  <th>Trasy</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Radziu</td>
                  <td>666 km</td>
                  <td>69</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Patwoj</td>
                  <td>543 km</td>
                  <td>54</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nigtelios</td>
                  <td>421 km</td>
                  <td>42</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Pimpuszek</td>
                  <td>267 km</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Max</td>
                  <td>21 km</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <h3 class="text-center">
          Najniższe spalanie miesiąca:
          Neshi (30.46 l/100km)
        </h3>
      </div>

      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table logs">
            <h3 class="text-center">Logi</h3>
            <thead>
              <tr>
                <th>Użytkownik</th>
                <th>Data</th>
                <th>Wydarzenie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ulrich von Jungingen</td>
                <td>15/07/1410</td>
                <td>Popełnił błąd</td>
              </tr>
              <tr>
                <td>Radziu</td>
                <td>21-02-2018</td>
                <td>Ukończył trasę</td>
              </tr>
              <tr>
                <td>Eugeniusz Krab</td>
                <td>24-05-1987</td>
                <td>Stworzył tajemny przepis</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <?php include ("footer.php"); ?>
