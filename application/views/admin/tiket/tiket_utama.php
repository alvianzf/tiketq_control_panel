
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
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">Warning</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">Your Ip <?php echo $status ?> <?php echo $info ?>
        </div>
        <!-- /.card-footer-->
      </div>
  </section>
    <section class="content">
     
    <!-- Content Header (Page header) -->
      
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $judul ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                 <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Kota</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no=1; 
                  foreach ($rute as $row) {?>
                    <tr>

                    <td><?php echo $no++;?></td>
                    <td><?php echo $row->code;?></td>
                    <td><?php echo $row->city;?></td>
                  
                  </tr>  <?php }?>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </section>

    <!-- /.content -->


