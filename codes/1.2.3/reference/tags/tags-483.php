<?php

// Generate <script src="http://localhost/javascript/jquery.min.js" type="text/javascript"></script>
echo $this->tag->javascriptInclude("http://localhost/javascript/jquery.min.js", false);

// Generate <script src="/your-app/javascript/jquery.min.js" type="text/javascript"></script>
echo $this->tag->javascriptInclude("javascript/jquery.min.js");

