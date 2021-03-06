<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>index</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container">
      <header>
        <div class="logo">
          <img
            src="data:image/png;base64,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"
            alt=""
          />
        </div>
        <div class="tel">
          <p>Nos conseillers à votre service</p>
          <a href="tel:+33 173 793 333">+33 173 793 333</a>
        </div>
      </header>
      <section>
        <form action="index.html" class="post">
            <div class="form-floating">
              <input
                type="search"
                class="form-control"
                id="search"
                placeholder=""
              />
              <label for="floatingPassword">
                Ville, aéroport, gare
                <i class="far fa-search"></i>
              </label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="check" />
              <label class="form-check-label" for="Check">
                Retour dans une autre ville&nbsp?
              </label>
            </div>
            <div class="mb-3">
              
              <input type="date" value="<?php echo $today; ?>" class="form-control" id="date" name="date">
            </div>
            <select class="dateDépart" aria-label="Default select example">
              <option selected>Prise en charge</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </form> 
      </section>
      <form action="index.html" class="post">
        <div class="form-floating">
          <input
            type="search"
            class="form-control"
            id="search"
            placeholder=""
          />
        
      </form>

      <footer></footer>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
