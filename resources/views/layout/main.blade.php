<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section id="jumbo">
    </section>

    <section>
          <div id="cards">
            <div class="container">
                <ul class="card">
                    <li v-for="(card, i) in cards" :key="i">
                      <a href="#">
                      </a>
                    </li>
                  </ul>
            </div>
          </div>
      
          <div class="shop">
            <div class="container">
              <ul>
              </ul>
            </div>
          </div>
    </section>
</body>
</html>