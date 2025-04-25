# Cahier techniques
## Contexte

Dans ce projet, nous avons pour but la création d'un site internet dédié à la gestion de tournois de jeux vidéo. Ce projet vise à faciliter l'accès des utilisateurs à l'organisation et à la gestion de tournois, tout en introduisant un système de communauté. Ce système inclut la gestion des amis et encourage la participation grâce à des récompenses sous forme de médailles communautaires.

Les principaux objectifs sont :

- La catalogation des tournois avec un système de tri et de filtrage.
- La gestion des amis via un système de messagerie privée entre utilisateurs.
- La création de tournois avec des outils adaptés pour la gestion de chaque événement.
- La gestion des tournois par les hôtes.
- La création de profils pour gérer les amitiés, décrire et mettre en valeur les succès.

## Présentation des objectifs du contexte

### Catalogation des tournois avec un système de tri et de filtrage

La cataloguation des tournois sera disponible en version *connectée* et *non connectée*. Elle permettra de montrer les différents tournois disponibles en les classifiant en deux parties. La page intégrera un système de filtrage pour rendre le site plus *user-friendly*. Enfin, il y aura une vision sur les amis pour une connectivité optimale et pour la propagation des tournois disponibles.

| **Objectifs**                                                                                                                                                                                                           | **Solutions techniques**                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Division de l'interface du journal de présentation des tournois en deux sections : les tournois disponibles pour la semaine (avec une rotation du dimanche au dimanche suivant) et les tournois à venir (plus d'une semaine). | - Le système de rotation des tournois sera mis en place grâce à un protocole NTP (Network Time Protocol) et sera géré par un **Admin Réseau et Système**.                    |
|                                                                                                                                                                                                                         | - L'interface sera intégrée dans la charte graphique, comme précisé plus tard dans le document. Elle sera développée en CSS, HTML et JS par un **Développeur Front-End**. |
|                                                                                                                                                                                                                         | - La cataloguation se fera via un système de base de données MySQL, géré par un **Développeur Base de Données**.                                                               |
|                                                                                                                                                                                                                         | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.                                                     |

| **Objectifs**                                                                                                                      | **Solutions techniques**                                                                                                                                                                                       |
| ---------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Mise en place d'un filtrage des tournois pour faciliter l'utilisation par les utilisateurs, avec un tri par type (à définir).     | - Le système de tri sera basé sur des requêtes MySQL, géré par le **Développeur Back-End**.                                                                                                                   |
|                                                                                                                                    | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.                                                                                   |
|                                                                                                                                    | - L'interface respectera la charte graphique définie plus tard dans le document. Elle inclura un menu burger, développé en CSS, HTML et JS par un **Développeur Front-End**.                                  |

| **Objectifs**                                                                          | **Solutions techniques**                                                                                         |
| -------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| Mise en place d'une liste interactive et triée des amis par un système de disponibilité. | - Le système d'amis sera lié à la page de profil, développée ci-dessous par un **Développeur Front-End**.       |

Bien sûr ! Voici les sections demandées, structurées de manière similaire :

### Gestion des amis via un système de messagerie privée entre utilisateurs

La gestion des amis sera facilitée par un système de messagerie privée, permettant aux utilisateurs de communiquer facilement entre eux. Cette fonctionnalité sera disponible pour les utilisateurs connectés et permettra de renforcer la communauté autour des tournois. De plus un système de présence sera disponible pour voir comment l'utilisateur sera disponible.

| **Objectifs**                                                                                               | **Solutions techniques**                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Mise en place d'un système de messagerie privée pour permettre aux utilisateurs de communiquer directement. | - Le système de messagerie sera développé en utilisant des WebSockets pour permettre des communications en temps réel, géré par un **Développeur Back-End**. |
|                                                                                                             | - L'interface utilisateur sera intégrée dans la charte graphique, développée en CSS, HTML et JS par un **Développeur Front-End**.                            |
|                                                                                                             | - Les messages seront stockés dans une base de données MySQL, gérée par un **Développeur Base de Données**.                                                  |
|                                                                                                             | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.                                  |

| **Objectifs**                                                                    | **Solutions techniques**                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Intégration d'une liste d'amis avec des notifications pour les messages non lus. | - Les notifications seront gérées, permettant des mises à jour en temps réel, développées par un **Développeur Back-End**.                                                                                                      |
|                                                                                  | - L'interface utilisateur inclura des icônes de notification, développées en CSS, HTML et JS par un **Développeur Front-End**.                                                                                                  |
|                                                                                  | - Les données des amis et des notifications seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.                                                                                       |
|                                                                                  | - Les utilisateurs pourrons choisir leur disponibilité grace a des pastille de couleur : vert, orange rouge et incolore (connecté, ne pas déranger, indisponible, invisible/déconnecté), gérée par un **Développeur Back-End**. |

### Création de tournois avec des outils adaptés pour la gestion de chaque événement

La création de tournois sera simplifiée grâce à des outils adaptés, permettant aux organisateurs de gérer chaque aspect de leurs événements de manière efficace. Cela inclut la création d'un arbre de tournois pour visualiser et organiser les matchs.

| **Objectifs**                                                                                                                                                                                                           | **Solutions techniques**                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Fournir des outils pour la création et la gestion des tournois, incluant l'inscription des participants, la planification des matchs, et la gestion des résultats.                                                      | - Les outils de gestion seront développés en PHP et JavaScript, gérés par un **Développeur Back-End**.                                                                         |
|                                                                                                                                                                                                                         | - L'interface utilisateur sera intégrée dans la charte graphique, développée en CSS, HTML et JS par un **Développeur Front-End**.                                              |
|                                                                                                                                                                                                                         | - Les données des tournois seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.                                                        |
|                                                                                                                                                                                                                         | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.                                                     |

