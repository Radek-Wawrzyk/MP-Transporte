
  <?php include("header.php"); ?>

    <section class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h3 class="text-center">Dodanie rozpiski</h3>
          <div class="panel">
            <div class="panel-heading">Wygeneruj rozpiskę</div>
            <div class="panel-body">
              <form class="form panel-form">
                <div class="form-group">
                  <label>Nazwa konfiguracji</label>
                  <select class="form-control" id="sel1">
                    <option>Anglia</option>
                    <option>Polska</option>
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
                <div class="form-group">
                  Wszystkie konfiguracje są tworzone przez administratora
                </div>

                <button type="submit" class="btn submit block-center">Generuj</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <!-- Help -->
          <h3 class="text-center">Pomoc</h3>
          <div class="panel">
            <div class="panel-heading">Dodanie rozpiski</div>
            <div class="panel-body">W celu dodania nowej rozpiski wystarczy wybrać gotową konfgurację, która została stworzona przez administratora serwisu. W celu zwiększenia ilości konfiguracji skontaktuj się z adminem. </div>
          </div>
        </div>
      </div>
    </section>
  <?php include("footer.php"); ?>
