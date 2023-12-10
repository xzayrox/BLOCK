import sqlite3

# Création d'une connexion à la base de données (cela crée un fichier si la base de données n'existe pas)
conn = sqlite3.connect('ma_base_de_donnees.db')

# Création d'un objet curseur pour exécuter des requêtes SQL
cursor = conn.cursor()

# Création de la table utilisateurs
cursor.execute('''
    CREATE TABLE IF NOT EXISTS utilisateurs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        password_hash TEXT NOT NULL
    )
''')

# Insertion de données d'exemple
cursor.execute("INSERT INTO utilisateurs (username, password_hash) VALUES (?, ?)", ('utilisateur_test', 'mot_de_passe_hash'))

# Valider les modifications et fermer la connexion
conn.commit()
conn.close()
