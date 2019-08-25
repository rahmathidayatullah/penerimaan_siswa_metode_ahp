<!-- <html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="POST" action="proses.php">
Upload File pemanggilan siswa & data siswa : <input type="file" name="fupload"><br>
Jenis Surat : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>
 -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Upload File</title>
  </head>
  <body>

<!-- 
    <form enctype="multipart/form-data" method="POST" action="proses.php">
Upload File pemanggilan siswa & data siswa : <input type="file" name="fupload"><br>
Jenis Surat : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form><br><br><br><br> -->

<div class="container">

	<h2>Form Upload File</h2>
	<hr>

<form enctype="multipart/form-data" method="POST" action="proses.php">

	<div class="form-group">
    <label for="exampleFormControlFile1">Upload File pemanggilan siswa & data siswa</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fupload">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Jenis Surat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>
  <input type=submit value=Upload>
</form>

</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>