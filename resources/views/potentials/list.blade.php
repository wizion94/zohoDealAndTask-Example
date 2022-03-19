@extends('home')

@section('content')
    <a href="{{route('potentials.create')}}">Создать сделку</a>
    <table border="1">
        <tr>
            <td>
                Название
            </td>
            <td>
                Дата
            </td>
            <td>
                Описание
            </td>
            <td>
                Стадия
            </td>
        </tr>


            @foreach($data as $item)
            <tr>

                <td>
                    {{$item->getFieldValue('Deal_Name')}}

                </td>
                <td>
                    {{$item->getFieldValue('Closing_Date')}}
                </td>
                <td>
                    {{$item->getFieldValue('Description')}}
                </td>
                <td>
                    {{$item->getFieldValue('Stage')}}
                </td>
            </tr>
            @endforeach

    </table>

@endsection
