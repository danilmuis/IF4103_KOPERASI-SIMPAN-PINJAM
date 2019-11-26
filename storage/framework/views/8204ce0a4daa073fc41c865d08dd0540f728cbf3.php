<?php $__env->startSection('pojok_kanan'); ?>
<a href="<?php echo e(url('logout')); ?>"><button style="background-color: white; width: 60px"  >Logout</button></a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pinjaman</h1></center>
    <div id="formTarik">
    <form method="post" action="transaksi/pinjam">
    <?php echo e(csrf_field()); ?>

                Pilih tempat pengambilan uang
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Indomaret" name="pembayaran" checked>Indomaret
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Koperasi" name="pembayaran">Alfamart
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Koperasi" name="pembayaran">Koperasi
                    </label>
                </div>
            </div>
            <div class="posisi" id="formTarik">
                Nominal uang yang akan dipinjam <br>
                Rp. <input type="text" name="jumlahUang" required id="ktk" placeholder="<?php if($errors->any()): ?> <?php echo e($errors->first()); ?> <?php endif; ?>">
                <br> <br>
                <input id="tmbl" type="submit" value="Selesai" id="tmbl">
            </div>
    </form>
    </div>    
            
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/pinjam.blade.php ENDPATH**/ ?>