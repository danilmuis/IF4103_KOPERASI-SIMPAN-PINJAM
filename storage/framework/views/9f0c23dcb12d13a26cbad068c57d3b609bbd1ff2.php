<?php $__env->startSection('pojok_kanan'); ?>
    <?php echo e(Session::get('account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Transfer</h1></center>
    <form method="post" action="transaksi/transfer">
        <?php echo e(csrf_field()); ?>

    
        <div style="margin-bottom: 50px" class="formTf">
            Masukkan nomor ID tujuan : <br>
            <input style="width: 320px" type="text" name="tujuan" required class="ktkTf">
            <br> <br>
            <input type="submit" value="Lanjut" id="tmbl">
        </div>            
        <div style="margin-bottom: 50px" class="formTf">
            Nominal uang yang akan disimpan <br>
            Rp. <input type="text" name="jumlahUang" required class="ktkTf">
            <br> <br>
            <input type="submit" value="Selesai" id="tmbl">
        </div>
    </form>
</div>
            
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/transfer.blade.php ENDPATH**/ ?>