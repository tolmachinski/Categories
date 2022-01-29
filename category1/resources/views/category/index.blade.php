<div class="container">
		
        <a href="category/create" class="btn btn-primary">Создать</a>

        <hr>

        <table class="table">
            <thead>
                <tr>
                  <th>ID</th>
		    <th>Наименование</th>
		    <th class="text-right">Parent ID</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr><td>{{ $category->id ?? '' }}</td>
                        <td>{{ $category->title ?? '' }} </td>
                        <td>{{ $category->parent_id ?? '' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">
                            <h1 class="text-center">Категории отсуствуют</h1>
                        </td>
                    </tr>
                @endforelse
        </tbody>
    </table>

</div>