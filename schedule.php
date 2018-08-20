
  <?php include("header.php"); ?>

    <section class="container-fluid">
      <!-- Schedule route -->
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div class="table-box">
            <h3 class="text-center">Ukończone trasy</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nr Trasy</th>
                    <th>Miasto (początkowe)</th>
                    <th>Miasto (końcowe)</th>
                    <th>Rozliczenie</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Gdynia</td>
                    <td>Białogard</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="done">Rozliczona</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Warszawa</td>
                    <td>Kraków</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="in-work">W trakcie</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Londyn</td>
                    <td>Leicester</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="not-done">Nie rozliczona</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>York</td>
                    <td>Manchaster</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="in-work">W trakcie</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Moskwa</td>
                    <td>Lwów</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="not-done">Nie rozliczona</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="table-box">
            <h3 class="text-center">Ukończone trasy</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nr Trasy</th>
                    <th>Miasto (początkowe)</th>
                    <th>Miasto (końcowe)</th>
                    <th>Rozliczenie</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Gdynia</td>
                    <td>Białogard</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="done">Rozliczona</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Warszawa</td>
                    <td>Kraków</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="in-work">W trakcie</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Londyn</td>
                    <td>Leicester</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="not-done">Nie rozliczona</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>York</td>
                    <td>Manchaster</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="in-work">W trakcie</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Moskwa</td>
                    <td>Lwów</td>
                    <td class="raport" data-toggle="modal" data-target="#raport">Raport <i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td class="not-done">Nie rozliczona</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Schedule stats -->
        <div class="col-md-4 col-sm-6">
          <h3 class="text-center">Aktualna rozpiska</h3>
          <div class="panel-box">
            <div class="panel-box-header">Termin rozpiski: 21-37-2005</div>
            <div class="panel-box-body">
              <table class="table panel-box-table">
                <tbody>
                  <tr>
                    <td>Przejechane kilometry</td>
                    <td>0 km</td>
                  </tr>
                  <tr>
                    <td>Spalone paliwo</td>
                    <td>0 l</td>
                  </tr>
                  <tr>
                    <td>Wydane pieniądze</td>
                    <td>0 $</td>
                  </tr>
                  <tr>
                    <td>Data rozpoczęcia</td>
                    <td>04-09-2017</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="buttons-group-help">
            <button class="btn btn-help" data-toggle="modal" data-target="#help-trace-problem">Zgłoś problem</button>
            <button class="btn btn-help" data-toggle="modal" data-target="#help-back-to-base">Powrót do bazy</button>
            <button class="btn btn-help" data-toggle="modal" data-target="#help-date-change">Zmiana terminu</button>
          </div>
        </div>

      </div>
    </section>

    <!-- Modal -->
    <div id="raport" class="modal fade" role="dialog">
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
                <textarea class="form-control">
                  treść
                </textarea>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Zużyte paliwo">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Wydane pieniądze">
              </div>
              <div class="form-group">
                <label for="file-upload" class="file-upload">
                  <i class="fa fa-cloud-upload"></i> Zrzut ekranu
                </label>
                <input id="file-upload" type="file"/>
              </div>
              <button type="submit" class="btn submit block-center">Zatwierdź</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-modal-exit" data-dismiss="modal">Zamknij</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal help -->
    <div id="help-trace-problem" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Błąd w trasie</h4>
          </div>

          <div class="modal-body">
            <form class="form">
              <div class="form-group">
                <label>Podaj uzasadnienie</label>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn submit block-center">Wyślij</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-modal-exit" data-dismiss="modal">Zamknij</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal help back to base -->
    <div id="help-back-to-base" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Zapytanie o powrót do bazy</h4>
          </div>

          <div class="modal-body">
            <form class="form">
              <div class="form-group">
                <label>Podaj uzasadnienie:</label>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn submit block-center">Wyślij</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-modal-exit" data-dismiss="modal">Zamknij</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal help date change -->
    <div id="help-date-change" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Wniosek o zmianę terminu</h4>
          </div>

          <div class="modal-body">
            <form class="form">
              <div class="form-group">
                <label>Podaj uzasadnienie wniosku</label>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input class="form-control" type="date" />
              </div>
              <button type="submit" class="btn submit block-center">Wyślij</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-modal-exit" data-dismiss="modal">Zamknij</button>
          </div>
        </div>
      </div>
    </div>

  <?php include("footer.php"); ?>
