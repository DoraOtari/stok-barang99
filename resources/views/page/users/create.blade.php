<x-template>
    <x-card judul="Tambah Pengguna">
        <form action="{{ url('user') }}" method="post">
            @csrf
            <x-input nama='username' tipe='text'>
                <x-slot name='error'>
                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                </x-slot>
            </x-input>
            <x-input nama='password' tipe='password'>
                <x-slot name='error'>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </x-slot>
            </x-input>
            <x-select nama="role">
                <option value="admin">Admin</option>
                <option value="staff">staff</option>
            </x-select>
            <x-button nama="tambah" tipe="submit" posisi="end" />
        </form>
    </x-card>
</x-template>