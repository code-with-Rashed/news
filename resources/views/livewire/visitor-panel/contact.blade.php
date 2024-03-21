<div>
    <!-- Contact area start -->
    <div class="container my-5">
        <div class="row">
            <!-- Form area start -->
            <div class="col-md-5 mb-3">
                <form class="shadow-sm rounded p-4" wire:submit="contact_us()">
                    <h4 class="text-center fw-bold mb-3">Contact US</h4>
                    <div class="form-group mb-2">
                        <label for="name" class="mb-2">Name</label>
                        <input type="text" id="name" class="form-control" maxlength="40" required
                            wire:model="name" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" id="email" class="form-control" maxlength="50" required
                            wire:model="email" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="subject" class="mb-2">Subject</label>
                        <textarea id="subject" class="form-control" maxlength="150" required cols="30" rows="2"
                            wire:model="subject"></textarea>
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="message" class="mb-2">Message</label>
                        <textarea id="message" class="form-control" maxlength="250" required cols="30" rows="6"
                            wire:model="message"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                        Send
                    </button>
                </form>
            </div>
            <!-- Form area end -->
            <!-- Address area start -->
            <div class="col-md-7">
                <div class="shadow-sm rounded p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <i class="bi bi-house"></i> XYZ Road , ABC Building New Yourk,
                                USA
                            </div>
                            <div class="mb-2">
                                <i class="bi bi-phone"></i> +880 01921042138
                            </div>
                            <div class="mb-2">
                                <i class="bi bi-envelope"></i> contact@gmail.com
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2"><i class="bi bi-facebook"></i> FACEBOOK</div>
                            <div class="mb-2"><i class="bi bi-linkedin"></i> LINKEDIN</div>
                            <div class="mb-2">
                                <i class="bi bi-twitter-x"></i> TWITTER-X
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.06225701555!2d-74.30932678804537!3d40.697019288954785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1700986766942!5m2!1sen!2sbd"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                class="w-100 h-100 rounded"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Address area end -->
        </div>
    </div>
    <!-- Contact area end -->
</div>