| **Objectifs**                                                                                                          | **Solutions techniques**                                                                                                       |
| ---------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| Intégration d'un tableau de bord pour les organisateurs, permettant de suivre l'avancement des tournois en temps réel. | - Le tableau de bord sera développé en utilisant des technologies front-end (CSS, HTML, JS) par un **Développeur Front-End**.  |
|                                                                                                                        | - Les mises à jour en temps réel seront gérées, développées par un **Développeur Back-End**.                                   |
|                                                                                                                        | - Les données du tableau de bord seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**. |

| **Objectifs**                                                                                                                  | **Solutions techniques**                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Création d'un arbre de tournois pour visualiser et organiser les matchs, facilitant ainsi la gestion des phases éliminatoires. | - L'arbre de tournois sera généré dynamiquement en utilisant JavaScript et des bibliothèques de visualisation comme D3.js, développé par un **Développeur Front-End**. |
|                                                                                                                                | - Les données des matchs et des participants seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.                             |
|                                                                                                                                | - Les mises à jour de l'arbre de tournois seront gérées en temps réel, développées par un **Développeur Back-End**.                                                    |

### Gestion des tournois par les hôtes

Les hôtes des tournois auront accès à des fonctionnalités spécifiques pour gérer leurs événements de manière optimale, assurant ainsi une expérience fluide pour les participants.

| **Objectifs**                                                                                                                                                                                                           | **Solutions techniques**                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Fournir des outils pour la gestion des inscriptions, la planification des matchs, et la communication avec les participants.                                                                                            | - Les outils de gestion seront développés en PHP et JavaScript, gérés par un **Développeur Back-End**.                                                                         |
|                                                                                                                                                                                                                         | - L'interface utilisateur sera intégrée dans la charte graphique, développée en CSS, HTML et JS par un **Développeur Front-End**.                                              |
|                                                                                                                                                                                                                         | - Les données des tournois seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.                                                        |
|                                                                                                                                                                                                                         | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.                                                     |

| **Objectifs**                                                                                                                  | **Solutions techniques**                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| Mise en place d'un système de notification pour informer les hôtes des nouvelles inscriptions et des mises à jour importantes. | - Les notifications seront gérées, permettant des mises à jour en temps réel, développées par un **Développeur Back-End**.     |
|                                                                                                                                | - L'interface utilisateur inclura des icônes de notification, développées en CSS, HTML et JS par un **Développeur Front-End**. |
|                                                                                                                                | - Les données des notifications seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.  |

### Création de profils pour gérer les amitiés, décrire et mettre en valeur les succès

Les utilisateurs pourront créer des profils personnalisés pour gérer leurs amitiés, décrire leurs exploits et mettre en valeur leurs succès au sein de la communauté.

| **Objectifs**                                                                                                                            | **Solutions techniques**                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| Permettre aux utilisateurs de créer et personnaliser leurs profils, incluant des informations, des listes d'amis, et des succès obtenus. | - Les fonctionnalités de profil seront développées en PHP et JavaScript, gérées par un **Développeur Back-End**.                  |
|                                                                                                                                          | - L'interface utilisateur sera intégrée dans la charte graphique, développée en CSS, HTML et JS par un **Développeur Front-End**. |
|                                                                                                                                          | - Les données des profils seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.           |
|                                                                                                                                          | - Le site sera hébergé sur un serveur LAMP (Linux, Apache, MySQL, PHP), protégé et géré par un **Admin Réseau et Système**.       |

| **Objectifs**                                                                                            | **Solutions techniques**                                                                                                                       |
| -------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| Intégration d'un système de badges et de récompenses pour encourager la participation et la compétition. | - Le système de badges sera développé en PHP et JavaScript, géré par un **Développeur Back-End**.                                              |
|                                                                                                          | - L'interface utilisateur affichera les badges et récompenses sur les profils, développée en CSS, HTML et JS par un **Développeur Front-End**. |
|                                                                                                          | - Les données des badges et récompenses seront stockées dans une base de données MySQL, gérée par un **Développeur Base de Données**.          |
### Autre fonctionnalité

#### Authentification

L'authentification se fera par un email et un mot de passe, conformément aux recommandations de la CNIL. Ce système sera protégé par plusieurs méthodes.

| **Objectifs**                                                           | **Solutions techniques**                                                                                                                  |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| Intégration d'un système d'authentification en accord avec les profils. | - Le système d'authentification se fera avec un email et un serveur mail sera géré par un **Admin Réseau et Système**.                    |
|                                                                         | - Le système ne stockera pas les mots de passe en clair et sera haché avec le protocole SHA256, géré par un **Admin Réseau et Système**. |
|                                                                         | - Le stockage de toutes les informations sera dans une base de données MySQL, gérée par un **Développeur Base de Données**.                |

#### Certification

Le site sera protégé et certifié par une autorité de certification (AC) pour que les utilisateurs soient en sécurité et accessible par tous.

| **Objectifs**                   | **Solutions techniques**                                                                                                     |
| ------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| Intégration d'une certification | - Le site internet sera protégé et certifié par une autorité compétente qui sera gérée par un **Admin Réseau et Système**. |

#### Gestion des logs

Les logs seront également gérés pour que les preuves informatiques soient disponibles en cas de problèmes. Cela assurera la légitimité de la demande d’accès et accordera les droits associés à la demande d’accès. Ici, un identifiant et un mot de passe sont la solution d'authentification choisie.
De plus, le principe DIC (Disponibilité, Intégrité et Confidentialité) sera respecté conformément aux préconisations de la CNIL et de l'ANSSI.
