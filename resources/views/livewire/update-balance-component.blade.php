<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <form wire:submit.prevent="submit" action="">
        <input type="file" wire:model="jsonFile" placeholder="upload json file">
       @error('jsonFile') <span class="text-danger small">{{ $message }}</span> @enderror
        <button type="submit">Submit</button>
    </form>
</div>
