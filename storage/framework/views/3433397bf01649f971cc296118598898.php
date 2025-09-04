<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Jake Ashley Ballenas Biography']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Jake Ashley Ballenas Biography']); ?>
    <div class="profile-card">
        <div class="banner">
            <div class="avatar" style="background-image: url('<?php echo e(asset('pictures/jake.jpg')); ?>');"></div>
        </div>
        <div class="content">
            <h2>Jake Ashley Y. Ballenas</h2>
            <h4>BSIT STUDENT</h4>
            <h5>Born May 2, 2004</h5>
            <hr>
            <h4>ABOUT ME</h4>
            <p>Hello! I’m Jake a vibe coder but hoping it doesn't stay that way:D, Im an aspiring Artist. </p>
            <hr>
            <h4>HOBBIES</h4>
            <ul>
                <li>Drawing</li>
                <li>Gaming</li>
                <li>Reading Manga(comics)</li>
            </ul>
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
<?php /**PATH C:\xampp\htdocs\myapp\resources\views/biography/jake.blade.php ENDPATH**/ ?>