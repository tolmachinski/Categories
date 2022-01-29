<div class="container">

    <form action="store" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{ $category->title ?? '' }}" placeholder="Наименование категории">
        </div>

        <div class="form-group">
            <select name="parent_id" class="form-control">
                <option value="0">-- без родительской категории --</option>
                @foreach ($categories as $categoryItem)
                <option value="{{ $categoryItem->id ?? '' }}" @isset ($category->id)

                    @if ($category->parent_id == $categoryItem->id)
                    selected=""
                    @endif

                    @if ($category->id == $categoryItem->id)
                    disabled=""
                    @endif

                    @endisset
                    >
                    {{ $delimiter ?? '' }}{{ $categoryItem->title ?? '' }}
                </option>

                

                @endforeach
            </select>
        </div>

        <hr>

        <button type="submit" class="btn btn-primary">Сохранить</button>


    </form>

</div>