
  <?php include("header.php"); ?>

  <section class="container-fluid">
    <div class="row">
      <div class="col-md-7 col-sm-6">
        <!-- Table with configurations -->
        <div class="table-responsive">
          <table class="table">
            <h3 class="text-center">Konfiguracje</h3>
            <thead>
              <tr>
                <th>Nazwa konfiguracji</th>
                <th>Miasta</th>
                <th>Edycja</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mapa Polski</td>
                <td>Gdynia, Sopot, Gdańsk, Władysławowo.</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
              <tr>
                <td>Mapa Angli</td>
                <td>Londyn, Manchester, Liverpool, York</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
              <tr>
                <td>Mapa Rosji</td>
                <td>Zadupie dolne, Canvas City(XD), Żopa, Moskwa</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Add configuration -->
      <div class="col-md-5 col-sm-6">
        <h3 class="text-center">Nowa konfiguracja</h3>
        <div class="panel">
          <div class="panel-heading add-panel text-center" data-toggle="collapse" data-target="#add">Dodaj</div>
          <div class="panel-body collapse" id="add">
            <form class="form panel-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nazwa konfiguracji">
              </div>
              <div class="form-group">
                <select class="form-control" id="sel1">
                  <option>Polska</option>
                  <option>Anglia</option>
                  <option>Kacapowo</option>
                </select>
              </div>
              <div class="form-group">
                <label>Miasta</label>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Gdynia</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Sopot</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Gdańsk</label>
                </div>
              </div>
              <button type="submit" class="btn submit block-center">Zatwierdź</button>
            </form>
          </div>
          <div class="panel-footer">Panel M&P Transporte</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 col-sm-6">
        <!-- Table with Cities and countries -->
        <div class="table-responsive">
          <table class="table">
            <h3 class="text-center">Państwa i miasta</h3>
            <thead>
              <tr>
                <th>Państwa</th>
                <th>Miasta</th>
                <th>Edycja</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Polska</td>
                <td>Gdynia, Sopot, Gdańsk, Władysławowo.</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config-data"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
              <tr>
                <td>Wielka Brytania</td>
                <td>Londyn, Manchester, Liverpool, York</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config-data"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
              <tr>
                <td>Rosja</td>
                <td>Wypizdowie dolne,Canvas City , Żopa, Moskwa</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-config-data"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-md-5 col-sm-6">
        <!-- Add configuration data -->
        <h3 class="text-center">Dodaj Państwo</h3>
        <div class="panel">
          <div class="panel-heading add-panel text-center" data-toggle="collapse" data-target="#add-data">Dodaj</div>
          <div class="panel-body collapse" id="add-data">
            <p>Dodaj nowe Państwo</p>
            <form class="form panel-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Państwo">
              </div>
              <button type="submit" class="btn submit block-center">Zatwierdź</button>
            </form>
          </div>
          <div class="panel-footer">Panel M&P Transporte</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 col-sm-6">
        <!-- Help -->
        <h3 class="text-center">Pomoc</h3>
        <div class="panel">
          <div class="panel-heading">Dodawanie, edycja i usuwanie</div>
          <div class="panel-body">W celu dodania nowej konfiguracji należy kliknąć przycisk dodaj, następnie wypełnić danymi. Aby edytować daną konfigurację należy kliknąć ikonkę ołówka w tabeli a następnie wprowadzić dane do edycji. By usunąć konfiguracje wystarczy kliknąć ikonę minusa. W celu dodania nowyh Państw lub miast wystarczy wpisać je w panelach "dodaj państwo" i "dodaj miasto".</div>
          <div class="panel-footer">Panel M&P Transporte</div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <!-- Add configuration data -->
        <h3 class="text-center">Dodaj miasto</h3>
        <div class="panel">
          <div class="panel-heading add-panel text-center" data-toggle="collapse" data-target="#add-city">Dodaj</div>
          <div class="panel-body collapse" id="add-city">
            <p>Wprowadź nowe miasto</p>
            <form class="form panel-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Miasto">
              </div>
              <button type="submit" class="btn submit block-center">Zatwierdź</button>
            </form>
          </div>
          <div class="panel-footer">Panel M&P Transporte</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal edit config -->
  <div id="edit-config" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edycja Konfiguracji</h4>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="form-group">
              <label>Nazwa konfiguracji</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Miasta</label>
              <div class="checkbox">
                <label><input type="checkbox" value="">Gdynia</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Sopot</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Gdańsk</label>
              </div>
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

  <!-- Modal edit data -->
  <div id="edit-config-data" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edycja Konfiguracji</h4>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="form-group">
              <label>Państwo</label>
              <select class="form-control" id="sel1">
                <option>Polska</option>
                <option>Anglia</option>
                <option>Kacapowo</option>
              </select>
            </div>
            <div class="form-group">
              <label>Miasta</label>
              <div class="checkbox">
                <label><input type="checkbox" value="">Gdynia</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Sopot</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Gdańsk</label>
              </div>
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






  <?php include("footer-admin.php"); ?>
