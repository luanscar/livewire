<div>
   <div>
       <label>
           <textarea wire:model="body" placeholder="What's up doc?"></textarea>
       </label>
       @error('body') <span> {{ $message }} </span> @enderror
   </div>

<x-primary-button wire:click="tweet"> Tweet 🐦</x-primary-button>
</div>
