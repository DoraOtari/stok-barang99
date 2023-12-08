@if ($pesan)
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="bi bell"></i></strong> {{ $pesan }}
    </div>
@endif
