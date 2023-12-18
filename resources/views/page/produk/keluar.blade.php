<x-template>
    <x-card judul="Transaksi Keluar">
        <form action="{{ url('/produk/cari') }}" method="POST">
            @csrf
            <x-select nama='produk_id'>
                @foreach ($produk as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </x-select>
            <x-button tipe='submit' nama='Cari' posisi='end' />
        </form>
    </x-card>
    <x-card judul="data produk">
        <form action="{{ url('/transaksi') }}" method="post">
            @csrf
            <div class="hstack gap-3">
                <div class="vstack">
                    <p>Nama Supplier</p>
                    <b>{{ $produkCari->supplier ?? '-' }}</b>
                </div>
                <div class="vstack">
                    <p>Sisa Stok</p>
                    <b>{{ $produkCari->qty ?? 0 }}</b>
                </div>
                <div class="vstack">
                    <p>Harga Satuan</p>
                    <b>Rp. {{ number_format($produkCari->harga ?? 0,2,',','.')   }}</b>
                </div>
            </div>
            <br>
            <input type="hidden" name="produkCari_id" value="{{ $produkCari->id ?? 0 }}">
            <x-input nama='qty jual' tipe='number' />
            <x-button nama='jual' tipe='submit' posisi='end' />
        </form>
    </x-card>
</x-template>