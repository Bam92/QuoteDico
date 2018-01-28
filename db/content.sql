insert into t_author values
	('', 'Nicolas Boileau'),
	-- ('', 'Linus B. Torvalds'),
	('', 'Virgile'),
	('', 'Léonard de Vinci'),
	('', 'Steve Jobs'),
	('', 'James Russell'),
	('', 'Henry David Thoreau'),
	('', 'David Barder'),
	('', 'Buddha'),
	('', 'Ovide'),
	-- ('', 'Robert E.G Beens'),
	('', 'Edward Snowden'),
	('', 'Albert Einstein'),
	('', 'Richard Stallman'),
	('', 'Jimmy Wales'),
	('', 'G. Lacroix'),
	('', 'Jean Eisenstaedt')
	;

insert into t_quote values
	('', 'Ce qui se conçoit bien s’énonce clairement et les mots pour le dire
		arrivent aisément', 1),

  ('', 'L\'ordinateur est pour moi l\'outil le plus remarquable que nous ayons
		créé, c\'est l\'équivalent d\'un vélo pour l\'esprit', 4),

	('', 'C\'est mieux d\'être un pirate que de s\'engager dans la marine.', 4),

	('', 'Je crains les Grecs. Même lorsqu’ils offrent des présents.', 2),

	('', 'La simplicité est la sophistication suprême', 3),

	('', 'La puissance ne vaut que par sa maîtrise',  5),

	('', 'Les détails nous empoisonnent la vie; simplifiez, simplifiez', 6),

	('', 'Soyez ici maintenant. Vous serez ailleurs plus tard. Est-ce si
		compliqué ?', 7),

	('', 'Ce que nous pensons, nous le devenons', 8),

	('', 'Ajoute peu à peu et tu auras beaucoup', 9),

	-- ('', 'Privacy is a basic human right', 11),

	('', 'Ma seule motivation est d\'informer le public sur ce qui est fait en
			leur nom et ce qui est fait contre eux.', 10),

	('', 'La créativité, c’est l’intelligence qui s’amuse', 11),

	('', 'Faites simple, mais pas plus simple !', 11),

	('', 'Tout le monde est un génie. Mais si vous jugez un poisson sur ses
		capacités à grimper à un arbre, il passera sa vie à croire qu\'il est
		stupide.', 11),

	('', 'Une personne qui n\'a jamais commis d\'erreurs n\'a jamais tenté
		d\'innover.', 11),

	('', 'Tout ce qui est vraiment grand et inspiré n’a été réalisé que par des
		individus travaillant librement.', 11),

	('', 'La vie, c\'est comme une bicyclette, il faut avancer pour ne pas perdre
		l\'équilibre.', 11),

	('', 'Nous qualifier d\'« open source », c\'est comme qualifier Kucinich de
		républicain.', 12),

	('', 'Je peux expliquer le logiciel libre en 3 mots : Liberté, Égalité,
		Fraternité.', 12),

	('', 'L\'argent, c\'est du temps ; sauf si vous n\'avez pas l\'un ou
		l\'autre.', 12),

	('', 'Nous voulons libérer le savoir. Nous sommes une force politique, nous
		sommes de la dynamite !', 13),

	('', 'Wikipédia est (…) à la fois un service public et un bien commun.', 13),

	('', 'Les livres sous licence libre sont la prochaine grosse révolution dans
		l\'éducation.', 13),

	('', 'E=mc², mais si on discute un peu, on peut l\'avoir pour beaucoup moins
		cher...', 14),

	('', 'La relativité n\'existerait donc que relativement aux relativistes', 15)
	;

	insert into t_tag values
		('', 'amour'),
		('', 'informatique'),
		('', 'creativite'),
		('', 'droit'),
		('', 'communaute'),
		('', 'psychologie'),
		('', 'jeux'),
		('', 'langue')
		;

	insert into t_quote_tag values
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
