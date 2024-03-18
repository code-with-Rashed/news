 <!-- Change Favicon Modal Start-->
 <div wire:ignore.self class="modal fade" id="changeFaviconModal" data-bs-backdrop="static" data-bs-keyboard="false"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">
                     Change Favicon
                 </h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form wire:submit="change_favicon({{ $settings->id }})">
                     <div class="form-group">
                         <label for="changeFavicon" class="fw-bold mb-2">Change Favicon</label>
                         <input type="file" class="form-control" id="changeFavicon" required wire:model="favicon"
                             accept="image/*" />
                         @error('favicon')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="btn btn-primary">
                             <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                             Change
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Change Favicon Modal End-->
 <!-- Change Logo Modal Start-->
 <div wire:ignore.self class="modal fade" id="changeLogoModal" data-bs-backdrop="static" data-bs-keyboard="false"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">
                     Change Logo
                 </h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form wire:submit="change_logo({{ $settings->id }})">
                     <div class="form-group">
                         <label for="changeLogo" class="fw-bold mb-2">Change Logo</label>
                         <input type="file" class="form-control" id="changeLogo" required wire:model="logo"
                             accept="image/*" />
                         @error('logo')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="btn btn-primary">
                             <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                             Change
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Change Favicon Modal End-->
