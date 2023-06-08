 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
          <form method="POST" action="<?php echo base_url('tiket/proses_reset_password') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                   <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                  </div>
                   <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone">
                  </div>
                </div>

                <div class="col-md-6">
                  
                   <div class="form-group">
                    <label>Kode Agen</label>
                    <input type="text" class="form-control" name="agencode">
                  </div>
                   <div class="form-group">
                    <label>Password Baru</label>
                    <input type="text" class="form-control" name="newpassword">
                  </div>
                </div>
              </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit</button>
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
  


