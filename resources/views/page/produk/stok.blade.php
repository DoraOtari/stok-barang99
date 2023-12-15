<x-template>
    <x-card judul='Produk'>
        <x-slot name='judul'>
            <i class="bi-plus"></i> Buat Barang
        </x-slot>
        <form action="{{ url('/produk') }}" method="post">
            @csrf
            <x-input nama='nama' tipe='text' />
            <x-input nama='supplier' tipe='text' />
            <x-input nama='qty' tipe='number' />
            <x-input nama='harga' tipe='number' />
            <x-button tipe='submit' nama='Buat' posisi='end' />
        </form>
    </x-card>
    <x-card judul='Barang'>
        @if (session('pesan'))
            <x-notif :pesan="session('pesan')" />
        @endif
        <x-slot name='judul'>
            <i class="bi-box2-heart"></i> Data Barang
        </x-slot>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Supplier</td>
                        <td>Qty</td>
                        <td>Harga</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr class="table-group-divider">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->supplier }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>Rp. {{ number_format($item->harga,2,',','.')  }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>
</x-template>