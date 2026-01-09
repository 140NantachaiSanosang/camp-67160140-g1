<h1>Pokedex Lists</h1>
<table class="table">
    <thead>
        <tr>
            <td>name</td>
            <td>type</td>
            <td>species</td>
            <td>height</td>
            <td>weight</td>
            <td>hp</td>
            <td>attack</td>
            <td>defense</td>
            <td>image_url</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach($pokedex as $item) {?>
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>{{ $item->image_url }}</td>
        <td>
            <a class="btn btn-warning" href="{{ url('/pokedexs/' . $item->name . '/edit') }}">
                แก้ไข
            </a>
            <form
                style="display:inline-block"
                action="{{url('/pokedexs/'. $item->name)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
