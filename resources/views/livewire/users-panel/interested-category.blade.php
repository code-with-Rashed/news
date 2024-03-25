<div class="row shadow-sm rounded py-3 px-2 mb-3 m-auto">
    <h3 class="mb-2">My Interested Category</h3>
    @foreach ($categories as $category)
        <div class="form-check form-switch mb-1" wire:key="{{ $category->id }}">
            <input type="checkbox" class="form-check-input" role="switch" id="select-category-{{ $category->id }}"
                wire:click="chose({{ $category->id }})"
                @if ($interested_category->contains($category->id)) @checked(true)
            wire:init="chose({{ $category->id }})" @endif>
            <label class="form-check-label" for="select-category-{{ $category->id }}">{{ $category->name }}</label>
        </div>
    @endforeach
    <button type="button" class="btn btn-primary my-2 w-25" wire:click.debounce.100ms="save()">Save</button>
</div>
