<tr>
  @foreach($columns as $key=>$column)
    <td>{{$property[$key]}}</td>
  @endforeach
  <td><a href="/properties/{{ $property['id'] }}/edit"> Edit/Delete </a></td>
