@props(['label' => '', 'name' => '', 'placeholder'=>'', 'model' => ''])
<div class="flex flex-col mt-2">
  <x-form.label>{{ $label }}</x-form.label>
  <select name="{{ $name }}" id="{{ $name }}"
          @if(isset($model)) wire:model="{{ $model }}" @endif
          @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif
    {{ $attributes->merge(['class' => "border-none rounded-lg focus:ring-0"])
     }}>
    {{ $slot }}
  </select>
</div>
