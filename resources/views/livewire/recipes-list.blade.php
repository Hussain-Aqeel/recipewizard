<div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @auth
          <button
            type="button"
            class="text-white mx-4 mb-5 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg
        text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2">
            <x-heroicon-m-book-open class="h-4 mr-1.5" />
            Create New Recipe
          </button>
        @endauth
        <div>
          <x-jet-input wire:model="searchTerm" class="h-12 w-4/5 md:w-1/2 mx-4 my-3.5 p-3"
                       placeholder="search" />
        </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach($recipes as $recipe)
              <div class="max-w-xs xl:max-w-sm mx-auto my-2.5 rounded overflow-hidden
              shadow-lg">
                <img class="w-full" src="{{ $recipe->image }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <p class="text-gray-400 mb-2">{{ $recipe->user->name }}</p>
                  <div class="font-bold text-xl mb-2">{{ $recipe->name }}</div>
                  <p class="text-gray-700 text-base truncate">
                    {{ $recipe->description }}
                  </p>
                </div>
                <div class="flex justify-between items-center px-6 pt-4 pb-2 mb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3
                  py-1 text-sm font-semibold text-gray-700 mr-2">
                    {{ \App\Models\Category::whereId($recipe->category_id)->value('name') }}
                  </span>
                  <x-jet-button wire:click="viewRecipe({{ $recipe->id }})">View</x-jet-button>
                </div>
              </div>
            @endforeach
            
          </div>
        <div class="my-5 mx-4">
          {{ $recipes->links() }}
        </div>
        <div x-data="{ shown: false }" class="fixed bottom-10 right-10">
          <button @click="window.scrollTo(0, 0)"
                  @scroll.window="shown = (window.pageYOffset > 100) ? true : false"
                  x-show="shown"
                  x-transition>
            <x-tni-arrow-up-circle class="h-10 text-primary" />
          </button>
        </div>
      </div>
    </div>
</div>
