<div>
    {{-- <input wire:model.debounce.500ms="author" type="text" /> --}}
    <div>
        @if (session()->has('message'))
            <div style="color: green">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <input wire:model="categoryName" type="text" />
    <button wire:click="addComment">ADD</button> <br/>
    @error('categoryName')
       <span style="color: red"> {{ $message }} </span>
    @enderror
    @foreach ($comments as $comment)
    <div style="padding: 10px;background:#ddd;margin:10px">
        <h2>{{ $comment['author'] }}</h2>
        <strong>{{ $comment['created_at'] }}</strong>
        <p> {{ $comment['body'] }} </p>
    </div>
    @endforeach
    @foreach ($categoriesPg as $Category)
    <div>
        <h3>{{ $Category->cat_name }}</h3> <span wire:click='remove({{ $Category->id }})' style="color: red;cursor:pointer">X</span>
    </div>
    @endforeach
    {{ $categoriesPg->links() }}
</div>
