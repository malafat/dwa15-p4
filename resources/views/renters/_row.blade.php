<tr>
  @foreach($columns as $key => $column)
    <td>{{$renter[$key]}}</td>
  @endforeach
  <td><a href="/renters/{{ $renter['id'] }}/edit"> Edit/Delete </a></td>
</tr>
