<html>

<body>

    <form action="./post.php" method="POST">
        <label for="naam">Naam (verplicht)</label>
        <input type="text" id="naam" name="naam" required />

        <label for="email">E-mail (verplicht)</label>
        <input type="email" id="email" name="email" required />

        <label for="telefoon">Telefoonnummer (verplicht)</label>
        <input type="tel" id="telefoon" name="telefoon" required />

        <label for="datum">Datum van reservering (verplicht)</label>
        <input type="date" id="datum" name="datum" required />

        <label for="tijd">Tijd (verplicht)</label>
        <input type="time" id="tijd" name="tijd" required />

        <label for="personen">Aantal personen (verplicht, minimaal 1)</label>
        <input type="number" id="personen" name="personen" min="1" required />

        <label for="wensen">Specifieke wensen (optioneel)</label>
        <textarea id="wensen" name="wensen" rows="4"></textarea>

        <button type="submit">Verzenden</button>
    </form>
</body>

</html>