<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Page</title>


<style type="text/css">

table{width:600px; height:300px; border:8px solid #0080C0;
font: bold 20px Verdana, Arial, Helvetica, sans-serif; color:#000000;
-moz-border-radius: 8px;
-webkit-border-radius: 8px;
margin:130px auto 0 auto;
text-align:center;
font-style:italic;
}

</style>

<!-- Global site tag (gtag.js) - Google Ads: 10896872044 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10896872044"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10896872044');
</script>



<!-- Event snippet for Nexzone Marathon conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10896872044/Yy-NCOyeqsMDEOykhMwo'});
</script>



</head>



<body>
    
<?php

$url = 'http://reraonline.com/app/submit.php';
$data = $_GET;
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array("Cache-Control: no-cache"),
));
$response = curl_exec($curl);
echo $response;
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $result = json_decode($response,TRUE);
}

?>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Thanks for contacting us.<br /><br />
We shall get back to you shortly. </td>
  </tr>
</table>





</body>
</html>