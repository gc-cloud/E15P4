<body>
  <h1><img src="<?php echo $message->embed(public_path().'/images/zudbu_logo.png'); ?>"> Facts4Wellness </h1>
  <br>
  <hr>
  <p>Click here to reset your password:</p>
  <p>{{ url('password/reset/'.$token) }}</p>

  <p>Kind regards,</p>
  <p>The Facts4Wellness team</p>
</body>
