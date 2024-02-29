<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Hasil A</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Area</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Jumlah Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_a as $item)    
                            <tr>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->vendor }}</td>
                                <td>{{ $item->jumlah_task }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h4>Hasil B</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center align">Area</th>
                            <th colspan="5" class="text-center">Vendor</th>
                        </tr>
                        <tr>
                            <th scope="col">AI</th>
                            <th scope="col">BA</th>
                            <th scope="col">BO</th>
                            <th scope="col">NE</th>
                            <th scope="col">O2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_b as $item)    
                            <tr>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->ai ? $item->ai : "" }}</td>
                                <td>{{ $item->ba ? $item->ba : "" }}</td>
                                <td>{{ $item->bo ? $item->bo : "" }}</td>
                                <td>{{ $item->ne ? $item->ne : "" }}</td>
                                <td>{{ $item->o2 ? $item->o2 : "" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h4>Hasil C</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Area</th>
                            <th scope="col">Jumlah Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_c as $item)    
                            <tr>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->total_task }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <livewire:chart1>
            </div>
            <div class="col-6">
                <livewire:chart2>
            </div>
        </div>
    </div>
    @livewireScripts
        @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>