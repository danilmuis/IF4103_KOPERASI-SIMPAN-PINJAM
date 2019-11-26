<?php $__env->startSection('pojok_kanan'); ?>
<a href="<?php echo e(url('logout')); ?>"><button style="background-color: white; width: 60px"  >Logout</button></a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Transfer</h1></center>
    <form method="post" action="transaksi/transfer">
        <?php echo e(csrf_field()); ?>

    
        <div style="margin-bottom: 50px" class="formTf">
            Masukkan nomor ID tujuan : <br>
            <input style="width: 320px" type="text" name="tujuan" required class="ktkTf"placeholder="<?php if(Session::has('akun1')): ?> <?php echo e(Session::get('akun1')); ?> <?php endif; ?>">
            <br> <br>
        </div>            
        <div style="margin-bottom: 50px" class="formTf">
            Nominal uang yang akan disimpan <br>
            Rp. <input type="text" name="jumlahUang" required class="ktkTf"  placeholder="<?php if($errors->any()): ?> <?php echo e($errors->first()); ?> <?php endif; ?>">
            <br> <br>
            <input type="submit" value="Selesai" id="tmbl">
        </div>
    </form>
</div>
            
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/transfer.blade.php ENDPATH**/ ?>