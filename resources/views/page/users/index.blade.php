<x-template>
    @if (session('pesan'))
        <x-notif :pesan="session('pesan')" />
    @endif
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
                    @foreach ($user as $item)
                        <tr class="text-capitalize">
                            <td>{{ $item->username }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $item->role }}
                                </span>
                            </td>
                            <td>
                                <a href='{{ url("user/$item->id/edit") }}' class="btn btn-primary">
                                    <i class="bi-pen"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('/user', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    </x-card>
</x-template>