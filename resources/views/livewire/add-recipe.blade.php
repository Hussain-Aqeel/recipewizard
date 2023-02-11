<div>
  <div class="py-12">
    <div class="max-w-7xl mx-4 lg:mx-auto sm:px-6 lg:px-8">
      <h1 class="text-3xl mb-5">Add Recipe</h1>
  
      <x-form.label class="mt-4 mb-2">Name</x-form.label>
      <x-jet-input
        name="name"
        class="block mt-1 w-full lg:w-1/2 h-10 p-2"
        wire:model.defer="name" />
      <x-jet-input-error for="name" class="mt-1"/>
  
      <div class="mt-1 w-full lg:w-1/2">
        <x-form.dropdown label="category" name="category" label="category"
                         model="category">
          <option value="" hidden selected>Select Category</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </x-form.dropdown>
        <x-jet-input-error for="category" />
      </div>
  
      <x-form.label class="mt-4 mb-2">Description</x-form.label>
      <textarea
        name="description" rows="6"
        wire:model.defer="description"
        class="px-3 w-full lg:w-1/2 text-sm text-gray-900 border-0 focus:ring-0
          focus:outline-none rounded-lg" required></textarea>
      <x-jet-input-error for="description" class="mt-1"/>

      <div x-data="{ ingredients: @entangle('ingredients') }">
        <x-form.label class="mt-4 mb-2">Ingredients</x-form.label>
        <x-jet-input
          class="block mt-1 w-full lg:w-1/2 h-10 p-2"
          x-ref="self"
          placeholder="Click enter after each item"
          @keydown.enter.prevent="ingredients.push($refs.self.value); $refs.self.value='' " />
        <x-jet-input-error for="ingredients" class="mt-1"/>
        <template x-for="(item, index) in ingredients" :key="index">
          <div class="mt-4">
            <span x-text="item"></span>
            <span @click="ingredients.splice(index, 1)"
            class="ml-2 bg-red-700 px-1 rounded-full hover:cursor-pointer">
              <x-heroicon-m-x-mark
                class="inline-block h-4 text-white">
              </x-heroicon-m-x-mark>
            </span>
          </div>
        </template>
      </div>
  
      <div x-data="{ method: @entangle('method')}">
        <x-form.label class="mt-4 mb-2">Method</x-form.label>
        <textarea
          rows="6"
          class="px-3 w-full lg:w-1/2 text-sm text-gray-900 border-0 focus:ring-0
          focus:outline-none rounded-lg" required
          x-ref="self"
          placeholder="Click enter after each item"
          @keydown.enter.prevent="method.push($refs.self.value); $refs.self.value=''
          "></textarea>
        <x-jet-input-error for="method" class="mt-1"/>
        
        <template x-for="(item, index) in method" :key="index">
          <div class="mt-4">
            <span x-text="item"></span>
            <span @click="method.splice(index, 1)"
                  class="ml-2 bg-red-700 px-1 rounded-full hover:cursor-pointer">
              <x-heroicon-m-x-mark
                class="inline-block h-4 text-white">
              </x-heroicon-m-x-mark>
            </span>
          </div>
        </template>
      </div>
  
      <div class="mt-4 w-full lg:w-1/2">
        <x-form.label class="mt-4 mb-2">Recipe Image</x-form.label>
        <input type="file" wire:model="img">
        <div wire:loading wire:target="img">Uploading...</div>
        <x-jet-input-error for="file" />
      </div>
      
      <x-jet-button wire:click.prevent="saveRecipe" class="mt-20">
        Add new recipe
      </x-jet-button>
      
    </div>
  </div>
</div>
