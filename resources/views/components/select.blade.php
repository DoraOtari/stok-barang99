<div class="mb-3">
    <label class="form-label text-capitalize">{{ $nama }}</label>
    <select class="form-select" name="{{ $nama }}">
        <option selected disabled>--pilih satu--</option>
        {{ $slot }}
    </select>
</div>