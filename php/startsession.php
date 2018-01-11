
<html>
<head>
  <meta name="description" content="QR Code scanner" />
  <meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
  <meta name="language" content="English" />
  <meta name="copyright" content="Lazar Laszlo (c) 2011" />
  <meta name="Revisit-After" content="1 Days"/>
  <meta name="robots" content="index, follow"/>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Scan QR</title>
<script type="text/javascript" src="../qrcode/llqrcode.js"></script>
<script type="text/javascript" src="../qrcode/plusone.js"></script>
<script type="text/javascript" src="../qrcode/webqr.js"></script>
<script type="text/javascript" src="../js/submit.js"></script>

</head>


<body>
<div id="main">

  <div id="mainbody">
    <table class="tsel" border="0" width="100%">
      <tr>
        <td valign="top" align="center" width="50%">
          <table class="tsel" border="0">
      <tr>
        <td><img class="selector" id="webcamimg"   align="left" /></td>
        <td><img class="selector" id="qrimg"  align="right"/></td></tr>
        <tr><td colspan="2" align="center">
          <div id="outdiv">
          </div>
        </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">

    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <form name="modulo" method="post" action="elabora.php">
        <input type="text" id="risultato" name="scan" onchange="selectPost()" hidden>
      </form>
    </td>
  </tr>
</table>


</div>&nbsp;

</div>
<canvas id="qr-canvas" width="800" height="600" hidden></canvas>
<script type="text/javascript">load();</script>
</body>

</html>
