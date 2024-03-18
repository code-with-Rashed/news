<div>
    <form wire:submit="login()">
        <div class="form-group mb-3">
            <label for="email" class="mb-2">Email</label>
            <input wire:model="email" type="email" id="email" class="form-control" placeholder="Enter your email"
                maxlength="100" required autofocus />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password" class="mb-2">Password</label>
            <input wire:model="password" type="password" id="password" class="form-control"
                placeholder="Enter your password" maxlength="100"  required/>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
            Login
        </button>
    </form>
</div>
