<?php /* /home/no_tenkz/Web/inventory/resources/views/template/index.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php echo $__env->make('includes.dashboard.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>

<body>
    <div class="wrapper horizontal-layout-2">

        
        <?php echo $__env->make('includes.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <div class="main-panel">
            <div class="content">
                <section class="section">
                    <?php echo $__env->yieldContent('content'); ?>
                </section>
            </div>
        </div>
        
        <?php echo $__env->make('includes.dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>
    
    <?php echo $__env->make('includes.dashboard.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html>
