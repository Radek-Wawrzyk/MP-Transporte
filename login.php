<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="login">

  <header>
   <img src="img/logo.png" alt="logo" />
  </header>

  <div class="container" id="login-form">
    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control"  id="email">
      </div>
      <div class="form-group">
        <label for="pwd">Hasło</label>
        <input type="password" class="form-control" id="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox">Pamiętaj mnie</label>
      </div>
      <button type="submit" class="btn btn-login">Wyślij</button>
    </form>
  </div>

</body>
</html>
