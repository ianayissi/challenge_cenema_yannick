<?php
require("./partials/header.php");
?>
<main id="tarifs">
    <section>
      <h2>Tarifs</h2>
      <div class="flex">
        <ul>
          <li>Tarif Plein : 8,30 &euro;</li>
          <li>Tarif Réduit : 6,80 &euro;</li>
          <li>Tarif Enfant : 4,50 &euro;</li>
          <li>Supplément 3D : 1 &euro;</li>
        </ul>
        <ul>
          <li>Abonnement 5 places : -10%</li>
          <li>Abonnement 5 places -25ans : -20%</li>
        </ul>
      </div>
      <p>
        Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
        Tarif Enfant pour les - de 14 ans
      </p>
    </section>
    <section>
      <h2>Selon votre âge</h2>
      <table>
        <thead>
          <tr>
            <th>Votre âge</th>
            <th>Votre tarif</th>
            <th>Avec abonnement</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1 an</td>
            <td>4,50€</td>
            <td>18,00€</td>
          </tr>
          <tr>
            <td>2 ans</td>
            <td>4,50€</td>
            <td>18,00€</td>
          </tr>
          <tr>
            <td>...</td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>99 ans</td>
            <td>6,80€</td>
            <td>30,60€</td>
          </tr>
        </tbody>
      </table>
    </section>
    <section>
      <h2>Consommations</h2>
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Contenance</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Popcorn</td>
            <td>L</td>
            <td>3,00€</td>
          </tr>
          <tr>
            <td>Popcorn</td>
            <td>XL</td>
            <td>5,00€</td>
          </tr>
          <tr>
            <td>...</td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>Evian</td>
            <td>50cl</td>
            <td>4,00€</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
 <?php
 require("./partials/footer.php");