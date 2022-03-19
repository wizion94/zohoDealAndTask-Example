@extends('home')

@section('content')
    {!! Form::open(['url' => route('potentials.create.post'),'files' => true, 'method' => 'post']) !!}
    <table>
        <tr>
            <td> {!! Form::label('Deal_Name', 'Deal_Name') !!}Deal_Name</td>
            <td>
                {!! Form::text('Deal_Name', '', ['class' => 'form-control' ,'id'=>'Deal_Name', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Expected_Revenue', 'Expected_Revenue') !!}</td>
            <td>
                {!! Form::number('Expected_Revenue', '', ['step'=>'0.1','class' => 'form-control' ,'id'=>'Expected_Revenue', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Stage', 'Stage') !!}</td>
            <td>
                {!! Form::select('Stage', array(
                    'Оценка пригодности' => 'Оценка пригодности',
                    'Требуется анализ' => 'Требуется анализ',
                    'Ценностное предложение' => 'Ценностное предложение',
                    'Идентификация ответственных за принятие решений' => 'Идентификация ответственных за принятие решений',
                    'Коммерческое предложение/Ценовое предложение' => 'Коммерческое предложение/Ценовое предложение',
                    'Переговоры /Оценка' => 'Переговоры /Оценка',
                    'Identify Decision Makers' => 'Identify Decision Makers',
                    ),
                    'Оценка пригодности'
                    ); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Amount', 'Amount') !!}</td>
            <td>
                {!! Form::number('Amount', 1, ['step'=>'1','class' => 'form-control' ,'id'=>'Amount', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Probability', 'Probability') !!}</td>
            <td>
                {!! Form::number('Probability', 1, ['step'=>'1','class' => 'form-control' ,'id'=>'Probability', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Next_Step', 'Next_Step') !!}</td>
            <td>
                {!! Form::text('Next_Step', '', ['class' => 'form-control' ,'id'=>'Next_Step', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Type', 'Type') !!}</td>
            <td>
                {!! Form::select('Type', array(
                  'Существующая коммерческая деятельность' => 'Существующая коммерческая деятельность',
                  'Новая коммерческая деятельность' => 'Новая коммерческая деятельность',

                  ),
                  'Существующая коммерческая деятельность'
                  ); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Lead_Source', 'Lead_Source') !!}</td>
            <td>
                {!! Form::text('Lead_Source', '', ['class' => 'form-control' ,'id'=>'Lead_Source', 'size'=>'5', 'placeholder' => '']); !!}
            </td>
        </tr>
        <tr>
            <td> {!! Form::label('Closing_Date', 'Closing_Date') !!}</td>
            <td>
                {!! Form::date('Closing_Date', '', ['class' => 'form-control' ,'id'=>'Closing_Date', 'size'=>'5', 'placeholder' => '']); !!}
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
