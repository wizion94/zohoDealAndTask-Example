@extends('home')

@section('content')

    <a href="{{route('tasks.create')}}">Создать задачу</a>



    <table border="1">
        <tr>
            <td>
                Название
            </td>
            <td>
                Статус
            </td>
            <td>
                Дата
            </td>
            <td>
                Описание
            </td>

        </tr>


        @foreach($data as $item)
            <tr>

                <td>
                    {{$item->getFieldValue('Subject')}}

                </td>
                <td>
                    {{$item->getFieldValue('Status')}}
                </td>
                <td>
                    {{$item->getFieldValue('Due_Date')}}
                </td>
                <td>
                    {{$item->getFieldValue('Description')}}

                </td>


            </tr>
        @endforeach

    </table>

@endsection
