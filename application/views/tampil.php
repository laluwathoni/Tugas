<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Data Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
            <a href="<?= site_url('Ccontroller/tambah'); ?>" class="nav-link">Tambah Data</a>
			<a href="<?= site_url('Ccontroller/awal')?>" class="nav-link">Home</a>
			
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Lalu Wathoni</a>

		</div>
	</nav>
    <div class="alert alert-primary text-center mt-4">
		Data Sekolah
	</div>
    <div class="container">
       
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            
            </thead>
            <?php
            $no = 1;
            foreach ($isi as $item){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?= $item->id_61; ?></td>
                    <td><?= $item->kolom_jurusan; ?></td>
                    <td><?= $item->kolom_kelas; ?></td>
                    <td><?= $item->kolom_isi; ?></td>
                    <td>
						<a href="" class="btn btn-info btn-sm btn-primary">Edit</a>
						<a href="" class="btn btn-info  btn-sm btn-danger">Hapus</a>
					</td>
                    
                    
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

    
    </div>
</body>
</html>