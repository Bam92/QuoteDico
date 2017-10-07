insert into t_author values
	('', 'Nicolas Boileau'),
	('', 'Linus B. Torvalds'),
	('', 'Virgile'),
	('', 'Léonard de Vinci'),
	('', 'Steve Jobs'),
	('', 'James Russell'),
	('', 'Henry David Thoreau'),
	('', 'David Barder'),
	('', 'Buddha'),
	('', 'Ovide'),
	('', 'Robert E.G Beens'),
	('', 'Edward Snowden'),
	('', 'Albert Einstein')

	;
    
insert into t_quote values
	('', 'Ce qui se conçoit bien s’énonce clairement et les mots pour le dire
		arrivent aisément', now() - interval 5 day, 1),

	('', 'Keep quiet, show me the code', now() - interval 4 day, 2),

  ('', 'L\'ordinateur est pour moi l\'outil le plus remarquable que nous ayons
		créé, c\'est l\'équivalent d\'un vélo pour l\'esprit', now(), 5),

	('', 'Keep quiet, show me the code -attention, un essai a changer
		avant deploiement', now() - 4, 2),

	('', 'Je crains les Grecs. Même lorsqu’ils offrent des présents.', now() - 4, 3),

	('', 'La simplicité est la sophistication suprême', now() - 2, 4),

	('', 'La puissance ne vaut que par sa maîtrise', now() - 1, 6),

	('', 'Les détails nous empoisonnent la vie; simplifiez, simplifiez',
		now() - 1, 7),

	('', 'Soyez ici maintenant. Vous serez ailleurs plus tard. Est-ce si
		compliqué ?', now() - 1, 8),

	('', 'Ce que nous pensons, nous le devenons', now() + 1, 9),

	('', 'Adde parvum parvo magnus acervus erit
		(Ajoute peu à peu et tu auras beaucoup)', now(), 10),

	('', 'Privacy is a basic human right', now() + 1, 11),

	('', 'Be carrefull about what you share with large service providers ...
		There are alternative like StartPage... that don\'t store that information',
		now() + 3, 12),

	('', 'La créativité, c’est l’intelligence qui s’amuse', now() + 1, 13)


	;

	insert into t_category values
		('', 'amour'),
		('', 'informatique'),
		('', 'creativite'),
		('', 'droit'),
		('', 'communaute'),
		('', 'psychologie'),
		('', 'jeux'),
		('', 'langue')
		;

	insert into t_quote_category values
		(1, 1),
        (1, 3),
		(2, 1),
		(3, 2),
		(4, 3),
		(5, 4),
		(6, 5),
		(7, 6),
		(8, 7),
		(9, 8),
		(10, 1),
		(11, 3)
		;
