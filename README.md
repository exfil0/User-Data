# User-Data
Collect visitor IP Address and Cookies with a simple visit,

```
<?php

$file = 'visitor_data.txt';

// Get visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get visitor's cookies
$cookies = print_r($_COOKIE, true);

// Write visitor data to file
file_put_contents($file, "IP Address: $ip\nCookies: $cookies\n\n", FILE_APPEND);

?>
```

This script will append the visitor's IP address and cookies to a text file named visitor_data.txt each time the script is run.

Keep in mind that collecting personal information, even with informed consent, comes with a great deal of responsibility. You must take adequate measures to protect the data you collect and ensure that it is only used for the purpose for which it was collected. This includes implementing appropriate security measures to prevent unauthorized access and taking steps to dispose of the data when it is no longer needed.
