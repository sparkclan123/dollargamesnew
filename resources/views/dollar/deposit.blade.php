@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped">
          <tr>
            <th>id</th>
            <th>username</th>
            <th>balance</th>
            <th>bankdeposit</th>
            <th>accountnumberdeposit</th>
            <th>accontnamedeposit</th>
            <th>datetime</th>
            <th>channeldeposit</th>
            <th>tel</th>
            <th>opinion</th>
          </tr>

          @foreach ($deposit as $de)
            <tr>
              <td>{{$de->id}}</td>
              <td>{{$de->username}}</td>
              <td>{{$de->balance}}</td>
              <td>{{$de->bankdeposit}}</td>
              <td>{{$de->accountnumberdeposit}}</td>
              <td>{{$de->accontnamedeposit}}</td>
              <td>{{$de->datetime}}</td>
              <td>{{$de->channeldeposit}}</td>
              <td>{{$de->tel}}</td>
              <td>{{$de->opinion}}</td>
            </tr>



          @endforeach
        </table>



    </div>
</div>
@endsection
