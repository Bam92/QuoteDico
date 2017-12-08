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
	('', 'Albert Einstein'),
	('', 'Richard Stallman'),
	('', 'Jimmy Wales')
	;

insert into t_quote values
	('', 'Ce qui se conçoit bien s’énonce clairement et les mots pour le dire
		arrivent aisément', 1),

  ('', 'L\'ordinateur est pour moi l\'outil le plus remarquable que nous ayons
		créé, c\'est l\'équivalent d\'un vélo pour l\'esprit', 5),

	('', 'C\'est mieux d\'être un pirate que de s\'engager dans la marine.', 5),

	('', 'Je crains les Grecs. Même lorsqu’ils offrent des présents.', 3),

	('', 'La simplicité est la sophistication suprême', 4),

	('', 'La puissance ne vaut que par sa maîtrise',  6),

	('', 'Les détails nous empoisonnent la vie; simplifiez, simplifiez', 7),

	('', 'Soyez ici maintenant. Vous serez ailleurs plus tard. Est-ce si
		compliqué ?', 8),

	('', 'Ce que nous pensons, nous le devenons', 9),

	('', 'Ajoute peu à peu et tu auras beaucoup', 10),

	('', 'Privacy is a basic human right', 11),

	('', 'Ma seule motivation est d\'informer le public sur ce qui est fait en
			leur nom et ce qui est fait contre eux.', 12),

	('', 'La créativité, c’est l’intelligence qui s’amuse', 13),

	('', 'Tout le monde est un génie. Mais si vous jugez un poisson sur ses
		capacités à grimper à un arbre, il passera sa vie à croire qu\'il est
		stupide.', 13),

	('', 'Une personne qui n\'a jamais commis d\'erreurs n\'a jamais tenté
		d\'innover.', 13),

	('', 'Tout ce qui est vraiment grand et inspiré n’a été réalisé que par des
		individus travaillant librement.', 13),

	('', 'La vie, c’est comme une bicyclette, il faut avancer pour ne pas perdre
		l’équilibre.', 13),

	('', 'Nous qualifier d’« open source », c’est comme qualifier Kucinich de
		républicain.', 14),

	('', 'Je peux expliquer le logiciel libre en 3 mots : Liberté, Égalité,
		Fraternité.', 14),

	('', 'L\'argent, c\'est du temps ; sauf si vous n’avez pas l’un ou
		l’autre.', 14),

	('', 'Nous voulons libérer le savoir. Nous sommes une force politique, nous
		sommes de la dynamite !', 15),

	('', 'Wikipédia est (…) à la fois un service public et un bien commun.', 15),

	('', 'Les livres sous licence libre sont la prochaine grosse révolution dans
		l\'éducation.', 15)
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
