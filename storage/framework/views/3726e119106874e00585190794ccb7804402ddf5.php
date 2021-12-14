
<?php if($configData['mainLayoutType'] == 'vertical-menu'): ?>
<div class="main-menu menu-fixed <?php if($configData['theme'] === 'light'): ?> <?php echo e("menu-light"); ?> <?php else: ?> <?php echo e('menu-dark'); ?> <?php endif; ?> menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
      <div class="brand-logo">
        <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>icon</title>
          <defs>
              <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                  <stop stop-color="#5A8DEE" offset="0%"></stop>
                  <stop stop-color="#699AF9" offset="100%"></stop>
              </lineargradient>
              <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop stop-color="#FDAC41" offset="0%"></stop>
                  <stop stop-color="#E38100" offset="100%"></stop>
              </lineargradient>
          </defs>
          <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="sprite" transform="translate(-69.000000, -61.000000)">
                  <g id="Group" transform="translate(17.000000, 15.000000)">
                      <g id="icon" transform="translate(52.000000, 46.000000)">
                          <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"></path>
                          <path id="Combined-Shape" d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z" fill="#4880EA"></path>
                          <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" fill="url(#linearGradient-1)"></path>
                          <rect id="Rectangle" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                          <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                      </g>
                  </g>
              </g>
          </g>
        </svg>
      </div>
      <h2 class="brand-text mb-0">
        <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
        GHL
        <?php else: ?>
        GHL
        <?php endif; ?>
      </h2>
      </a>
    </li>
        <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
          <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
        </a>
        </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
        <?php if(!empty($menuData[0]) && isset($menuData[0])): ?>
        <?php $__currentLoopData = $menuData[0]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($menu->navheader)): ?>
                <li class="navigation-header text-truncate"><span><?php echo e($menu->navheader); ?></span></li>
            <?php else: ?>
            <li class="nav-item <?php echo e(Route::currentRouteName() === $menu->slug ? 'active' : ''); ?>">
            <a href="<?php if(isset($menu->url)): ?><?php echo e(asset($menu->url)); ?> <?php endif; ?>" <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
                <?php if(isset($menu->icon)): ?>
                    <i class="menu-livicon" data-icon="<?php echo e($menu->icon); ?>"></i>
                <?php endif; ?>
                <?php if(isset($menu->name)): ?>
                    <span class="menu-title text-truncate"><?php echo e(__('locale.'.$menu->name)); ?></span>
                <?php endif; ?>
                <?php if(isset($menu->tag)): ?>
                <span class="<?php echo e($menu->tagcustom); ?> ml-auto"><?php echo e($menu->tag); ?></span>
                <?php endif; ?>
            </a>
            <?php if(isset($menu->submenu)): ?>
                <?php echo $__env->make('panels.sidebar-submenu',['menu' => $menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul>
  </div>
</div>
<?php endif; ?>

<?php if($configData['mainLayoutType'] == 'horizontal-menu'): ?>
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow
<?php if($configData['navbarType'] === 'navbar-static'): ?> <?php echo e('navbar-sticky'); ?> <?php endif; ?>" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
          <div class="brand-logo">
            <img src="<?php echo e(asset('images/logo/logo.svg')); ?>" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
            GHL <?php echo e($configData['templateTitle']); ?>

            <?php else: ?>
            GHL
            <?php endif; ?>
          </h2>
          </a>
      </li>
      <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
      </li>
      </ul>
  </div>
  <div class="shadow-bottom"></div>
  <!-- Horizontal menu content-->
  <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
      <?php if(!empty($menuData[1]) && isset($menuData[1])): ?>
          <?php $__currentLoopData = $menuData[1]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="<?php if(isset($menu->submenu)): ?><?php echo e('dropdown'); ?> <?php endif; ?> nav-item" data-menu="dropdown">
          <a class="<?php if(isset($menu->submenu)): ?><?php echo e('dropdown-toggle'); ?> <?php endif; ?> nav-link" href="<?php echo e(asset($menu->url)); ?>"
            <?php if(isset($menu->submenu)): ?><?php echo e('data-toggle=dropdown'); ?> <?php endif; ?> <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
              <i class="menu-livicon" data-icon="<?php echo e($menu->icon); ?>"></i>
              <span><?php echo e(__('locale.'.$menu->name)); ?></span>
          </a>
          <?php if(isset($menu->submenu)): ?>
              <?php echo $__env->make('panels.sidebar-submenu',['menu'=>$menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
      </ul>
  </div>
  <!-- /horizontal menu content-->
  </div>
<?php endif; ?>


<?php if($configData['mainLayoutType'] == 'vertical-menu-boxicons'): ?>
<div class="main-menu menu-fixed <?php if($configData['theme'] === 'light'): ?> <?php echo e("menu-light"); ?> <?php else: ?> <?php echo e('menu-dark'); ?> <?php endif; ?> menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
        <div class="brand-logo">
          <img src="<?php echo e(asset('images/logo/logo.svg')); ?>" class="logo" alt="">
        </div>
        <h2 class="brand-text mb-0">
          <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
          GHL <?php echo e($configData['templateTitle']); ?>

          <?php else: ?>
          GHL
          <?php endif; ?>
        </h2>
      </a>
    </li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
      <?php if(!empty($menuData[2]) && isset($menuData[2])): ?>
      <?php $__currentLoopData = $menuData[2]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(isset($menu->navheader)): ?>
              <li class="navigation-header text-truncate"><span><?php echo e($menu->navheader); ?></span></li>
          <?php else: ?>
          <li class="nav-item <?php echo e(Route::currentRouteName() === $menu->slug ? 'active' : ''); ?>">
            <a href="<?php if(isset($menu->url)): ?><?php echo e(asset($menu->url)); ?> <?php endif; ?>" <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
            <?php if(isset($menu->icon)): ?>
              <i class="<?php echo e($menu->icon); ?>"></i>
            <?php endif; ?>
            <?php if(isset($menu->name)): ?>
              <span class="menu-title text-truncate"><?php echo e(__('locale.'.$menu->name)); ?></span>
            <?php endif; ?>
            <?php if(isset($menu->tag)): ?>
              <span class="<?php echo e($menu->tagcustom); ?> ml-auto"><?php echo e($menu->tag); ?></span>
            <?php endif; ?>
           </a>
          <?php if(isset($menu->submenu)): ?>
            <?php echo $__env->make('panels.sidebar-submenu',['menu' => $menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          </li>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </ul>
  </div>
</div>
<?php endif; ?>
<?php /**PATH D:\laravel_frest_bootstrap\resources\views/panels/sidebar.blade.php ENDPATH**/ ?>