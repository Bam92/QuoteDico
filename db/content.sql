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
		arrivent aisément', 1),

	('', 'Keep quiet, show me the code', 2),

  ('', 'L\'ordinateur est pour moi l\'outil le plus remarquable que nous ayons
		créé, c\'est l\'équivalent d\'un vélo pour l\'esprit', 5),

	('', 'Keep quiet, show me the code -attention, un essai a changer
		avant deploiement', 2),

	('', 'Je crains les Grecs. Même lorsqu’ils offrent des présents.', 3),

	('', 'La simplicité est la sophistication suprême', 4),

	('', 'La puissance ne vaut que par sa maîtrise',  6),

	('', 'Les détails nous empoisonnent la vie; simplifiez, simplifiez', 7),

	('', 'Soyez ici maintenant. Vous serez ailleurs plus tard. Est-ce si
		compliqué ?', 8),

	('', 'Ce que nous pensons, nous le devenons', 9),

	('', 'Adde parvum parvo magnus acervus erit
		(Ajoute peu à peu et tu auras beaucoup)', 10),

	('', 'Privacy is a basic human right', 11),

	('', 'Be carrefull about what you share with large service providers ...
		There are alternative like StartPage... that don\'t store that information',
		12),

	('', 'Ma seule motivation est d\'informer le public sur ce qui est fait en
			leur nom et ce qui est fait contre eux.', 12),

	('', 'La créativité, c’est l’intelligence qui s’amuse', 13)
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
