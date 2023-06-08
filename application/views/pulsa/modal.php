
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('pulsa/tambah_kode_pulsa')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kode Pulsa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-12">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                                <option value="pulsa">Pulsa</option>
                                <option value="game">Game</option>
                                <option value="pln">PLN</option>
                                <option value="dana">Dana</option>
                    </select>
                  </div>
                   <div class="col-12">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                  </div>
                   <div class="col-12">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?php echo base_url('dashboard/cekharga'); ?>" target="_blank">*Lihat Panduan Kode</a>
              
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



                  <?php foreach ($data_pulsa as $row) {?>
      <div class="modal fade" id="modal-edit-<?php echo $row->id?>">
        <div class="modal-dialog">
          <form method="post" action="<?php echo base_url('pulsa/edit_kode')?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kode Pulsa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  
                   <div class="col-12">
                    <label>Kode</label>
                    <input type="hidden" name="id" value="<?php echo $row->id?>" class="form-control">
                    <input type="text" name="kode" value="<?php echo $row->kode?>" class="form-control">
                  </div>

                   <div class="col-12">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" value="<?php echo $row->deskripsi?>" class="form-control">
                  </div>
                   <div class="col-12">
                    <label>Harga</label>
                    <input type="number" name="harga" value="<?php echo $row->harga?>" class="form-control">
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?php echo base_url('dashboard/cekharga'); ?>" target="_blank">*Lihat Panduan Kode</a>
              
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>