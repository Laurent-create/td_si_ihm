-- Insertion des catégories
INSERT INTO categorie (nom, description) VALUES
('Fruits', 'Tous les types de fruits'),
('Laiterie', 'Produits laitiers'),
('Boulangerie', 'Produits de boulangerie');

-- Insertion de produits
INSERT INTO produit (nom, prix, stock, id_categorie) VALUES
('Pomme', 1.50, 100, 1),  -- Catégorie "Fruits"
('Banane', 0.80, 150, 1),  -- Catégorie "Fruits"
('Lait', 2.00, 50, 2),     -- Catégorie "Laiterie"
('Pain', 1.20, 200, 3),    -- Catégorie "Boulangerie"
('Fromage', 3.50, 30, 2);  -- Catégorie "Laiterie"

-- Insertion de caisses
INSERT INTO caisse (etat) VALUES
('ouverte'),
('ouverte'),
('fermée');

-- Insertion d'achats
INSERT INTO achat (id_produit, id_caisse, quantite, prix_total) VALUES
(1, 1, 3, 4.50), -- 3 pommes à la caisse 1
(2, 1, 2, 1.60), -- 2 bananes à la caisse 1
(3, 2, 1, 2.00), -- 1 lait à la caisse 2
(4, 3, 5, 6.00), -- 5 pains à la caisse 3
(5, 1, 1, 3.50); -- 1 fromage à la caisse 1
