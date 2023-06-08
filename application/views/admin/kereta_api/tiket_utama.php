
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
                    <th>Lokasi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no=1; 
                  foreach ($data_tiket as $row) {?><tr>

                    <td><?php echo $no++;?></td>
                    <td><?php echo $row->code;?></td>
                    <td><?php echo $row->location;?></td>
                  
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


