<!DOCTYPE html>
<html>
<head>
   <title>Form Tambah Data Pengguna</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/1babd9929f.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
       <h1>Tambah Pengguna</h1>
       <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
           <div class="form-group">
               <label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Lengkap">
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="">Pilih Role Pengguna</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>                </div>
                    <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required placeholder="recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button" id="showPasswordBtn" onclick="togglePasswordVisibility()">
                                Lihat
                            </button>
                        </div>
                   </div>
               </div>  
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="no_telp">No. Telp</label>
                    <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
                </div>
           </div>
           <div class="form-group">
               <label for="alamat">Alamat Lengkap</label>
               <textarea class="form-control" id="alamat" name="alamat" required></textarea>
           </div>               
           <div class="form-group">
               <label for="foto">Unggah Foto</label>
               <input type="file" class="form-control" id="foto" name="foto">
           </div>
           <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
       </form>
   </div>

   <script>
       function togglePasswordVisibility() {
           var passwordInput = document.getElementById("password");
           if (passwordInput.type === "password") {
               passwordInput.type = "text";
           } else {
               passwordInput.type = "password";
           }
       }
   </script>
</body>
</html>
