<a href="www.keepizi.com"><img src="https://www.keepizi.com/wp-content/uploads/2018/08/Logo-Keepizi_violet_retina.png" title="Keepizi" alt="Keepizi"></a>

*** Exercice de mise en ligne d'un projet Ajax via Git ***

# Mise en ligne d'un projet qui concerne l'ajout d'article favoris 
> Des articles apparaissent pour l'utilisateur. Au click l'article est ajouté au favoris via la session lors du dé-click, l'icone favoris disparaît et l'article est enlevé de la session

> Tech: Ajax, Js, PHP

**N'oubliez pas de ...**
- si vous souhaitez lier à une base de données, créez votre fichier d'initialisation dans le dossier inc.
- les articles apparaissent en "dur" dans notre index veuillez les remplacer par les vôtres.

    > Ajout de notre GIF [![LES FAVORIS SELON LES GOONIES](https://media.giphy.com/media/GHcm2aWIczatG/giphy.gif)]()

## Table des matieères

- [Explication](#explication)
- [Remerciement](#remerciements)

---
## Explication
---
> Ajout d'une partie de code dans le README
```PHP
// retrait des favoris en session
if(isset($_POST["a"]) && $_POST["a]=="remove")
            {
                
                if(in_array($id,$_SESSION["favorites"])&&$_POST["a"]== "remove")
                {
                    unset($_SESSION["favorites"][$id]);
                }
            }


```

- pour retirer les favoris de ma session je regarde bien que l'action demandée est un "remove";
- je fais concorder le $id envoyé en POST avec les valeurs enregistrées en SESSION

---
### Remerciements
---

A tous les étudiants !
[![Veuillez visiter notre site](https://media.giphy.com/media/13OyGVcay7aWUE/giphy.gif)](https://www.keepizi.com)