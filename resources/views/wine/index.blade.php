@extends('form')
@section('content')

    <h3 class="page-title">
        Winery
    </h3>

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('/home')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Winery</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Wine Details</a>
                <i class="fa fa-angle-right"></i>
            </li>
        </ul>

    </div>

    <div class="row">

        <table role="table" class="table table-bordered table-striped table-responsive thead-light"
               id="wine">
            <thead class="cf">
            <tr id="head">
                <th><a class="sort-by"></a>Wine</th>
                <th><a class="sort-by"></a>Date</th>
                <th><a class="sort-by"></a>Link</th>
                {{--<th><a class="sort-by"></a>Details</th>--}}

            </tr>
            </thead>
            @foreach($wine as $win)
                <tr>
                    <td>{{$win->title}}</td>
                    <td>{{$win->date}}</td>
                    <td>{{$win->link}}</td>
                    {{--<td>--}}


                    {{--</td>--}}

                </tr>
            @endforeach


            <tbody>
            <tfoot>
            <tr>
                <th>Wine</th>
                <th>Date</th>
                <th>Link</th>
                {{--<th>Details</th>--}}

            </tr>
            </tfoot>

            </tbody>
        </table>
    </div>

@endsection

@section('custom_footer')

    <script>

        var array = ['#wine'];

        array.forEach(function (element) {
            console.log(element);
            $(element + ' tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });

            var mytable = $(element).DataTable({
                deferRender: true,
                responsive: true,
                search: false,


            });
            var r = $(element + ' tfoot tr');
            r.find('th').each(function () {
                $(this).css('padding', 8);
            });
            $(element + ' thead').prepend(r);
            $('#search_0').css('text-align', 'center');

            mytable.columns().eq(0).each(function (colIdx) {
                $('input', mytable.column(colIdx).footer()).on('keyup change', function () {
                    mytable.column(colIdx)
                        .search(this.value.replace(/;/g, "|"), true, false)
                        .draw();
                });
            });

        });


    </script>



@stop




