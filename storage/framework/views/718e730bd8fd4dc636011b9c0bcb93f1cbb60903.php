<?php $__env->startSection('pojok_kanan'); ?>
<button style="background-color: white; width: 60px" onclick="document.getElementById('modal-wrapper').style.display='block'"  >Login</button>
    <a href=" <?php echo e(action('homeController@registrasi')); ?>"><button style="background-color: navy; border: 1px solid white; color: white; width: 60px">Daftar</button></a>
    


    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" action="<?php echo e(url('login')); ?>" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="<?php echo e(url('assets/login.png')); ?>" alt="Avatar" class="avatar">
            
        </div>

        <div class="container" id="formLogin">
            <?php echo e(csrf_field()); ?>

            <input type="text" placeholder="Enter Username" name="username" class="ktkLogin">
            <input type="password" placeholder="Enter Password" name="password" class="ktkLogin">
            <button type="submit" class="myButton">Login</button>
        </div>

        </form>
    </div>
    
    <script>
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
    </script>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($x->namaLengkap); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(session('regis')): ?>
  <marquee behavior="scroll" direction="left">
    <img src="<?php echo e(url('assets/Smile-icon.png')); ?>" width="100" height="100"><br>
    <?php echo e(session('regis')); ?>

  </marquee>
<?php endif; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?php echo e(url('assets/a.jpg')); ?>" alt="Los Angeles" width="1100" height="500">
                          </div>
                          <div class="carousel-item">
                            <img src="<?php echo e(url('assets/b.jpg')); ?>" alt="Chicago" width="1100" height="500">  
                          </div>
                          <div class="carousel-item">
                            <img src="<?php echo e(url('assets/a.jpg')); ?>" alt="New York" width="1100" height="500">   
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                      </div>
                      <div class="container-fluid" style="background-color: navy;margin-top: 30px; margin-bottom: 100px">
                        <div id="kurs">
                            <div style="width:200px; margin-left: 50px" class="kurs">
                                <center style="padding-bottom: 20px">USD *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>14,211.00</center>
                            </div>
                            <div style="width:200px" class="kurs">
                                <center style="padding-bottom: 20px">EUR *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>15,681.84</center>
                            </div>
                            <div style="width:200px" class="kurs">
                                <center style="padding-bottom: 20px">CNY *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>2,005.65</center>
                            </div>
                            <div class="kurs ket" style="height:200px;width: 200px;border:none;background:none;color:lightblue; overflow:block ">
                                Berikut adalah KURS beberapa Mata Uang saat ini <br>
                                <p style="font-size: 13px">* Sewaktu-waktu dapat berubah</p>
                            </div>
                        </div> 
                        <div style="background-color: lightblue; width: 100%; height: 20px; border: 2px solid white; border-bottom: none">

                        </div>   
                        
                      </div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/welcomepage.blade.php ENDPATH**/ ?>