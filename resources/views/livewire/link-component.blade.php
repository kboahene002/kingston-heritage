<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit">
        <!-- Bank Selection -->


        <!-- Account Number -->
        <div class="input-group-custom">
            <label class="input-label">Account Number</label>
            <input type="text" class="input-field" wire:model="account_number" placeholder="Enter your account number" required maxlength="20">
            <i class="bi bi-credit-card input-icon"></i>
            @error('account_number') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Account Holder Name -->
        <div class="input-group-custom">
            <label class="input-label">Account Holder Name</label>
            <input type="text" class="input-field" wire:model="account_holder_name" placeholder="Enter account holder name" required>
            <i class="bi bi-person input-icon"></i>
            @error('account_holder_name') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Action Buttons -->
        <div  wire:ignore.self class="text-center  mt-5">
            <button
                {{-- wire:click.prevent="submit" --}}
                wire:loading.attr="disabled"
                wire:target="performAction"

                {{-- wire:target="submit" --}}
                type="submit"
                class="btn btn-primary-custom text-white d-inline-flex align-items-center gap-2"
            >
                <span class="d-inline-flex align-items-center gap-2"wire:loading.remove wire:target="submit" >
                    <i class="bi bi-check-circle"></i>
                    <span>Link Account</span>
                </span>

                <span wire:loading wire:target="submit">
                    <span class="spinner-border spinner-border-sm me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>

                </span>

            </button>

            
        </div>
    </form>
</div>
