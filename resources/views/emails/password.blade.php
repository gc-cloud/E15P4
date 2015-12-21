<body>
  <h1><img src="<?php echo $message->embed(public_path().'/images/zudbu_logo.png'); ?>"> Zudbu </h1>
  <br>
  <hr>
  <p>Click here to reset your password:</p>
  <p>{{ url('password/reset/'.$token) }}</p>

  <p>Kind regards,</p>
  <p>The Zudbu team</p>
</body>
