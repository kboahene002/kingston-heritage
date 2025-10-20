<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
     <div>
                        @if (true)
                            <form wire:submit.prevent="submit">
                                <div class="input-boxes">
                                    <div class="input-box">
                                        <i class="fas fa-envelope"></i>
                                        <input wire:model.live="email" type="email" placeholder="Enter your email"
                                            required>
                                    </div>
                                    <p class="text-danger" style="font-size: 12px; color: red;">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" wire:model.live="password"
                                            placeholder="Enter your password" required>
                                    </div>
                                    <p class="text-danger" style="font-size: 12px; color: red;">
                                        @error('password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </p>
                                    {{-- <div class="text"><a href="#">Forgot password?</a></div> --}}
                                    <div wire:ignore.self class="button  ">
                                        <!-- Normal state -->
                                        {{-- <input type="submit" value="Submit" wire:loading.remove> --}}
                                        <button type="submit"
                                            style="border-radius:10px; margin-top:15px ; cursor: pointer; color:white; border:1px solid rgb(246, 244, 244); background-color: rgb(120, 120, 207); padding:10px;"
                                            wire:loading.attr="disabled" class="btn btn-primary"
                                            wire:target="performAction" class="btn btn-primary button  input-box">
                                            <span wire:loading.remove wire:target="submit">
                                                <i class="fas fa-paper-plane me-2"></i>
                                                Submit
                                            </span>

                                            <span wire:loading wire:target="submit">
                                                <span class="spinner-border spinner-border-sm me-2" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </span>

                                            </span>
                                        </button>

                                        <!-- Loading state -->

                                    </div>
                                    <div class="text-center">
                                        {{-- <img src={{ asset('assets/img/logo.png') }} alt="logo" /> --}}
                                    </div>
                                    {{-- <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div> --}}
                                </div>
                            </form>
                        @else
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
                                    <div class="text">
                                        <button type="button" wire:click="resendOtp">Resend code</button>
                                    </div>
                                    <div class="button input-box">
                                        <input type="submit" value="Verify & Login">
                                    </div>
                                    <div class="text-center"><img src={{ asset('assets/img/logo.png') }}
                                            alt="logo" /></div>
                                </div>
                            </form>
                        @endif
                    </div>
</div>
