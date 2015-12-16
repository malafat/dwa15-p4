<tr>
  @foreach($columns as $key => $column)
    <td>{{$renter[$key]}}</td>
  @endforeach
  <td><a href="/renters/{{ $renter['id'] }}/edit"> edit </a></td>
  <td><a href="/renters/{{ $renter['id'] }}/delete"> delete </a></td>
</tr>
