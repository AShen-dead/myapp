<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Our Autobiographies']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Autobiographies']); ?>
    

    <div class="card-container">
        <div class="card">
            <img src="<?php echo e(asset('pictures/jacen.jpg')); ?>" alt="Jacen">
            <div class="card-body">
                <h5 class="card-title">Jacen Luke A. Cielos</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="<?php echo e(route('biography.jacen')); ?>" class="btn btn-custom">View</a>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo e(asset('pictures/moonie.jpg')); ?>" alt="moonie">
            <div class="card-body">
                <h5 class="card-title">Moonie Rey L. Leonen</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="<?php echo e(route('biography.moonie')); ?>" class="btn btn-custom">View</a>
            </div>
        </div> 

        <div class="card">
            <img src="<?php echo e(asset('pictures/Jake.jpg')); ?>" alt="Jake">
            <div class="card-body">
                <h5 class="card-title">Jake Ashley Y. Ballenas</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="<?php echo e(route('biography.jake')); ?>" class="btn btn-custom">View</a>
            </div>
        </div> 

        <div class="card">
            <img src="<?php echo e(asset('pictures/joross.jpg')); ?>" alt="jrss">
            <div class="card-body">
                <h5 class="card-title">Joross L. Manzano</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="<?php echo e(route('biography.joross')); ?>" class="btn btn-custom">View</a>
            </div>
        </div> 
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\myapp\resources\views/biographies.blade.php ENDPATH**/ ?>