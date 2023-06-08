 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
          <form method="POST" action="<?php echo base_url('tiket/cari_kode_booking') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                
                   <div class="col-12">
                    <label>Kode Booking</label>
                    <input type="text" class="form-control" name="kodebooking">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Cari</button>
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
  


