
@if(session('Sukses'))
    <div id="{{ $alertid }}-alert" class="alert alert-{{ $alertclass }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-{{ $alerticon }}"></i> {{ $alerttitle }}</h4>
        {{ $slot }}
    </div>
@elseif(session('Gagal'))

@endif
