<div class="bg-white">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  
      <?php if(Auth()->user() == $recipe->user): ?>
        <div class="mx-4 mb-7 inline-flex rounded-md shadow-sm">
          <a href="<?php echo e(route('edit-recipe', [ 'recipeId' => $recipe->id ])); ?>"
            type="button"
            class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4
          focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2">
            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-m-book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-4 mr-1.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
            Edit Recipe
          </a>
      
          <button
            wire:click="toggle"
            type="button"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
          focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2">
            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-m-book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-4 mr-1.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
            Delete Recipe
          </button>
        </div>
      <?php endif; ?>
  
      <div>
        <h1 class="title mx-4 text-4xl lg:text-6xl mb-3"><?php echo e($recipe->name); ?></h1>
          <img
            class="mx-4 object-cover object-center w-3/4 lg:w-1/2 h-64 md:h-[35rem]"
            src="<?php echo e(asset('storage/'. $recipe->image)); ?>"
            alt="<?php echo e($recipe->name); ?>">
      </div>
        
        <div>
          <p class="text-lg mt-7 mx-4 leading-loose break-words">
            <?php echo e($recipe->description); ?>

          </p>
        </div>
  
      <div id="ingredients" class="mt-14">
        <ul class="w-full text-md font-medium text-gray-900">
          <h1 class="text-2xl font-bold px-4 py-2">ingredients</h1>
          <?php $__currentLoopData = $recipe->ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="w-full px-4 py-2 border-b border-gray-200"><?php echo e($ingredient); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
  
      <div id="instructions" class="mt-14">
        <ul class="w-full p-2 text-md font-medium text-gray-900 bg-gray-50 rounded-lg">
          <h1 class="text-2xl font-bold px-4 py-2">instructions</h1>
          <?php $__currentLoopData = $recipe->method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="w-full px-4 py-2">
              <strong><?php echo e($loop->index + 1 .'. '); ?></strong><?php echo e($step); ?>

            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      
      <div id="comments" class="mt-10">
        <section class="bg-white py-8 lg:py-16">
          <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-lg lg:text-2xl font-bold text-gray-900">
                Comments (<?php echo e(count($recipe->comment)); ?>)</h2>
            </div>
            <?php if(auth()->guard()->check()): ?>
              <form class="mb-6">
                <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                  <label for="comment" class="sr-only">Your comment</label>
                  <textarea id="comment" rows="6"
                            wire:model.defer="comment"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                            placeholder="Write a comment..." required></textarea>
                </div>
                <button
                  wire:click.prevent="addComment"
                  class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                  Post comment
                </button>
              </form>
            <?php else: ?>
              <div class="text-center mb-10">
                <p class="text-gray-400 text-md mb-4">Please sign in to add a comment</p>
                <a href="<?php echo e(route('login')); ?>"
                   class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                  Login
                </a>
              </div>
            <?php endif; ?>
            
            <?php $__currentLoopData = $recipe->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <article class="p-6 mb-6 text-base bg-white border-t border-gray-200">
                <footer class="flex justify-between items-center mb-2">
                  <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm text-gray-900">
                      <?php echo e($comment->user->name); ?>

                    </p>
                    <p class="text-sm text-gray-500">
                      <time><?php echo e($comment->created_at->diffForHumans()); ?></time>
                    </p>
                  </div>
                </footer>
                <p class="text-gray-800"><?php echo e($comment->content); ?></p>
              </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </section>
      </div>
  
        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.dialog-modal','data' => ['wire:model' => 'deleteModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'deleteModal']); ?>
           <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__('Delete Recipe')); ?>

           <?php $__env->endSlot(); ?>
    
           <?php $__env->slot('content', null, []); ?> 
            <?php echo e(__('Are you sure you want to delete your delicious recipe?')); ?>

           <?php $__env->endSlot(); ?>
    
           <?php $__env->slot('footer', null, []); ?> 
            <button
              class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
          focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2"
              wire:click="deleteRecipe(<?php echo e($recipeId->id); ?>)"
              wire:loading.attr="disabled">
              <?php echo e(__('Delete')); ?>

            </button>
            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['wire:click' => 'toggle','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'toggle','wire:loading.attr' => 'disabled']); ?>
              <?php echo e(__('Cancel')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
           <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH /home/hussain-fedora/code/recipewizard-boilerplate/resources/views/livewire/view-recipe.blade.php ENDPATH**/ ?>