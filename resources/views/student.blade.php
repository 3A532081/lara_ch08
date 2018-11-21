@extends('layouts.master')
@section('title','詳細資料')
@section('content')

    <div class="page-header">
        <h1>詳細資料</h1>
    </div>
    <div class="row">
        <p>
           信箱：{{$score->student->user->email}}
        </p>
        <p>
            學號：{{$score->student->no}}
        </p>
        <p>
            姓名：{{$score->student->user->name}}
        </p>
        <p>
            電話：0912345678
        </p>
            <p>
                國文：{{$score->chinese}}
            </p>
            <p>
                英文：{{$score->english}}
            </p>
            <p>
                數學：{{$score->math}}
            </p>
    </div>
@stop