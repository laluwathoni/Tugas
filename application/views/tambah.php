<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Tambah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
            <a href="<?= site_url('Ccontroller/tambah'); ?>" class="nav-link">Tambah Data</a>
			<a href="<?= site_url('Ccontroller/index')?>" class="nav-link">Home</a>
			
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Lalu Wathoni</a>

		</div>
	</nav>
    <div class="alert alert-primary text-center mt-4">
		Data Sekolah
	</div>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">Form Tambah Data Mahasiswa</div>
                <div class="card-body">
        
                    <form action="<?= site_url('Ccontroller/proses_tambah'); ?>" method="post">
                        <div class="form-grup">
                            <label for="">Jurusan</label>
				            <input type="text" name="txtjurusan" class="form-control">	
                        </div>
                        <div class="form-grup">
                            <label for="">Kelas</label>
			    	        <input type="text" name="txtkelas" class="form-control">	
                        </div>
                        <div class="form-grup">
                            <label for="">isi</label>
                            <input type="text" name="txtisi" class="form-control">
				            	
                        </div>
                        <br><br>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                        <a href="<?= site_url('Ccontroller/index'); ?>" class=" btn btn-warning">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

   
</body>
</html>