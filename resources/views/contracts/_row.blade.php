<tr>
  @foreach($columns as $key=>$column)
    <td>{{$contract[$key]}}</td>
  @endforeach
  <td><a href="/contracts/{{ $contract['id'] }}/edit"> edit </a></td>
  <td><a href="/contracts/{{ $contract['id'] }}/delete"> delete </a></td>
  <td><a href="/properties/{{ $contract['property_id'] }}/edit"> See property </a></td>
</tr>
