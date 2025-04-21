-- 1

SELECT utilisateurs.nom from utilisateurs
join  profils on utilisateurs.id = profils.utilisateur_id
join profil_langue on profils.id = profil_langue.profil_id
join langues on profil_langue.langue_id = langues.id

where utilisateurs.role like 'freelance' and langues.nom like 'Anglais' and profil_langue.niveau like 'avancé'


-- 2

SELECT utilisateurs.nom as freelancer ,COUNT(competences.nom) as competence_count from utilisateurs
join  profils on utilisateurs.id = profils.utilisateur_id
join profil_competence on profils.id = profil_competence.profil_id
join competences on profil_competence.competence_id = competences.id
where utilisateurs.role = 'freelance'
group BY freelancer
having competence_count > 3

SELECT utilisateurs.nom AS freelancer, COUNT(competences.nom) AS competence_count
FROM utilisateurs
JOIN profils ON utilisateurs.id = profils.utilisateur_id
JOIN profil_competence ON profils.id = profil_competence.profil_id
JOIN competences ON profil_competence.competence_id = competences.id
WHERE utilisateurs.role = 'freelance'
GROUP BY freelancer
HAVING competence_count > 3;

-- 3

SELECT utilisateurs.nom as freelancer , profils.tarif_horaire , adresses.ville from utilisateurs
join profils on utilisateurs.id = profils.utilisateur_id
join adresses on utilisateurs.id = adresses.utilisateur_id
where where utilisateurs.role like 'freelance' and profils.disponible = 1;

-- 4


SELECT utilisateurs.nom as users  from utilisateurs
left join profils on utilisateurs.id = profils.utilisateur_id 

where profils.utilisateur_id is null
group by users


-- 5

SELECT utilisateurs.nom as users  from utilisateurs
left join projets on utilisateurs.id = projets.client_id 

where utilisateurs.role like 'client'  and projets.client_id  is null
group by users

-- 6

select  projets.id ,projets.titre ,count(offres.projet_id) from projets
join offres on projets.id = offres.projet_id

where projets.statut like 'ouvert'
group by projets.id ,projets.titre 

-- 7

select projets.titre , offres.id  , profils.tarif_horaire from utilisateurs

join profils on utilisateurs.id = profils.utilisateur_id
join projets on utilisateurs.id = projets.client_id
join offres  on projets.id = offres.projet_id

where profils.tarif_horaire < 100 and utilisateurs.role like 'freelance'

group by projets.titre , offres.id 

-- 8






