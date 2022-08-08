<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Happiness Survey') }}
    </h2>
  </x-slot>
    <div class="w-full md:flex md:justify-center my-6">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="submit">

            @foreach(\App\Models\HappinessSurvey::$fields as $field)
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="{{$field['name']}}">{{$field['label']}}</label>
            
                @if($field["type"] == "text" or $field["type"] == "number")
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="{{$field['type']}}" id="{{$field['name']}}" placeholder="{{$field['label']}}" wire:model="{{$field['name']}}"/>
                @elseif($field['type'] == "textarea")
                <textarea rows="8" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="{{$field['name']}}" placeholder="{{$field['label']}}" wire:model="{{$field['name']}}"></textarea>
                @endif
                {{-- @error({{$field['name']}}) <span class="text-danger">{{ $message }}</span> @enderror --}}
            </div>
            @endforeach
          <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">Save</button>

        </form>
      </div>
</x-app-layout>