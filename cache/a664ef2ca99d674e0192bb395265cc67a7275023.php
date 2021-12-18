<?php $__env->startSection('head'); ?>
<title><?php echo e(base64_decode($_GET['key'])); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bg'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
 <a class="navbar-brand" href="#"><?php echo e((base64_decode($_GET['key']))); ?></a>
	

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<img src="<?php echo e(base64_decode($_GET['img'])); ?>" width ="990px" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT'; alt="<?php echo e((base64_decode($_GET['key']))); ?>" title="<?php echo e((base64_decode($_GET['key']))); ?>"">
<script>
window.history.replaceState({}, document.title, "/");
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('konten1', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>