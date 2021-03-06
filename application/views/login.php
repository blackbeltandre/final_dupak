<!DOCTYPE html> <html lang="en"> <head>
    <meta charset="utf-8">
    
    <title>SIOPAK - KEMENDAGRI </title>
 <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/kemendagri_new.jpeg">
 <meta name="description" content="SIOPAK: Sistem basis data yang membantu Pejabat Fungsional memproses pengelolaan administrasi dan 
penilaian angka kredit media elektronik.">
 
<!-- Google / Search Engine Tags --> <meta itemprop="name" content="SIOPAK | BPSDM KEMENDAGRI R.I"> <meta itemprop="description" 
content="SIOPAK: Sistem basis data yang membantu Pejabat Fungsional memproses pengelolaan administrasi dan penilaian angka kredit media 
elektronik."> <meta itemprop="image" content="<?php echo base_url(); ?>assets/images/kemendagri_new.png">
 
<!-- Facebook Meta Tags --> <meta property="og:url" content="<?php echo base_url() ?>assets/images/kemendagri_new.jpeg"> <meta 
property="og:type" content="SIOPAK | BPSDM KEMENDAGRI R.I"> <meta property="og:title" content="SIOPAK | BPSDM KEMENDAGRI R.I"> <meta 
property="og:description" content="SIOPAK: Sistem basis data yang membantu Pejabat Fungsional memproses pengelolaan administrasi dan 
penilaian angka kredit media elektronik."> <meta property="og:image" content="<?php echo base_url(); 
?>assets/images/kemendagri_new.png">
 
<!-- Twitter Meta Tags --> <meta name="twitter:card" content="SIOPAK | BPSDM KEMENDAGRI R.I"> <meta name="twitter:title" 
content="PT.SIOPAK | BPSDM KEMENDAGRI R.I"> <meta name="twitter:description" content="SIOPAK | BPSDM KEMENDAGRI R.I"> <meta 
name="twitter:image" content="<?php echo base_url() ?>assets/images/kemendagri_new.jpeg">
    <meta name="description" content="SIOPAK KEMENDAGRI">
    <meta name="author" content="KEMENTERIAN DALAM NEGERI REPUBLIK INDONESIA">
    <!-- Le styles -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
   <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/loader-style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signin.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <style>
        body{
            background-image: url('<?php echo base_url() ?>assets/img/mp3.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-position: center;
        }
    </style>
    <style>
    #myModal {
        z-index: 999;
    }
    </style> </head> <body >
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login" style="opacity:0.5; background: rgb(168, 10, 2);padding-left:3px;padding-top:3px;">
                        <br />
                    <img src="<?php echo base_url() ?>assets/img/fix1.png" class="img-responsive" style="max-width: 90%;">
                        <!-- <h1>SIOPAK KEMENDAGRI -->
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">
                        <div>
                    <?php echo $this->session->flashdata('item'); ?>
                        </div>
                        <form role="form" method="POST" action="<?php echo base_url() ?>login/proses">
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label for="inputUsernameEmail">NIP</label>
                                <input type="text" name="nip" id="inputUsernameEmail" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot password?</a> -->
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" id="inputPassword" class="form-control">
                            </div>
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox">Remember me</label>
                            </div>
                            <button class="btn btn btn-primary pull-right" type="submit">
                                Log In
                            </button>
                        </form>
                        <br /><br />
                        <strong> Login Penguji ? &nbsp; &nbsp; <a class="btn btn-success" data-toggle="modal" data-target="#myModal"> 
Klik Disini </a> </strong> <!-- <br /><br /> <strong> &nbsp; &nbsp; <a class="btn btn-info" data-toggle="modal" 
data-target="#modal_video"> Video Penggunaan Aplikasi </a> </strong> -->
                        <hr>
                        <br />
                        <div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block">
                                    Belum Punya Akun ? Daftar <a href="<?php echo base_url() ?>registrasi">Disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">&copy SIOPAK 2020 <br> Copyright By BPSDM Kementerian Dalam Negeri Republik Indonesia</h6>
        </div>
    </div>
    <div id="test1" class="gmap3"></div>
    <!-- END OF PAPER WRAP --> <!--
    <div class="modal fade modal-lg bs-example-modal-lg" id="modal_video" tabindex="-1" data-backdrop="false" aria-hidden="true" 
role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Video Penggunaan Aplikasii </h4>
      </div>
      <div class="modal-body"> <iframe width="560" height="315" src="https://www.youtube.com/embed/iDdjqHYZchw" frameborder="0" 
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> </div>
 --> <div class="modal fade" id="myModal" tabindex="-1" data-backdrop="false" aria-hidden="true" role="dialog" 
aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 
class="modal-title" id="myModalLabel">Login Sebagai Penguji </h4> </div> <div class="modal-body"> <div id="hasil_login"></div> <form 
role="form" method="POST" action="<?php echo base_url() ?>penguji/login/proses"> <div class="form-group"> <!-- <a href="#" 
class="pull-right label-forgot">Forgot email?</a> --> <label for="inputUsernameEmail">NIP</label> <input type="text" name="nip" 
id="nip_penguji" class="form-control"> </div> <div class="form-group"> <!-- <a href="#" class="pull-right label-forgot">Forgot 
password?</a> --> <label for="inputPassword">Password</label> <input type="password" name="password" id="password_penguji" 
class="form-control"> </div> </form> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" 
data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary" id="btnlogin" 
onclick="validasilogin()">Login</button> </div> </div> </div> </div>
    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript">
    var base_url = '<?php echo base_url() ?>';
    function validasilogin(){
    var nip = $("#nip_penguji").val();
    var password = $("#password_penguji").val();
        var data = 'nip='+nip+'&password='+password;
        console.log(data);
    $.ajax({
        type:"POST",
        url:"<?php echo base_url() ?>penguji/login/proses",
        data:data,
        beforeSend:function(){
            $("#btnlogin").attr('disabled');
        },success:function(dt){
            console.log(dt);
            if(dt == 'sukses'){
                $("#hasil_login").html('<div class="alert alert-info"> Login Berhasil </div>');
                setTimeout(function(){ window.location.href = base_url+'penguji/dashboard' }, 3000);
            }else{
                $("#hasil_login").html('<div class="alert alert-danger"> Login Gagal </div>');
            }
        }
    })
}
    // $(function() {
    // $("#test1").gmap3({
    // marker: {
    // latLng: [-7.782893, 110.402645],
    // options: {
    // draggable: true
    // },
    // events: {
    // dragend: function(marker) {
    // $(this).gmap3({
    // getaddress: {
    // latLng: marker.getPosition(),
    // callback: function(results) {
    // var map = $(this).gmap3("get"),
    // infowindow = $(this).gmap3({
    // get: "infowindow"
    // }),
    // content = results && results[1] ? results && results[1].formatted_address : "no address";
    // if (infowindow) {
    // infowindow.open(map, marker);
    // infowindow.setContent(content);
    // } else {
    // $(this).gmap3({
    // infowindow: {
    // anchor: marker,
    // options: {
    // content: content
    // }
    // }
    // });
    // }
    // }
    // }
    // });
    // }
    // }
    // },
    // map: {
    // options: {
    // zoom: 15
    // }
    // }
    // });
    // });
    </script> </body> </html>
