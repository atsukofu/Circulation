@extends('layout')

@section('content')
  <table class="table table-striped table-hover">
    <tr>
      <th>タイトル</th><th>更新日</th>
    </tr>
    @foreach($develops as $develop)
    <tr>
      <td>{{ $develop->title }}</td>
      <td>{{ $develop->updated_at }}</td>
    </tr>
    @endforeach
  </table>
@endsection