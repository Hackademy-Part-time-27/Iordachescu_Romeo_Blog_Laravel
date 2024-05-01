<div>
    <h4>Elenco Utenti</h4>

    <div class="mt-4">
        @foreach($users as $user)
        <div class="rounded mb-2 p-3 shadow-sm">
            <div class="row">
                <div class="col-lg-2">
                    @if($user->photo)
                    <img class="img-fluid rounded-circle" src="{{ Storage::url($user->photo) }}" alt="{{ $user->name }}">
                    @endif
                </div>
                <div class="col-lg-10">
                    <h5>{{ $user->name }}</h5>
                    <p class="text-muted">{{ $user->email }}</p>
                    <div class="mt-3 text-end">
                        <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-secondary">modifica</button>
                        <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-danger">cancella</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>