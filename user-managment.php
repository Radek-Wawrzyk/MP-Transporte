
  <?php include ("header.php"); ?>

    <section class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div class="table-responsive">
            <table class="table">
              <h3 class="text-center">Edycja użytkowników</h3>
              <thead>
                <tr>
                  <th>Nick</th>
                  <th>Email</th>
                  <th>Data dodania</th>
                  <th>Ranga</th>
                  <th>Edycja</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mokry tatusiek (XD)</td>
                  <td>hot_daddy_69@wp.pl</td>
                  <td>21-37-2005</td>
                  <td>Stworzyciel</td>
                  <td>
                    <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-modal"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>patwoj98</td>
                  <td>patcwel@gmail.com</td>
                  <td>17-01-2017</td>
                  <td>Gay!</td>
                  <td>
                    <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-modal"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>Eugeniusz Krab</td>
                  <td>krab_pl98@onet.pl</td>
                  <td>21-05-2016</td>
                  <td>Grubszy kasztan</td>
                  <td>
                    <i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit-modal"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <h3 class="text-center">Dodawanie użytkowników</h3>
          <div class="panel">
            <div class="panel-heading add-panel text-center" data-toggle="collapse" data-target="#add">Dodaj</div>
            <div class="panel-body collapse" id="add">
              <form class="form panel-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nick">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Data dodania">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ranga">
                </div>
                <button type="submit" class="btn submit block-center">Zatwierdź</button>
              </form>
            </div>
            <div class="panel-footer">Panel M&P Transporte</div>
          </div>

          <h3 class="text-center">Pomoc</h3>
          <div class="panel">
            <div class="panel-heading">Dodawanie, edycja i usuwanie</div>
            <div class="panel-body">W celu dodania użytkownika należy kliknąć przycisk dodaj. Aby edytować użytkownika należy kliknąć ikonkę ołówka a następnie wprowadzić dane do edycji. By usunąć wystarczy kliknąć ikonę minusa.</div>
            <div class="panel-footer">Panel M&P Transporte</div>
          </div>
        </div>
      </div>
    </section>

  <!-- Modal edit -->
  <div id="edit-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edycja użytkownika</h4>
        </div>
        <div class="modal-body">
          <form class="form">
            <div class="form-group">
              <label>Nick</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Data dodania</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Ranga</label>
              <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn submit block-center">Zatwierdź</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default exit" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
    </div>
  </div>

  <?php include ("footer-admin.php"); ?>
