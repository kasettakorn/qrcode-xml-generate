<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code</title>
</head>

<body>
   
    <button type="submit" id="genbtn">Generate</button><br>
    <img alt='qrcode' id='qrcode_img' hidden>



</body>
<script src="./plugins/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="./plugins/jquery/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#genbtn").click(function(event) {
      $.post({
        type: 'POST',
        url: './qrcode.php',
        contentType: 'application/json',
        data: JSON.stringify([
            {
              courseID: '040613101',
              courseName: 'Fundamental of Computer Science and Professional issue',
              grade: 'A'
            },
            {
              courseID: '040613102',
              courseName: 'Computer Programming I',
              grade: 'B+'
            }
        ]),
        success: function(qrcode_path) {
            console.log(qrcode_path);
            let qrcode_tag = document.getElementById('qrcode_img')
            qrcode_tag.setAttribute('src', qrcode_path);
            qrcode_tag.removeAttribute('hidden');

        }
      }).setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    })
  });
</script>

</html>