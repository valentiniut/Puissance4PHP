<?php $title = "Jeu | Puissance  4"; ?>

<?php ob_start();
//$grilleAff = json_decode($grille);
//print_r($grilleAff[2]);
?>

<link rel="stylesheet" type="text/css" href="../css/game.css" />

<div id="game">

</div>

<script>
    class Puissance4 {
        /*
        Initialisation de la grille de jeu de hauteur rows et de largeur cols
         */
        constructor(element_id, hauteur= <?php echo $hauteur;?>, colonne=<?php echo $largeur;?>) {
            // Nombre de lignes et de colonnes
            this.hauteur = hauteur;
            this.colonne = colonne;
            this.tableJeu = Array(this.hauteur); // grille en matrice 0 pas joué, 1 joué j1, 2 joué j2
            for (let i = 0; i < this.hauteur; i++) {
                this.tableJeu[i] = Array(this.colonne).fill(0);
            }
            // un entier: 1 ou 2 (le numéro du prochain joueur)
            this.tour = 1;

            this.gagnant = null; // 1 j1, 2 j2, gagant de la partie

            // Nombre de coups joués
            this.coups = 0;

            this.element = document.querySelector(element_id);

            this.element.addEventListener('click', (event) => this.handle_click(event));
            // Affichage
            this.affichage();
        }

        /* Affiche le plateau de jeu dans le DOM */
        affichage() {
            let table = document.createElement('table');
            for (let i = this.hauteur - 1; i >= 0; i--) {
                let tr = table.appendChild(document.createElement('tr'));
                for (let j = 0; j < this.colonne; j++) {
                    let td = tr.appendChild(document.createElement('td'));
                    let colour = this.tableJeu[i][j];
                    if (colour)
                        td.className = 'player' + colour;
                    td.dataset.column = j;
                }
            }
            this.element.innerHTML = '';
            this.element.appendChild(table);
        }

        set(row, column, player) {
            // On colore la case
            this.tableJeu[row][column] = player;

            this.coups++;
        }

        /* Cette fonction ajoute un pion dans une colonne */
        play(column) {
            // Trouver la première case libre dans la colonne
            let row;
            for (let i = 0; i < this.hauteur; i++) {
                if (this.tableJeu[i][column] == 0) {
                    row = i;
                    break;
                }
            }
            if (row === undefined) {
                return null;
            } else {
                // Effectuer le coup
                this.set(row, column, this.tour);
                // Renvoyer la ligne où on a joué
                return row;
            }
        }

        handle_click(event) {
            // Vérifier si la partie est encore en cours
            if (this.gagnant !== null) {
                if (window.confirm("Partie terminée Voulez vous en lancer une autre ?")) {
                    this.reset();
                    this.affichage();
                }
                return;
            }

            let column = event.target.dataset.column;
            if (column !== undefined) {
                //attention, les variables dans les datasets sont TOUJOURS
                //des chaînes de caractères. Si on veut être sûr de ne pas faire de bêtise,
                //il vaut mieux la convertir en entier avec parseInt
                column = parseInt(column);
                let row = this.play(parseInt(column));

                if (row === null) {
                    window.alert("Column is full!");
                } else {
                    // Vérifier s'il y a un gagnant, ou si la partie est finie
                    if (this.win(row, column, this.tour)) {
                        this.gagnant = this.tour;
                    } else if (this.coups >= this.hauteur * this.columns) {
                        this.gagnant = 0;
                    }
                    // Passer le tour : 3 - 2 = 1, 3 - 1 = 2
                    this.tour = 3 - this.tour;

                    // Mettre à jour l'affichage
                    this.affichage()

                    //Au cours de l'affichage, pensez eventuellement, à afficher un
                    //message si la partie est finie...
                    switch (this.gagnant) {
                        case 0:
                            window.alert("Matche NULL !!");
                            break;
                        case 1:
                            window.alert("Le joueur Rose gagne");
                            break;
                        case 2:
                            window.alert("Le joueur Bleu gagne");
                            break;
                    }
                }
            }
        }

        /*
         Cette fonction vérifie si le coup dans la case `row`, `column` par
         le joueur `player` est un coup gagnant.

         Renvoie :
           true  : si la partie est gagnée par le joueur `player`
           false : si la partie continue
       */
        win(row, column, player) {
            // Horizontal
            let count = 0;
            for (let j = 0; j < this.colonne; j++) {
                count = (this.tableJeu[row][j] == player) ? count+1 : 0;
                if (count >= 4) return true;
            }
            // Vertical
            count = 0;
            for (let i = 0; i < this.hauteur; i++) {
                count = (this.tableJeu[i][column] == player) ? count+1 : 0;
                if (count >= 4) return true;
            }
            // Diagonal
            count = 0;
            let shift = row - column;
            for (let i = Math.max(shift, 0); i < Math.min(this.hauteur, this.colonne + shift); i++) {
                count = (this.tableJeu[i][i - shift] == player) ? count+1 : 0;
                if (count >= 4) return true;
            }
            // Anti-diagonal
            count = 0;
            shift = row + column;
            for (let i = Math.max(shift - this.cols + 1, 0); i < Math.min(this.hauteur, shift + 1); i++) {
                console.log(i,shift-i,shift)
                count = (this.tableJeu[i][shift - i] == player) ? count+1 : 0;
                if (count >= 4) return true;
            }

            return false;
        }

        // Cette fonction vide le plateau et remet à zéro l'état
        reset() {
            for (let i = 0; i < this.hauteur; i++) {
                for (let j = 0; j < this.colonne; j++) {
                    this.tableJeu[i][j] = 0;
                }
            }
            this.move = 0;
            this.gagnant = null;
        }
    }

    // On initialise le plateau et on visualise dans le DOM
    // (dans la balise d'identifiant `game`).
    let p4 = new Puissance4('#game');
</script>
<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>
