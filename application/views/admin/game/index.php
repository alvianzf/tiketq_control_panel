
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
          <form method="POST" action="<?php echo base_url('game/proses_isi_game') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Isi Game</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <label>Kode Game</label>
                    <select name="code" class="form-control">
                     <?php foreach ($kode_pulsa as $kd) {?>
                                <option value="<?php echo $kd->kode; ?>"><?php echo $kd->kode; ?> ( <?php echo $kd->deskripsi; ?>)</option>
                               <?php }?>
                    </select>
                  </div>
                  <div class="col-12">
                    <label>Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="ex: 089531941653">
                  </div>
                   <div class="col-12">
                    <label>Transaksi Ke</label>
                    <input type="text" class="form-control" name="trx_ke" placeholder="ex: 2">
                    * untuk isi lebih dari 1x dlm sehari, isi urutan 2,3,4,dst
                  </div>
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Proses</button>
                </div>
              <!-- /.card-body -->
             
            </div>
</form> 
            </div>
          </div> <?php
          echo $this->session->flashdata('msg');
          ?>
        </div>
      </section>
