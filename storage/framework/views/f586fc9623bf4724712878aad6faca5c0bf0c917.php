<footer class="footer footer-light <?php if(isset($configData['footerType'])): ?><?php echo e($configData['footerClass']); ?><?php endif; ?>">
  <!--<p class="clearfix mb-0">
    <span class="float-left d-inline-block"><script>document.write(new Date().getFullYear())</script> &copy; COMSINSIDER</span>
    <span class="float-right d-sm-inline-block d-none">Crafted with
      <i class="bx bxs-heart pink mx-50 font-small-3"></i>by
      <a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">COMSINSIDER</a>
    </span>
  </p>-->
  <?php if($configData['isScrollTop'] === true): ?>
  <button class="btn btn-primary btn-icon scroll-top" type="button" style="display: inline-block;">
  <i class="bx bx-up-arrow-alt"></i>
  </button>
  <?php endif; ?>
</footer>

<?php /**PATH C:\xampp\htdocs\CLIFO-CRM-TEMPLATE-laravel\laravel-version\resources\views/panels/footer.blade.php ENDPATH**/ ?>