insert into t_author values
	('', 'Nicolas', 'Boileau', '', '' ),
	('', 'Linus', 'B', 'Torvalds', '' ),
	('', '', 'Virgile', '', '' ),
	('', 'Léonard', 'de', 'Vinci', '' ),
	('', 'Steve', '', 'Jobs', '' ),
	('', 'James', '', 'Russell', '' ),
	('', 'Henry', 'David', 'Thoreau', '' ),
	('', 'David', '', 'Barder', '' ),
	('', '', '', 'Buddha', '' ),
	('', '', '', 'Ovide', '' ),
	('', 'Robert', 'E.G', 'Beens', '' ),
	('', 'Edward', 'Snowden', '', '' )

	;
insert into t_quote values
	('', 'Ce qui se conçoit bien s’énonce clairement et les mots pour le dire
		arrivent aisément', 'amour', now() - interval 5 day, 1),

	('', 'Keep quiet, show me the code', 'amour', now() - interval 4 day, 2),

	('', 'Keep quiet, show me the code -attention, un essai a changer
		avant deploiement', 'amour', now() - 4, 2),

	('', 'Je crains les Grecs. Même lorsqu’ils offrent des présents.',
		 'amour', now() - 4, 3),

	('', 'La simplicité est la sophistication suprême', 'amour', now() - 2, 4),
	('', 'L\'ordinateur est pour moi l\'outil le plus remarquable que nous ayons
		créé, c\'est l\'équivalent d\'un vélo pour l\'esprit', 'informatique',
		'now()', 5),

	('', 'La puissance ne vaut que par sa maîtrise', 'amour', now() - 1, 6),

	('', 'Les détails nous empoisonnent la vie; simplifiez, simplifiez', 'amour',
		now() - 1, 7),

	('', 'Soyez ici maintenant. Vous serez ailleurs plus tard. Est-ce si
		compliqué ?', 'amour', now() - 1, 8),

	('', 'Ce que nous pensons, nous le devenons', 'amour', now() + 1, 9),

	('', 'Adde parvum parvo magnus acervus erit
		(Ajoute peu à peu et tu auras beaucoup)', 'amour', now(), 10),

	('', 'Privacy is a basic human right', 'droit', now() + 1, 11),

	('', 'Be carrefull about what you share with large service providers ...
		There are alternative like StartPage... that don\'t store that information',
		 'droit', now() + 3, 12),

	;
