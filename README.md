# Puissance4PHP

## Base de données
```sql
CREATE TABLE utilisateur (
  id INT AUTOINCREMENT PRIMARY KEY, -- AUTOINCREMENT peut s'écrire AUTO_INCREMENT avec certaines BDD
  identifiant VARCHAR(100) UNIQUE NOT NULL,
  motDePasse VARCHAR(255) NOT NULL, -- Mot de passe a crypter avec password_hash('mdp', PASSWORD_DEFAULT) en php
  score INT DEFAULT 0
);

CREATE TABLE partie (
  id INT AUTOINCREMENT PRIMARY KEY,
  nom VARCHAR(255), -- nom de la partie
  hauteur INT NOT NULL, -- hauteur de la grille 10 max
  largeur INT NOT NULL, -- largeur de la grille 10 max
  joueurUn INT,
  joueurDeux INT,
  grille VARCHAR(255) NOT NULL, -- matrice de l'état du jeu au moment x
  enCour BOOLEAN, -- True partie en cours, False finie
  tourJoueur INT NOT NULL, -- id du joueur qui joue le tour
  CONSTRAINT FK_PartieUtilisateur1 FOREIGN KEY (joueurUn)
  REFERENCES utilisateur(id),
  CONSTRAINT FK_PartieUtilisateur2 FOREIGN KEY (joueurDeux)
  REFERENCES utilisateur(id)
)
```

- Thomas PERRET
- Valentin COUDERC
- Nicolas COUFIN
