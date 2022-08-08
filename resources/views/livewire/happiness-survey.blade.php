<div>
    <form wire:submit.prevent="submit">
@foreach(\App\Models\HappinessSurvey::$fields as $field)
<div class="form-group">
    <label for="{{$field['name']}}">{{$field['label']}}</label>

    @if($field["type"] == "text" or $field["type"] == "number")
    <input type="{{$field['type']}}" class="form-control" id="{{$field['name']}}" placeholder="{{$field['label']}}" wire:model="{{$field['name']}}"/>
    @elseif($field['type'] == "textarea")
    <textarea class="form-control" id="{{$field['name']}}" placeholder="{{$field['label']}}" wire:model="{{$field['name']}}"></textarea>
    @endif
    @error({{$field['name']}}) <span class="text-danger">{{ $message }}</span> @enderror
</div>
@endforeach
      
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
