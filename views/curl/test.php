<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Weather ma'lumoti</h2>

        <table class="table">
            <tr>
                <th>Havo holati</th>
                <th>Temperatura</th>
                <th>Shamol tezligi</th>

            </tr>

                <tr>
                    <td><?= isset($data['weather']) ?? ''; ?></td>
                    <td><?= $data['main']['temp'] ?></td>
                    <td><?= $data['wind']['speed'] ?></td>

                </tr>

        </table>


    </div>
</div>
