<h1 class="text-2xl font-bold">{{ title }}</h1>
<div class="mt-2">
    {{ short_desc }}
</div>

<div class="grid grid-cols-4 gap-4">
    {{collection:article}}
    <div class="border p-3 rounded-md">
    <h3>{{title}}</h3>
    <div>{{date}}</div>
    <a href="{{url}}">Baca Artikel</a>
    </div>
    {{/collection:article}}
</div>