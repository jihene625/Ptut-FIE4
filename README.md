# Plugin GLPI - Pré-remplissage automatique des formulaires

Ce plugin a été développé dans le cadre d’un projet tutoré avec pour objectif d’améliorer l’expérience utilisateur sur GLPI, en ajoutant une fonctionnalité de **pré-remplissage automatique** des champs dans les formulaires créés avec FormCreator.

## 🔧 Fonctionnalités

- Injection automatique d’un script JavaScript dans les formulaires GLPI
- Pré-remplissage des champs utilisateur (nom, prénom, service, téléphone)
- Détection de l’ID du formulaire pour cibler dynamiquement les bons champs
- Aucune modification du noyau GLPI (respect des standards d’extension)


## 📦 Installation

1. Placer le dossier `monplugin` dans le répertoire `plugins/` de GLPI.
2. Activer le plugin via le menu **Configuration > Plugins** dans GLPI.
3. Vérifier que le script JS est bien injecté dans les formulaires (FormCreator requis).
4. Adapter les IDs des champs dans `preremplissage.js` si nécessaire.

## ⚠️ Important

Ce plugin est compatible avec GLPI 10.x. Il ne fonctionne que si FormCreator est installé et activé.  
**Attention** : une future mise à jour de GLPI pourrait intégrer nativement le pré-remplissage automatique dans les formulaires, rendant ce plugin partiellement ou totalement obsolète.  
Merci de consulter régulièrement la documentation du plugin FormCreator avant toute mise à jour.

## 📄 Licence

Plugin fourni à titre éducatif, sans garantie. Libre à vous de l’adapter à votre contexte.

