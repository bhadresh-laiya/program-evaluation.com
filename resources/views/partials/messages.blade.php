<div class="col-xl-12 col-md-12">

    @if(isset ($errors) && count($errors) > 0)
        <div class="alert alert-errors notification error closeable">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                <a class="close" href="#"></a>
            @endforeach
        </div>
    @endif

    @if(Session::get('success', false))
        <?php $data = Session::get('success'); ?>
        <div class="alert alert-success notification success closeable">
            {{ $data }}
            <a class="close" href="#"></a>
        </div>
    @endif

</div>