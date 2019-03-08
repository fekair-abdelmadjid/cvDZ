<div class="container index">

    <div class="row">

        <div class="col-md-12">

            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
        </div>
    </div>
</div>