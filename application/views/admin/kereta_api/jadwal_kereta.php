 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
          <form method="POST" action="<?php echo base_url('kereta_api/tampilkan_jadwal') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-6">

                    <input type="hidden" class="form-control" name="username" value="<?php echo $username?>">
                    <input type="hidden" class="form-control" name="password" value="<?php echo $password?>">
                   <div class="form-group">
                    <label>From</label>
                    <select class="form-control" name="from">
                     <?php foreach ($kode_stasiun as $row) {?>
                      <option value="<?php echo $row->code?>"><?php echo $row->location;?></option>
                    <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>To</label>
                    <select class="form-control" name="from">
                     <?php foreach ($kode_stasiun as $row) {?>
                      <option value="<?php echo $row->code?>"><?php echo $row->location;?></option>
                    <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                      <input type="date" class="form-control" name="date">
                  </div>
                </div>

                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label>Dewasa</label>
                      <input type="number" class="form-control" name="adult" placeholder="1">
                  </div>
                  <div class="form-group">
                    <label>Bayi</label>
                      <input type="number" class="form-control" name="infant" placeholder="1">
                  </div>

                  <div class="form-group">
                    <label>Sisa Kursi</label>
                      <input type="number" class="form-control" name="show_seatavail" placeholder="1">
                  </div>
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
  


