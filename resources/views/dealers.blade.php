<head>
    @vite(['resources/js/dealers.js'])
</head>

<body>
    <div>СПИСОК ДИЛЕРОВ</div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Город</th>
                    <th scope="col">Адресс</th>
                    <th scope="col">Округ</th>
                    <th scope="col">Рейтинг</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dealers_list as $d)
                <tr>
                    <th>{{ $d->id }}</th>
                    <th>{{$d->name}}</th>
                    <th>{{$d->city}}</th>
                    <th>{{$d->address}}</th>
                    <th>{{$d->area}}</th>
                    <th>{{$d->rating}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="dealers"></div>
</body>
