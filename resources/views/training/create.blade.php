<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulaire</h1>
        <form action="{{route('training.store')}}" method="POST">
        @csrf
            <div>
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" />
            </div>
            <br/>

            <div>
                <label for="length">Taille</label>
                <input type="number" id="length" name="length" />
            </div>
            <br/>

            <div>
                <label for="max_people">Nombre de personne maximum</label>
                <input type="number" id="max_people" name="max_people" />
            </div>
            <br/>
            <div>
                <label for="type-select">Choisir un type:</label>
                <input type="radio" name="type" id="type" value="adulte">adulte</radio>
                <input type="radio" name="type" id="type" value="enfant">enfant</radio>
                    </select>
            </div>
            <br/>
            
            <div>
                <input type="submit" value="Envoyer" />
            </div>

        </form>

</body>
</html>