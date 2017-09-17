insert into t_author values
	('', 'Nicolas', 'Boileau', '', '' ),
	('', 'Linus', 'B', 'Torvalds', '' ),
	('', '', 'Virgile', '', '' ),
	('', 'Léonard', 'de', 'Vinci', '' ),
	('', 'Steve', '', 'Jobs', '' ),
	('', 'James', '', 'Russell', '' ),
	('', 'Henry', 'David', 'Thoreau', '' ),
	('', 'David', '', 'Barder', '' ),
	('', '', '', 'Buddha', '' )
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
		compliqué ?', 'amour', now() - 3, 8),
	('', 'Ce que nous pensons, nous le devenons', 'amour', now() + 1, 9)

	;
