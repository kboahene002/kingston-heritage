<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit">
        <!-- Bank Selection -->
        
        <!-- Account Number -->
        <div class="input-group-custom">
            <label class="input-label">USDT Address (Network: TRC20)</label>
            <input type="text" class="input-field" wire:model="address" placeholder="Enter your account number" required maxlength="20">
            <i class="bi bi-credit-card input-icon"></i>
            @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <!-- Account Holder Name -->
        <div class="input-group-custom">
            <label class="input-label">Amount <span class="small text-danger">(Max $200) </span></label>
            <input type="text" class="input-field" wire:model="amount" placeholder="Enter Amount" required>
            <i class="bi bi-cash input-icon"></i>
            @error('amount') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

             <div class="input-group-custom">
            <label class="input-label">Screenshot of USDT address</label>
            <input type="file" class="input-field" wire:model="screenshot" placeholder="Enter reference" required>
            <i class="bi bi-key input-icon"></i>
            @error('screenshot') <span class="text-danger small">{{ $message }}</span> @enderror
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
                    <span>Send</span>
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

</div>
