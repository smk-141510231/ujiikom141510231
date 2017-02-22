<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">TAMBAH GOLONGAN</div>
                <?php echo Form::open(['url'=>'golongan']); ?>

                <div class="panel-body">
              		<div class="form-group<?php echo e($errors->has('kode_golongan') ? ' has-error' : ''); ?>">
                            <label for="kode_golongan" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                <input id="kode_golongan" type="text" class="form-control" name="kode_golongan" value="<?php echo e(old('kode_golongan')); ?>" required autofocus>

                                <?php if($errors->has('kode_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nama_golongan') ? ' has-error' : ''); ?>">
                            <label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <input id="nama_golongan" type="nama_golongan" class="form-control" name="nama_golongan" value="<?php echo e(old('nama_golongan')); ?>" required>

                                <?php if($errors->has('nama_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>

                            <div class="col-md-6">
                                <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" required>

                                <?php if($errors->has('besaran_uang')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
					<?php echo Form::submit('Save', ['class' => 'btn btn-primary form control']); ?>

					<?php echo Form::close(); ?>

                        </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>