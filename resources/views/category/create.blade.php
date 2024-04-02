{{-- create.blade.php --}}

<form method="post" action = "/category">
    @csrf
{{-- Store method will invoke --}}
</form>

{{-- edit wala --}}
<form method = "post" action = "/category/5">
    @csrf
    @method('put')
    {{-- update method will invoke --}}
</form>

{{-- index.blade.php list wala page per ye code--}}
<form method="post" action="/category/5">
    @csrf
    @method('delete')
    {{-- destroy method will invoke --}}
</form>
