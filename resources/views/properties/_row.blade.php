<tr>
  @foreach($columns as $key=>$column)
    <td>{{$property[$key]}}</td>
  @endforeach
  <td><a href="/properties/{{ $property['id'] }}/edit"> edit </a></td>
  <td><a href="/properties/{{ $property['id'] }}/delete"> delete </a></td>
</tr>
