<!DOCTYPE html>
<html>
<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css') ?>">
    <script type="text/javascript" src="<?php echo asset('js/bootstrap.js') ?>"></script>

</head>

<body style="width:80%;margin:40px auto">
  <div class="dropup">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropup
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
    <div class="units-container">

  <form method="post" action="" class="forms">
      <h3>Form Registrasi</h3>
      <label>
          Keadaan Lokasi <span class="error"><?php echo $errors->first('email') ?></span>
          <input type="text" name="email" value="<?php echo Form::old('email') ?>" class="width-50" />
      </label>
      <label>
          Waktu Kejadian <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      </label>
      <label>
          Kendaraan <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      </label>
      <label>
          Keadaan Korban <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      </label>
    </label>
        Status Tersangka <span class="error"><?php echo $errors->first('password_confirmation') ?></span>
        <input type="password" name="password_confirmation" value="<?php echo Form::old('password_confirmation') ?>" class="width-50" />
    </label>
      <label>
          Jarak Kantor Polisi Ke TKP <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      </label>
      <label>
          Kerugian Material <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      </label>
      <label>
          Kasus Serupa <span class="error"><?php echo $errors->first('password') ?></span>
          <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
      <input type="submit" class="btn" value="Submit">
  </form>

    </div>
</body>
</html>
