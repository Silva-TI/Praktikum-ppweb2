<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container mt-5">
    <h2>Selamat Datang di Perpustkaan STT-NF</h2>
    <p>Silahkan Isi Buku Tamu Dibawah Ini</p>
    
    <form method="POST" action="kunjungan.php">
  <div class="form-group row">
    <label for="Fullname" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Fullname" name="Fullname" type="text" class="form-control" aria-describedby="FullnameHelpBlock" required="required"> 
      <span id="FullnameHelpBlock" class="form-text text-muted">Isi Nama Lengkap Anda</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock" required="required"> 
      <span id="emailHelpBlock" class="form-text text-muted">Isi dengan Email Aktif Anda</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Message" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="Message" name="Message" cols="40" rows="5" class="form-control" required="required" aria-describedby="MessageHelpBlock"></textarea> 
      <span id="MessageHelpBlock" class="form-text text-muted">Tuliskan Keperluan Kamu Mengunjungi Perpustakaan</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

   </div> 
</body>
</html>