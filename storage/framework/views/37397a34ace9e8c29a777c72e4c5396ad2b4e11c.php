<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu <?php if(isset($configData['navbarType']) && ($configData['navbarType'] !== "navbar-hidden") ): ?><?php echo e($configData['navbarType']); ?> <?php else: ?> <?php echo e('navbar-sticky'); ?><?php endif; ?> 2-columns
<?php if($configData['theme'] === 'dark'): ?><?php echo e('dark-layout'); ?> <?php elseif($configData['theme'] === 'semi-dark'): ?><?php echo e('semi-dark-layout'); ?> <?php else: ?> <?php echo e('light-layout'); ?> <?php endif; ?>
<?php if($configData['isContentSidebar']=== true): ?> <?php echo e('content-left-sidebar'); ?> <?php endif; ?>
<?php if(isset($configData['footerType'])): ?> <?php echo e($configData['footerType']); ?> <?php endif; ?> <?php echo e($configData['bodyCustomClass']); ?>

<?php if($configData['isCardShadow'] === false): ?><?php echo e('no-card-shadow'); ?><?php endif; ?>"
data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-framework="laravel">

  <!-- BEGIN: Header-->
  <?php echo $__env->make('panels.horizontal-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- END: Header-->

  <!-- BEGIN: Main Menu-->
  <?php echo $__env->make('panels.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    
	<?php if($configData['isContentSidebar'] === true): ?>
		<div class="content-area-wrapper">
			<div class="sidebar-left">
				<div class="sidebar">
					<?php echo $__env->yieldContent('sidebar-content'); ?>
				</div>
			</div>
			<div class="content-right">
        <div class="content-overlay"></div>
				<div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
			</div>
		</div>
	<?php else: ?>
    
    <div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
        <?php if($configData['pageHeader'] === true && isset($breadcrumbs)): ?>
          <?php echo $__env->make('panels.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
			</div>
			<div class="content-body">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>
	<?php endif; ?>
  </div>
  <!-- END: Content-->
<?php if($configData['isCustomizer'] === true && isset($configData['isCustomizer'])): ?>
  <!-- BEGIN: Customizer-->
  <!-- End: Customizer-->

  <!-- Buynow Button -->
  <!--<div class="buy-now">
    <?php echo $__env->make('pages.buy-now', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div> -->
  <?php endif; ?>

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->
  <?php echo $__env->make('panels.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- END: Footer-->

  <?php echo $__env->make('panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<!-- END: Body-->
<?php /**PATH D:\laravel_frest_bootstrap\resources\views/layouts/horizontalLayoutMaster.blade.php ENDPATH**/ ?>