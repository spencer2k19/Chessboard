<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .chess-board { border-spacing: 0; border-collapse: collapse; }
        .chess-board th { padding: .5em; }
        .chess-board th + th { border-bottom: 1px solid #000; }
        .chess-board th:first-child,
        .chess-board td:last-child { border-right: 1px solid #000; }
        .chess-board tr:last-child td { border-bottom: 1px solid; }
        .chess-board th:empty { border: none; }
        .chess-board td { width: 1.5em; height: 1.5em; text-align: center; font-size: 32px; line-height: 0;}
        .chess-board .light { background: #eee; }
        .chess-board .dark { background: #aaa; }
    </style>
</head>
<body>
<div class="container container-fluid">
<table class="chess-board">
    <tbody>
    <tr>
        <th></th>
        <th>a</th>
        <th>b</th>
        <th>c</th>
        <th>d</th>
        <th>e</th>
        <th>f</th>
        <th>g</th>
        <th>h</th>
    </tr>

    @for($i=7;$i>=0;$i--)
        <tr>
            <th>{{$i+1}}</th>

        @for($j=0;$j<8;$j++)

                @switch($i)
                @case(7)
                <td id="{{$i}}-{{$j}}"  class="{{ $i%2 ==0 ? $colors1[$j] : $colors2[$j] }}" >{!!$mainPiecesTop[$j]!!}</td>
                    @break
                @case(6)
                <td id="{{$i}}-{{$j}}"   class="{{ $i%2 ==0 ? $colors1[$j] : $colors2[$j] }}">{!! $topSoldiers !!} </td>
                @break
                @case(1)
                <td id="{{$i}}-{{$j}}" class="{{ $i%2 ==0 ? $colors1[$j] : $colors2[$j] }}"> {!! $bottomSoldiers !!}</td>
                @break
                @case(0)
                <td id="{{$i}}-{{$j}}" class="{{ $i%2 ==0 ? $colors1[$j] : $colors2[$j] }}">{!! $mainPiecesBottom[$j] !!}</td>
                @break
                @default
                <td id="{{$i}}-{{$j}}" class="{{ $i%2 ==0 ? $colors1[$j] : $colors2[$j] }}"></td>

                @endswitch


            @endfor

        </tr>


        @endfor


    </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script >
    $(function () {

        $('td').click(function () {
           let dims = this.id.split("-");
           alert(`Row: ${parseInt(dims[0])+1}, Column: ${parseInt(dims[1])+1}`);
        });
    })
</script>

</body>
</html>
