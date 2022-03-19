@extends('home')

@section('content')
    {!! Form::open(['url' => route('tasks.create.post'),'files' => true, 'method' => 'post']) !!}


    <table>
        <tr>
            <td> {!! Form::label('Subject', 'Subject') !!}</td>
            <td>
                {!! Form::text('Subject', '', ['class' => 'form-control' ,'id'=>'Subject', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Priority', 'Priority') !!}</td>
            <td>
                {!! Form::select('Priority', array(
                    'Высокая' => 'Высокая',
                    'Самые высокие' => 'Самые высокие',
                    'Низкая' => 'Низкая',
                    'Самае низкие' => 'Самае низкие',
                    'Нормальный' => 'Нормальный',
                    ),
                    'Оценка пригодности'
                    ); !!}
            </td>
        </tr>


        <tr>
            <td> {!! Form::label('What_Id', 'What_Id') !!}</td>
            <td>
                {!! Form::select('What_Id', $deal_data,''); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Due_Date', 'Due_Date') !!}</td>
            <td>
                {!! Form::date('Due_Date', '', ['class' => 'form-control' ,'id'=>'Due_Date', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>

        <tr>
            <td> {!! Form::label('Status', 'Status') !!}</td>
            <td>
                {!! Form::select('Status', array(
                    'Не запущена' => 'Не запущена',
                    'Отложено' => 'Отложено',
                    'Выполняется' => 'Выполняется',
                    'Завершено' => 'Завершено',
                    'Ожидает ввода' => 'Ожидает ввода',
                    ),
                    'Отложено'
                    ); !!}
            </td>
        </tr>



        <tr>
            <td> {!! Form::label('Description', 'Description') !!}</td>
            <td>
                {!! Form::textarea('Description', '', ['class' => 'form-control' ,'id'=>'Description', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-info">
                    add
                </button>
            </td>
            <td></td>
        </tr>


    </table>
    {!! Form::close()  !!}


@endsection
