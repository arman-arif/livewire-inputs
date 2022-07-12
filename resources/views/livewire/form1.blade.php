<div class="row justify-content-center">
    <div class="col-md-6">
        <h3 class="text-center">Form</h3>
        <form action="{{ url()->current() }}" method="post" wire:submit.prevent="submit()">
            <div class="mb-3">
                <label for="name"><strong>Name</strong></label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" wire:model='name'>
            </div>
        </form>
    </div>
</div>
