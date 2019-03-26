@extends('form')

@section('content')

    <h3 class="page-title">
        Wine Inquirers
    </h3>



    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('/')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Winery</a>
                <i class="fa fa-angle-right"></i>
            </li>

        </ul>

    </div>


    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#Inquiries"><strong>Inquiries</strong></a></li>
        <li><a data-toggle="tab" href="#Request"><strong>Request Wine</strong></a></li>

    </ul>



    <div id="Inquiries" class="tab-pane fade">



    </div>

    <div id="Request" class="tab-pane fade">

        <div class="row">

            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="wine" class="col-md-6 col-lg-6 control-label">Choose Wine</label>

                    <div class="col-md-6 col-lg-6">

                        <div class="form-group">
                            <select class="form-control select2 set_all_disabled "
                                    name="wine" id="wine">
                                <option value=""></option>
                                @foreach($wine as $win)

                                    <option  date="{{$win->date}}" value="{{$win->id}}">{{$win->title}}</option>

                                @endforeach

                            </select>


                        </div>

                    </div>

                </div>

            </div>



        </div>
        <br>


    </div>



@endsection
@section('custom_footer')
    <script>
        $('#wine').select2();
        $(document).on('change', '#wine', function () {

            var id = $('#wine').val();
            var date = $('wine').attr('date');
            var _token = '{{csrf_token()}}';
            if (id == null || id == 0)
            {
                notification('glyphicon glyphicon-warning-sign','Warning','You Must choose a wine','danger');

            }

            else if(date > new Date()) {

                notification('glyphicon glyphicon-warning-sign','Warning','Your wine choice not available yet it will be at  '+date,'danger');

            }else{
                $.ajax({
                    url: '/wine/',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        id: id,
                        date:date,
                        _token: _token
                    },
                    success: function (response) {
                    if(response['error']){
                        $.each(response['error'], function (key, val) {
                            notification('glyphicon glyphicon-warning-sign', 'Warning', val, 'danger')
                            console.log(key + '_error');
                        });
                    }else
                        {
                            information('glyphicon glyphicon-ok-sign', 'Information', 'you can order this wine');
                        }

                    }
                })
            }
        });

    </script>


@stop




