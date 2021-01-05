<div class="container">
	<div class="card mx-auto" style="margin-top: 200px; width: 80%">
		<div class="card-header table-responsive">
			Data Transaksi Anda
		</div>

		<span class="mt-2 p-2"><?php echo $this->session->set_flashdata('pesan') ?></span>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama Customer</th>
					<th class="text-center">Merk Mobil</th>
					<th class="text-center">No Plat</th>
					<th class="text-center">Harga Sewa</th>
					<th class="text-center">Action</th>
				</tr>

				<?php $no=1; 
				foreach ($transaksi as $tr) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $tr->nama ?></td>
						<td><?php echo $tr->merk ?></td>
						<td><?php echo $tr->no_plat ?></td>
						<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
						<td>
							<?php if($tr->status_rental == "Selesai") { ?>
								<button class="btn btn-sm btn-primary">Rental Selesai</button>
							<?php }else{ ?>
								<a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran </a>
							<?php } ?>


							<?php
								if($tr->status_rental == 'Belum Selesai') { ?>
									<a onclick="return confirm('Yakin Membatalkan Transaksi?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
							<?php }else{ ?>
									<button type="button" class="btn btn-sm btn-danger ml-2" data-toggle="modal" data-target="#exampleModal">
									  Batal
									</button>
							<?php } ?>	

						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf, Transaksi ini sudah selesai dan tidak bisa dibatalkan!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>