<div>
      <form wire:submit.prevent="submit" class="login-form bg-color-fffaeb radius-30" enctype="multipart/form-data">
      <h3>Create An Account</h3>
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <input wire:model="first_name" type="text" class="form-control" placeholder="First Name *">
               @error('first_name')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="last_name" type="text" class="form-control" placeholder="Last Name *">
              @error('last_name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="middle_name" type="text" class="form-control" placeholder="Middle Name(Optional)">
              @error('middle_name')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="date_of_birth" type="date" class="form-control" placeholder="Date of birth*">
               @error('date_of_birth')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="place_of_birth" type="text" class="form-control" placeholder="Place of birth*">
              @error('place_of_birth')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="residential_address" type="text" class="form-control"
                  placeholder="Residential Address*">
              @error('residential_address')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="email" type="email" class="form-control" placeholder="Email Address*">
              @error('email')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="phone_number" type="text" class="form-control" placeholder="Phone Number*">
              @error('phone_number')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          {{-- <div class="col-lg-6 col-md-6">
                                    <input wire:model="employer_name" type="text" class="form-control" placeholder="Employer Name*">
                                </div> --}}
          <div class="col-lg-6 col-md-6">
              <input wire:model="address" type="text" class="form-control" placeholder="Address*">
              @error('address')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <input wire:model="tax_id" type="text" class="form-control"
                  placeholder="Tax ID (German tax if applicable)*">
              @error('tax_id')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="col-lg-6 col-md-6">
              <label for="">Passport/national ID*</label>
              <input wire:model="passport" type="file" class="form-control" placeholder="Address*">
              @error('passport')
                    <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
      </div>

<div class="text-center mt-3">
    <!-- Normal button -->
    <button type="submit" class="default-btn w-100 text-center mb-4" wire:loading.remove wire:target="submit">
        Register Now
    </button>

    <!-- Loader (shows only when submitting) -->
    <div wire:loading wire:target="submit" class="mt-2">
        <div class="spinner-border text-success" role="status">
            <span class="visually-hidden">Submitting...</span>
        </div>
        <p class="mt-2 text-muted">Submitting, please wait...</p>
    </div>
</div>

      <p>Already Have An Account? <a href="{{ route('login') }}">Login</a></p>

  </form>
</div>
