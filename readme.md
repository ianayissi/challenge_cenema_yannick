# Challenge PHP : Cinema le Beauvoir

Votre client est venu vous voir pour vous demander de l'aider à finir son site en cours d'élaboration. Vous disposez déjà d'une bonne base puisqu'une bonne partie des fichiers ``html`` sont déjà implémentés. Ainsi, vous pouvez déjà avoir un aperçu du résultat final. Tout a l'air de fonctionner, et pourtant...

- Sur la page d'*Accueil*, seul le lien vers la salle Athena est fonctionnel. Les autres nous retournent une erreur 404.
- Sur la page *Tarifs* : les tableaux avec les tarifs des consommations et les prix des places en fonction de l'âge ne sont que partiellement achevés
- Sur la page *En salle* : seul l'affiche du premier film est cliquable, les autres nous retournent une erreur 404 (comme les liens des salles)

Cependant, si tout fonctionnait bien, votre client ne serait pas venu vous voir !! Il va falloir remédier à tous ces problèmes.

De plus, vous remarquez avec votre oeil d'expert que tout est en ``html/css``, alors que vous disposez d'un fichier ``data.php`` où toutes les données importantes sont soigneusement stockées... Quel gachis !!

Ce serait tellement mieux de **dynamiser** tout cela.

## Le MVP

Dans un premier temps, découpez tous les fichiers ``html`` en différents fichiers ``php`` pour éviter d'avoir à retaper le *header* et le *footer*.

Commençons déjà par observer les tableaux sur la page *Tarifs*. A l'aide de calculs simples en vous pourrez calculer en fonction de l'âge d'un client, le tarif qui s'applique et le prix de l'abonnement (regardez bien les conditions affichées sur le site). Construiez donc le tableau des tarifs pour tous les âges compris entre 1 et 99 ans, grâce aux boucles et conditions en PHP.

Nous avons également le tableau des consommations à compléter : ce serait tellement mieux de le **dynamiser** avec les données contenues dans ``$consommations`` (voire le fichier ``data.php``)

## le bonus

Sur la page d'*Accueil*, le lien vers la page ``athena.html`` (*ou* ``athena.php``, *si vous avez déjà bien avancé le challenge*) fonctionne plutôt bien : il faudrait également créer les fichiers correspondants pour les autres salles. Faites le déjà en *statique* pour éviter les erreurs 404.

## le super-bonus

Vous aurez remarqué que les salles sont regroupées dans un tableau *indexé* ``$salles``. Chaque salle correspond donc à un *index* compris entre ``0`` et ``4``. C'est cet *index* que l'on retrouve associé à la *clé* ``salle`` dans le tableau ``$films``

Il va falloir finir de dynamiser tout cela : faites en sorte que le fichier ``athena.php`` affiche bien le film dont la *clé* ``salle`` est associée à la valeur ``0``, et répétez l'opération pour les autres salles.

Sur le même principe, il ne nous reste plus qu'à dynamiser le contenu de la page *En salle*