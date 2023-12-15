<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="bi-box2"></i> Produk Masuk
            </h4>
            <form action="{{ url('/stok/masuk') }}" method="post">
                @csrf
                <x-select nama='barang_id'>
                    <option value=""></option>
                </x-select>
               <x-input nama='masuk' tipe='number' /> 
               <x-button nama='Tambah' tipe='submit' posisi='end' />
            </form>
        </div>
    </div>
</template>