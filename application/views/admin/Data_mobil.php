<div class="main-content">
    <section class="section">
      <div class="section-header">
         <h1>Data Mobil</h1>
      </div>
      
   <div class="text-right">
      <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">
         <i class="fa fa-plus"></i>Tambah Data
      </a>
   </div>

     <?php echo $this->session->flashdata('pesan') ?>
      <table class="table table-hover table-striped table-bordered">
      	<thead>
            <tr class="text-center">
         		<th>No</th>
         		<th>Gambar</th>
         		<th>Type</th>
         		<th>Merk</th>
         		<th>No. Plat</th>
         		<th>Status</th>
         		<th>Aksi</th>
            </tr>
      	</thead>
      	<tbody>
      		<?php
      			$no=1;
      			foreach ($mobil as $mb) : ?>
               <tr>
   					<td class="text-center"><?php echo $no++ ?></td>
   					<td class="text-center">
                     <img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">          
                  </td>
   					<td class="text-center"><?php echo $mb->kode_type ?></td>
   					<td class="text-center"><?php echo $mb->merk ?></td>
   					<td><?php echo $mb->no_plat ?></td>
   					<td class="text-center"><?php
   					if ($mb->status == "0") {
   							echo "<span class='badge badge-danger'>Tidak Tersedia </span>";
   						}else {
   							echo "<span class='badge badge-primary'>Tersedia </span>";
   						}	
   					?>          
                  </td>
   					<td class="text-center">
   						<a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
   						<a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
   						<a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
   					</td>
               </tr>
      	    <?php endforeach; ?>
      	</tbody>
      </table>
    </section>
</div>  