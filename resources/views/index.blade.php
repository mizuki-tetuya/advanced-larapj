@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'author.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Date</th>
    <th>book</th>
  </tr>
  <tr>
  @foreach ($items as $item)
  </tr>
    <td>
      @if ($item->book !=null)
      {{$item->getDetail()}}
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection