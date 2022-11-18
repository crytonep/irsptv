<?php
$rdr = base64_decode($_GET['r']);
$rdr = str_replace('https://tcnt3.xyz/star_jwp.html?get=', '', $rdr);
echo '<script>window.location.href = "../tv?r='.$rdr.'"</script>';