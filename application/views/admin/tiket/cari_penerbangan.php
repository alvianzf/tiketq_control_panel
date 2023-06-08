
<?php 
header("Connection: Keep-alive"); 
error_reporting (E_ALL ^ E_NOTICE);
base_url('/vendor/autoload.php');
$client = new GuzzleHttp\Client();
$response = $client->request(
    'POST',
    'http://klikmbc.co.id/json/getcodearea-json',
);
$headers = $response->getHeaders();
$body = $response->getBody()->getContents();
$rute = json_decode($body);

?>
 <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
          <form method="POST" action="<?php echo base_url('tiket/proses_cari_penerbangan') ?>">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <label>Asal</label>
                    <select name="from" class="form-control">
                     <?php foreach ($rute as $kd) {?>
                      <option value="<?php echo $kd->code ?>"><?php echo $kd->city; ?></option>
                               <?php }?>
                    </select>
                  </div>
                   <div class="col-12">
                    <label>Tujuan</label>
                    <select name="to" class="form-control">
                     <?php foreach ($rute as $kd) {?>
                                <option value="<?php echo $kd->code ?>"><?php echo $kd->city; ?></option>
                               <?php }?>
                    </select>
                  </div>
                  
                   <div class="col-12">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="date" placeholder="ex: 2">
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
  


