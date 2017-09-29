<table>
    <tr>
        <th>{{ __("Category")}}</th>
        <th colspan="2">{{ __("Actions")}}</th>
    </tr>

    @foreach ($categories as $category)
        <tr>
            <td>{{$category->category}}</td>
            <td><a href='edit/{{$category->id}}'>{{ __('Edit')}}</a></td>
            <td><a href='delete/{{$category->id}}'>{{ __('Delete')}}</a></td>
        </tr>
    @endforeach

</table>