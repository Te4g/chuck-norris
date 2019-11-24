<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ajax quest challenge</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel='stylesheet' href='https://unpkg.com/bulma@0.7.5/css/bulma.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
<section class="section">
    <div class="container">
        <h1 class="title">Chuck Norris Jokes</h1>
        <p>Click on Chuck for a new joke!</p>

        <div class="content" id="chuck-norris">
        </div>
    </div>

</section>

<!-- We need to load axios first! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
<script>
    // This function loads pokemon data from the Pokemon API
    function fetchChuckJSON() {
        const url = `https://api.chucknorris.io/jokes/random`;
        axios.get(url)
            .then(function(response) {
                return response.data; // SUBTLE difference with Fetch: response.data instead of response.json()
            })
            .then(function(chuck) {
                console.log('data decoded from JSON:', chuck);

                // Build a block of HTML
                const chuckHtml = `
        <br/>
        <p><strong>${chuck.value}</strong></p>
        <a href="."><img src="${chuck.icon_url}" /></a>
      `;
                document.querySelector('#chuck-norris').innerHTML = chuckHtml;
            });
    }

    fetchChuckJSON();
</script>
</body>

</html>
<?php
