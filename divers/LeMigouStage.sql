-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 10 Mai 2019 à 14:58
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `LeMigouStage`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `id_achat` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_vente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_paiement` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_paiement` date DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `statut_paiement` tinyint(1) DEFAULT '0',
  `date_jour` date NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_article` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `created_at`, `updated_at`, `type_vente`, `mode_paiement`, `date_paiement`, `date_commande`, `date_livraison`, `statut_paiement`, `date_jour`, `id_client`, `id_article`) VALUES
(61, '2019-02-28 12:17:52', '2019-02-28 12:17:52', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(62, '2019-02-28 12:20:51', '2019-02-28 12:20:51', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(63, '2019-02-28 12:21:40', '2019-02-28 12:21:40', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(64, '2019-02-28 12:22:03', '2019-02-28 12:22:03', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(65, '2019-02-28 12:41:19', '2019-02-28 12:41:19', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(66, '2019-02-28 20:23:58', '2019-02-28 20:23:58', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(67, '2019-02-28 20:27:34', '2019-02-28 20:27:34', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(68, '2019-02-28 20:33:46', '2019-02-28 20:33:46', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(69, '2019-02-28 20:34:03', '2019-02-28 20:34:03', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(70, '2019-02-28 20:40:01', '2019-02-28 20:40:01', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(71, '2019-02-28 20:40:36', '2019-02-28 20:40:36', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(72, '2019-02-28 20:41:10', '2019-02-28 20:41:10', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(73, '2019-02-28 20:42:02', '2019-02-28 20:42:02', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(74, '2019-02-28 20:43:20', '2019-02-28 20:43:20', 'Repas', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(75, '2019-02-28 20:47:54', '2019-02-28 20:47:54', 'Dessert_divers', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(76, '2019-02-28 20:51:46', '2019-02-28 20:51:46', 'Dessert_divers', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(77, '2019-02-28 20:53:15', '2019-02-28 20:53:15', 'Dessert_divers', 'CB', NULL, NULL, NULL, NULL, '2019-02-28', 1, 5),
(78, '2019-02-28 20:54:05', '2019-02-28 20:54:05', 'Repas', 'Ticket_resto', NULL, NULL, NULL, NULL, '2019-02-26', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `achat_article`
--

CREATE TABLE `achat_article` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fk_achat` int(10) UNSIGNED NOT NULL,
  `fk_article` int(10) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `remise_forfaitaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `achat_article`
--

INSERT INTO `achat_article` (`id`, `created_at`, `updated_at`, `fk_achat`, `fk_article`, `quantite`, `remise_forfaitaire`) VALUES
(1, '2019-02-28 20:42:02', '2019-02-28 20:42:02', 73, 5, 1, NULL),
(2, '2019-02-28 20:43:20', '2019-02-28 20:43:20', 74, 5, 1, NULL),
(3, '2019-02-28 20:47:54', '2019-02-28 20:47:54', 75, 5, 1, NULL),
(4, '2019-02-28 20:51:46', '2019-02-28 20:51:46', 76, 5, 1, NULL),
(5, '2019-02-28 20:53:15', '2019-02-28 20:53:15', 77, 5, 1, NULL),
(6, '2019-02-28 20:54:05', '2019-02-28 20:54:05', 78, 5, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tome_livre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_parution` date DEFAULT NULL,
  `auteur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editeur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distrbuteur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diffuseur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteur_livre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rayon_livre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bon_achat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boisson` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dessert_divers` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_achat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remise_achat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taux_tva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ttc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secteur_bd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `secteur_jeunesse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `secteur_roman` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `secteur_occasion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_manga` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_comics` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_franco_belge` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_roman_graphique` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_alternatif` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_docu_bd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_album` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_activite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_divers` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cat_roman` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `qt_dispo_fournisseur` int(11) DEFAULT NULL,
  `qt_stock` int(11) DEFAULT NULL,
  `qt_depot` int(11) DEFAULT NULL,
  `qt_reservation` int(11) DEFAULT NULL,
  `qt_commande_fournisseur` int(11) DEFAULT NULL,
  `valeur_total_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `created_at`, `updated_at`, `nom`, `tome_livre`, `isbn`, `date_parution`, `auteur`, `editeur`, `distrbuteur`, `diffuseur`, `secteur_livre`, `rayon_livre`, `bon_achat`, `repas`, `boisson`, `dessert_divers`, `prix_achat`, `remise_achat`, `taux_tva`, `prix_ht`, `prix_ttc`, `secteur_bd`, `secteur_jeunesse`, `secteur_roman`, `secteur_occasion`, `cat_manga`, `cat_comics`, `cat_franco_belge`, `cat_roman_graphique`, `cat_alternatif`, `cat_docu_bd`, `cat_album`, `cat_activite`, `cat_divers`, `cat_roman`, `qt_dispo_fournisseur`, `qt_stock`, `qt_depot`, `qt_reservation`, `qt_commande_fournisseur`, `valeur_total_stock`) VALUES
