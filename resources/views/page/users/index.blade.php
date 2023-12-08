<x-template>
    <x-card judul="Data Pengguna">
        <x-slot name="tombol">
            <a href="{{ url('user/create') }}" class="btn btn-dark">
                <i class="bi-plus"></i> Tambah
            </a>
        </x-slot>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="text-capitalize">
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>   
    </x-card>
</x-template