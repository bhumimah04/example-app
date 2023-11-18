<html>
    <title>Song page</title>
    <body>
      <h2>Song - Blade Template</h2> 
      <table border=3>
    
        <tr>
          <th>Title</th>
          <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
        <tr>
          <td>{{ $song->getTitle() }}</td>
          <td>{{ $song->getArtist() }}</td>
        </tr>
        @endforeach
      </table>     
    </body>
</html>