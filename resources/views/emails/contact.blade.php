<body>
  <h1><img src="<?php echo $message->embed(public_path().'/images/zudbu_logo.png'); ?>"> Zudbu </h1>
  <br>
  <hr>
  <p>Dear {!!$name!!} </p>
  <p>We received the following message from you:</p>

  <p><em><?php echo $body; ?></em></p>

  <p>Thank you for contacting us. If the matter needs follow up, we will
  get back to you as soon as possible</p>

  <p>Kind regards,</p>
  <p>The Zudbu team</p>
</body>
