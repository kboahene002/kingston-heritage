<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
     <div>

                            <form wire:submit.prevent="verifyOtp">
                                <div class="input-boxes">
                                    <div class="input-box">
                                        <i class="fas fa-key"></i>
                                        <input wire:model.live="otp" type="text" inputmode="numeric" pattern="[0-9]*"
                                            maxlength="6" placeholder="Enter the 6-digit code" required>
                                    </div>
                                    <p class="text-danger" style="font-size: 12px; color: red;">
                                        @error('otp')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </p>
                                    {{-- <div class="text">
                                        <button type="button" wire:click="resendOtp">Resend code</button>
                                    </div> --}}
                                    <div class="button input-box">
                                        <input type="submit" value="Verify & Login">
                                    </div>
                                    {{--  #155724    --}}
                                </div>
                            </form>

                    </div>
</div>
