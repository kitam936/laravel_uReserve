<div>
    <form wire:submit.prevent="register">
        <label for="name ">Name</label>
        <input id="name" type="text" wire:model="name"><br>
        @error('name')<div class="text-red-500">{{ $message }}</div>@enderror

        <label for="email">Email</label>
        <input id="email" type="email" wire:model.lazy="email"><br>
        @error('email')<div class="text-red-500">{{ $message }}</div>@enderror

        <label for="password">password</label>
        <input type="password" wire:model="password"><br>
        @error('password')<div class="text-red-500">{{ $message }}</div>@enderror
        <button>登録する</button>
    </form>
</div>
