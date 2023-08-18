<x-layout>
    <x-setting heading="Published New Post">
        <form method="Post" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="{{'title'}}" />
            <x-form.input name="{{'slug'}}" />
            <x-form.input name="{{'thumbnail'}}" type="{{'file'}}" />
            <x-form.textarea name="{{'excerpt'}}" />
            <x-form.textarea name="{{'body'}}" />

            <x-form.field>
                <x-form.label name="{{'category'}}" />

                <select id="category" name="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                    @endforeach
                </select>

                <x.form-error name="{{'category'}}" />
            </x-form.field>

            <x-form.button>Publish</x-form.button>

        </form>
    </x-setting>
</x-layout>
