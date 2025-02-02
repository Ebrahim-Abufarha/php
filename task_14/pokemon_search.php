<?php
if (isset($_POST['pokemon'])) {
    $pokemonName = strtolower($_POST['pokemon']);
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokemon Search</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="pokemon" placeholder="Enter Pokemon name...">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($data)): ?>
        <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
            <h2><?php echo ucfirst($data['name']); ?></h2>
            <img src="<?php echo $data['sprites']['front_default']; ?>">
            <p>Abilities: 
                <?php foreach ($data['abilities'] as $ability): ?>
                    <?php echo $ability['ability']['name'] . ", "; ?>
                <?php endforeach; ?>
            </p>
        </div>
    <?php endif; ?>
</body>
</html>