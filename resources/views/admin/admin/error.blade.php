@if ($errors->any())
    <div class="col-sm-12" >
        <div class="">
           {{--  <header class="panel-heading panel-heading-red">
                Error ! </header> --}}
                @foreach ($errors->all() as $error)
                <div class="alert label-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        @php
                            json_decode($error, true);
                            if(json_last_error() == JSON_ERROR_NONE)
                                $error = json_decode($error, true)['message'];
                        @endphp
                        <span class="fa fa-exclamation-circle"></span> {{ $error }}
                </div>
{{--                 <div class="panel-body" style=" text-transform: uppercase; "><span class="fa fa-exclamation-circle"></span> {{ $error }} </div>
--}}                @endforeach

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
        </div>
    </div>
@endif
