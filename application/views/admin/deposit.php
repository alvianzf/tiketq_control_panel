
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
          <form method="POST" action="<?php echo base_url('dashboard/proses_deposit') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Isi Pulsa</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <label>Bank</label>
                    <select name="bank" class="form-control">
                                <option value="bni">BNI</option>
                                <option value="bri">BRI</option>
                                <option value="bca">BCA</option>
                                <option value="mandiri">MANDIRI</option>
                                <option value="muamalat">MUAMALAT</option>
                    </select>
                    * bank tersedia: bca, bni, mandiri, bri, muamalat
                  </div>
                  <div class="col-12">
                    <label>Nominal Deposit</label>
                    <input type="number" class="form-control" name="nominal">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Deposit</button>
                </div>
              <!-- /.card-body -->

            </div>
</form> 
            </div>

          <div class="col-md-6">
             <?php
          echo $this->session->flashdata('msg');
          ?>
          </div>
          </div>
         
        </div>

      </section>