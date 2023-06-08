<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <?php
          echo $this->session->flashdata('msg');
          ?>
          <div class="card">

              <div class="card-header">
                <h3 class="card-title"><?php echo $judul?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-header">
                  <button type="button" data-toggle="modal" data-target="#modal-default" type="submit" class="btn btn-info">Tambah</button>
                </div>
            
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                 <thead>
                  <tr>
                    <th>Kategori</th>
                    <th>Kode</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data_pulsa as $row) {?>
                    <tr>

                    <td><?php echo strtoupper($row->kategori);?></td>
                    <td><?php echo $row->kode;?></td>

                    <td><?php echo $row->deskripsi;?></td>
                    <td><?php echo 'Rp. '.number_format($row->harga);?></td>
                  <td>
                  <button type="button" data-toggle="modal" data-target="#modal-edit-<?php echo $row->id?>" type="submit" class="btn btn-warning">Edit</button></td>
                  </tr>  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include'modal.php' ?>
  </section>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
    
  });
</script>