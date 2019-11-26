<?php $__env->startSection('body'); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php if(session('alert')): ?>
    <?php echo e(session('alert')); ?>

<?php endif; ?>
<form method="POST" action="<?php echo e(url('registrasi/create')); ?>">
    <?php echo e(csrf_field()); ?>

        <div id="first_registrasi">
            <input id="reg1" type="text" class="ktkRegis" placeholder="Nama Lengkap" name="namaLengkap"><?php $__errorArgs = ['namaLengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><h7 id="error"> <?php echo e($message); ?></h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <input id="reg2"  type="text" class="ktkRegis" placeholder="NIK" name="nik"><?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><h7 id="error"> <?php echo e($message); ?></h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <input id="reg3"  type="text" class="ktkRegis" placeholder="Alamat" name="alamat"><?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <h7 id="error"> <?php echo e($message); ?> </h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <input id="reg4"  type="text" class="ktkRegis" placeholder="Tempat Lahir" name="tempat"><?php $__errorArgs = ['tempat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <h7 id="error"> <?php echo e($message); ?> </h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <div id="dalam">
                <input id="reg5" type="date" class="dateRegis" name="tanggal" required><br><br>
                <input class="reg6" type="radio" name="agama" value="Islam" checked>Islam    
                <input class="reg6" type="radio" name="agama" value="Kristen">Kristen
                <input class="reg6" type="radio" name="agama" value="Katholik">Katholik
                <input class="reg6" type="radio" name="agama" value="Budha">Budha
                <input class="reg6" type="radio" name="agama" value="Hindu">Hindu <br><br>
               
            </div>
        </div>
        <div id="second_registrasi">
            <input type="text" placeholder="Username" name="username" required><?php $__errorArgs = ['uname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <h7 id="error"> <?php echo e($message); ?> </h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <input type="password" placeholder="Password" name="psw" required><?php $__errorArgs = ['psw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <h7 id="error"> <?php echo e($message); ?> </h7> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            <input type="password" placeholder="Re-Enter Password" name="psw2" required><br><br>
            <input id="reg" type="submit" style="margin-left:50px" value="registrasi">
        </div>
</form>   
<div id="porm">
    <button id="next" style="margin-right:200px"> next</button>
</div>



    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/registrasi.blade.php ENDPATH**/ ?>