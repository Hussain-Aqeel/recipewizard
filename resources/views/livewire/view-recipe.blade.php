<div class="bg-white">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  
      @if(Auth()->user() == $recipe->user)
        <div class="mx-4 mb-7 inline-flex rounded-md shadow-sm">
          <button
            type="button"
            class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4
          focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2">
            <x-heroicon-m-book-open class="h-4 mr-1.5" />
            Edit Recipe
          </button>
      
          <button
            type="button"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
          focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm
          px-5 py-2.5 text-center inline-flex items-center mr-2">
            <x-heroicon-m-book-open class="h-4 mr-1.5" />
            Delete Recipe
          </button>
        </div>
      @endif
  
      <div>
        <h1 class="title mx-4 text-4xl lg:text-6xl mb-3">{{ $recipe->name }}</h1>
          <img
            class="mx-4 object-cover object-center w-3/4 lg:w-1/2 h-64 md:h-[35rem]"
            src="{{ $recipe->image }}"
            alt="{{ $recipe->name }}">
      </div>
      
  
      <div id="ingredients" class="mt-14">
        <ul class="w-full text-md font-medium text-gray-900">
          <h1 class="text-2xl font-bold px-4 py-2">ingredients</h1>
          @foreach($recipe->ingredients as $ingredient)
            <li class="w-full px-4 py-2 border-b border-gray-200">{{ $ingredient }}</li>
          @endforeach
        </ul>
      </div>
  
      <div id="instructions" class="mt-14">
        <ul class="w-full p-2 text-md font-medium text-gray-900 bg-gray-50 rounded-lg">
          <h1 class="text-2xl font-bold px-4 py-2">instructions</h1>
          @foreach($recipe->method as $step)
            <li class="w-full px-4 py-2">
              <strong>{{ $loop->index + 1 .'. ' }}</strong>{{ $step }}
            </li>
          @endforeach
        </ul>
      </div>
      
      <div id="comments" class="mt-10">
        <section class="bg-white py-8 lg:py-16">
          <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-lg lg:text-2xl font-bold text-gray-900">
                Comments ({{ count($recipe->comment) }})</h2>
            </div>
            @auth
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
            @else
              <div class="text-center mb-10">
                <p class="text-gray-400 text-md mb-4">Please sign in to add a comment</p>
                <a href="{{ route('login') }}"
                   class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                  Login
                </a>
              </div>
            @endauth
            
            @foreach($recipe->comment as $comment)
              <article class="p-6 mb-6 text-base bg-white border-t border-gray-200">
                <footer class="flex justify-between items-center mb-2">
                  <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm text-gray-900">
                      {{ $comment->user->name }}
                    </p>
                    <p class="text-sm text-gray-500">
                      <time>{{ $comment->created_at->diffForHumans() }}</time>
                    </p>
                  </div>
                </footer>
                <p class="text-gray-800">{{ $comment->content }}</p>
              </article>
            @endforeach
          </div>
        </section>
        
      </div>
    </div>
  </div>
</div>