(5, '2019-02-28 12:16:31', '2019-02-28 12:16:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Repas', NULL, NULL, NULL, NULL, '5%', '6.70', '7', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2019-02-28 20:21:45', '2019-02-28 20:21:45', 'kjefkje', '12', '1234-2345-78956', '2019-02-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5,5', '10', '12', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_fournisseur`
--

CREATE TABLE `article_fournisseur` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fk_article` int(10) UNSIGNED NOT NULL,
  `fk_fournisseur` int(10) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_sociale` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_rue` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `sexe` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_fixe` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id_client`, `created_at`, `updated_at`, `nom`, `prenom`, `raison_sociale`, `numero_rue`, `rue`, `ville`, `code_postal`, `age`, `sexe`, `mail`, `tel_fixe`, `tel_mobile`) VALUES
(1, '2019-02-20 20:31:03', '2019-02-20 20:31:03', 'morais', 'helder', '*HelDev*', '9', 'rue boissy d\'anglas', 'Auch', 32000, 45, 'male', 'morais.helder@hotmail.fr', NULL, '06 15 77 07 42'),
(2, '2019-02-20 20:31:56', '2019-02-20 20:31:56', 'lolo', 'lapinou', 'y a pas', '12', 'rue des fleurs', 'new villa', 56789, 32, 'female', 'lala@hto.fr', NULL, '1234567890');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id_fournisseur` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom_fournisseur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_rue` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_fournisseur` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_contact` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_06_083740_create_clients_table', 1),
(4, '2019_02_06_083842_create_fournisseurs_table', 1),
(5, '2019_02_06_083926_create_articles_table', 1),
(6, '2019_02_06_084110_create_achats_table', 1),
(7, '2019_02_06_090806_create_table_achat_article', 1),
(8, '2019_02_06_090854_create_table_article_fournisseur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morais', 'morais.helder@hotmail.fr', NULL, '$2y$10$FwALUti9qQAtpyWAU8b4cO9VZiaMtfU.t/01re/ydPv4nExPNvO0a', 'KCLv2BKvyo2Sr8znKmxTC8JJ9D9KoukSITkLm8DsfRyz4fJNdUZ9uMxGRSxn', '2019-02-20 14:39:50', '2019-02-20 14:39:50'),
(2, 'utilisateur test', 'testmail@mail.com', NULL, '$2y$10$omBWTaJt3qFTwxhBD5Q7KeCJ3R3vPQZgnAoxxYSXk/HMb2YN2WaP6', 'yUbYtXucZI8v4OO3Un2lpwAZCgVrIMgC5xOT6zKOR7OsXInWicTOMwZkCwYv', '2019-02-20 20:20:46', '2019-02-20 20:20:46'),
(3, 'titi', 'titi@mail.com', NULL, '$2y$10$M7/BAtXIDMfQ4klk.8e0guI4ZFt.qfPeNDtV0ot2Rcq6Ksr1Nfkse', 'IvPW0oPtrF5dIXFhW7rziscdjwye9TnB81aiE1TqUqQhWFOkgwuPUA3Q11Du', '2019-02-22 12:13:27', '2019-02-22 12:13:27'),
(4, 'test', 'tralala@mail.com', NULL, '$2y$10$ND.ZxUItunWAS/z1BuCtUulOePD.1E1fS9nPOeqoLD12bt0mMHZrC', 'iLum9DPbxcEsJphOjTdcQDRr7Qrj45DSHw2VePhcaoMxxeCZU3FuGl7v9dJU', '2019-02-22 13:28:36', '2019-02-22 13:28:36'),
(5, 'jejd', 'jsjc@jdjd.com', NULL, '$2y$10$9vjb5lGGmuIJUMOzOxJmuOzWzLuonhcNSGF1FuSY.XmQj8iQB6Q0C', 'wQeTMRDVOUXriMBttkRWOjvBBFEjB0ln8Mj01iAs2o5lNE5rEKHfmRdARS8i', '2019-02-22 14:14:29', '2019-02-22 14:14:29'),
(6, 'ohcdlkjc', 'ljqoicuiqjc@ihdia.jdu', NULL, '$2y$10$F8LxsbX8v2CNglUj3FzdS.gbUqjXFABq0TtuQIthfWqeHJdiuL6EC', 'uERPPXFVaP2KFCg82DTImZr7KXVJJMcljGNtv0oNUSagEbH0BU0FZQQIxaOT', '2019-02-22 14:27:57', '2019-02-22 14:27:57'),
(7, 'jnckjnsq', 'aaaaaa@zzz.fr', NULL, '$2y$10$0uEo6KeWIcwmJsJYApXzNuPd7PkWAgHiLSmIpAVE8HehxN6GkGJfS', 'JpeKs1Me1YVzTV6HdgFLyYKzcknSFRnDfameQmgbcQsX3ErWKFP0k9Nx0GxQ', '2019-02-22 14:29:44', '2019-02-22 14:29:44');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `achats_id_client_index` (`id_client`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `achat_article`
--
ALTER TABLE `achat_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achat_article_fk_achat_index` (`fk_achat`),
  ADD KEY `achat_article_fk_article_index` (`fk_article`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `articles_isbn_unique` (`isbn`);

--
-- Index pour la table `article_fournisseur`
--
ALTER TABLE `article_fournisseur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_fournisseur_fk_article_index` (`fk_article`),
  ADD KEY `article_fournisseur_fk_fournisseur_index` (`fk_fournisseur`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `clients_mail_unique` (`mail`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id_fournisseur`),
  ADD UNIQUE KEY `fournisseurs_mail_unique` (`mail`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id_achat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT pour la table `achat_article`
--
ALTER TABLE `achat_article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `article_fournisseur`
--
ALTER TABLE `article_fournisseur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id_fournisseur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`);

--
-- Contraintes pour la table `achat_article`
--
ALTER TABLE `achat_article`
  ADD CONSTRAINT `achat_article_fk_achat_foreign` FOREIGN KEY (`fk_achat`) REFERENCES `achats` (`id_achat`),
  ADD CONSTRAINT `achat_article_fk_article_foreign` FOREIGN KEY (`fk_article`) REFERENCES `articles` (`id_article`);

--
-- Contraintes pour la table `article_fournisseur`
--
ALTER TABLE `article_fournisseur`
  ADD CONSTRAINT `article_fournisseur_fk_article_foreign` FOREIGN KEY (`fk_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `article_fournisseur_fk_fournisseur_foreign` FOREIGN KEY (`fk_fournisseur`) REFERENCES `fournisseurs` (`id_fournisseur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
