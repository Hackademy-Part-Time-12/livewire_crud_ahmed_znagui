<table class="my-3  ">
    <thead class="">
      <tr class="">
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
          <th scope="row">{{ $article->id }}</th>
          <td>{{ $article->title }}</td>
          <td>{{ $article->created_at->format('d/m/y') }}</td>
          <td>@mdo</td>
        </tr>
        @endforeach
    </tbody>
</table>