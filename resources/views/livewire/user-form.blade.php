<div class="rounded shadow-sm p-3">
    @if($userId)
    <h4>Modifica un Utente</h4>
    @else
    <h4>Crea un nuovo Utente</h4>
    @endif

    <x-success />
    
            <form wire:submit="submit" class="mt-4"> 
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">Nome</label>
                                <!-- <input type="text" id="name" class="form-control" wire:model.live="name">
                                <input type="text" id="name" class="form-control" wire:model.live.debounce.500ms="name">
                                <input type="text" id="name" class="form-control" wire:model.blur="name">  -->
                        <input type="text" id="name" class="form-control" wire:model="name">
                        @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" id="email"class="form-control" wire:model="email">
                        @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" id="password"class="form-control" wire:model="password">
                        @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="photo">Password</label>
                        <input type="file" id="photo"class="form-control" wire:model="photo">
                        @error('photo') <span class="small text-danger">{{ $message }}</span> @enderror

                        @if($photo)
                <div class="mt-2">
                    <div class="text-end">
                        <button type="button" wire:click="removePhoto" class="btn btn-outline-secondary">X</button>
                    </div>
                    <img class="img-fluid" src="{{ $photo->temporaryUrl() }}" alt="Image Preview">
                </div>
                @endif
                    </div>
                    <div class="col-12">
                        @if($userId)
                        <button type="submit" class="btn btn-primary">Modifica Utente</button>
                        <button type="button" wire:click="userReset" class="btn btn-warning ms-auto">Crea Utente</button>
                        @else
                        <button type="submit" class="btn btn-primary">Crea Utente</button>
                        @endif
                    </div>
                </div>
            </form>
</div>
