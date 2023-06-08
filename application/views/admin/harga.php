
  <section class="content">

      <div class="container-fluid">
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cek harga realtime</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-footer-->
      </div></div>
  </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('dashboard/cekharga')?>">
              <div class="col-3">
                  <div class="form-group">
                    <select name="code" class="form-control">
                      <option value="PULSA">PULSA</option>
                      <option value="PLN">PLN</option>
                      <option value="GAME">GAME</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Cek</button>
                </div>
              </form>
              <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Data Harga</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?php 

                    $harga = str_replace("{", "", $harga);
                    $harga = str_replace("result", "", $harga);
                    $harga = str_replace("}", "", $harga);
                    $harga = str_replace("message", "", $harga);
                    $harga = str_replace("success", "", $harga);
                    $harga = str_replace(",", "", $harga);
                    $harga = str_replace("[", "", $harga);
                    $harga = str_replace("]", "", $harga);
                    $harga = str_replace('"": ""', '', $harga);
                    $harga = str_replace('"":', '', $harga);
                    $harga = str_replace('"provider": "PLN"', '', $harga);
                    $harga = str_replace('"provider_sub": "PLN"', '', $harga);
                    $harga = str_replace('"operator": "PLN"', '', $harga);
                    $harga = str_replace('"operator_sub": "PLN"', '', $harga);
                    echo "<pre>".$harga."</pre>";?></td>
                
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>