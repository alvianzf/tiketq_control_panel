<?php
	if(isset($_POST['isi_pulsa'])){
        
$no_hp = $_POST['no_hp'];
$pulsa = $_POST['code'];
$url = 'https://portalpulsa.com/api/connect/';

$header = array(
'portal-userid: P163966',
'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', // lihat hasil autogenerate di member area
'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe', // lihat hasil autogenerate di member area
);

$data = array(
'inquiry' => 'I', // konstan
'code' => $pulsa, // kode produk
'phone' => $no_hp, // nohp pembeli
'idcust' => '6173859206', // Diisi jika produk memerlukan IDcust seperti: Unlock/Aktivasi Voucher, Game Online (FF, ML, PUBG, dll)
'trxid_api' => 'xxxx', // Trxid / Reffid dari sisi client
'no' => '1', // untuk isi lebih dari 1x dlm sehari, isi urutan 1,2,3,4,dst
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$this->session->set_flashdata('message_succces','Proses pengisian'); }?>
	
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Login - Reni Jaya Travel</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div class="pt-inner2">
                <div style="margin-top: 6%;">
                    <div class="modal-content md-cs">
                        <div class="modal-header bg-purple text-white">
                            <h3 class="modal-title" style="color: white;" id="myModalLabel"><i class="fa fa-user"></i>Pulsa</h3>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                                <label>Pulsa</label>
                                <select name="code" class="form-control"  autofocus="">
                                <option value="I5">5000</option>
                                </select>
                                <br>
                                <label>No Hp</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No Hp" autofocus=""><br>
                                <input type="submit" class="btn btn-block bg-purple" value="ISI PULSA" name="isi_pulsa"><br>
                              
                            </div>
                        </form><p align="center">*Aktifkan VPN</p>  
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php $this->load->view('layout/footer'); ?>
	
</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        if($this->session->flashdata('message_err')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_err'); ?>",
            icon: "error",
            button: false,
            timer: 1200
        });
    </script>
    <?php 
        } else if($this->session->flashdata('message_succces')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: false,
        }).then(function() {
            window.location = "/";
        });
    </script>
    <?php 
        }
    ?>

<?php $this->load->view('layout/js'); ?>
</body>
</html>
