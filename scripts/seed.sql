-- regions seed
INSERT INTO `regions` (`id`, `name`) VALUES (1, 'SÃO JOÃO'), (2, 'TABOÃO'), (3, 'CUMBICA'), (4, 'BONSUCESSO'), (5, 'CENTRO'), (6, 'PIMENTAS');


-- schools seed
INSERT INTO `schools` (`id`, `name`, `rooms_amount`) VALUES (1, 'Teatro Adamastor, AV: Monteiro Lobato, nº 734 – Macedo', 6), (2, 'EPG Zumbi dos Palmares Av: Bom Jesus Lapa, nº 610 – Bonsucesso', 5), (3, 'EPG Zilda Furini Fanganiello R: Aracaju, nº 458 – Jd. Leblon', 5), (4, 'EPG GLORINHA PIMENTEL Rua: Pedra Lavada, 829 - Jardim Castanha', 6), (5, 'EPG Svaa Evans AV: Benjamin Harris Hannicut, nº 1854 -  Vila Rio', 7), (6, 'EPG Dona Benta R: Taipu nº 176 –  São João', 7), (7, 'EPG Perseu Abramo R: Bela Vista do Paraíso, nº 53, Presidente Dutra', 9), (8, 'EPG Manoel de Paiva AV: Francisco Conde, nº 600 – Vila Rosália', 5), (9, 'EPG Walter Efigênio- Céu Parque São Miguel Rua: Joaquim Moreira S/N – Parque são Miguel', 10), (10, 'EPG Faustino Ramalho AV: Palmira Rossi,s/nº Recreio São Jorge', 9), (11, 'EPG Da Emilia R: João Loprete, nº 234 –Vila São João', 7), (12, 'EPG Hamilton Felix AV: Atalaia do Norte nº 544 – Cumbica', 9), (13, 'EPG SILVIA DE CASSIA MATIAS Rua: Conceição da Barra, S/N - Jardim Santa Inês', 10), (14, 'EPG Amadeu Pereira Lima R: Reriutaba, nº 51 Uirapuru', 7), (15, 'E.E PADRE CONRADO Avenida Bom Clima, 556 - Bom clima', 9), (16, 'EPG Cerqueira Cesar AV: Domingos Fanganiello nº 171 – Ponte Grande', 3), (17, 'EPG Euclides da Cunha R: Luiz Caputo nº 23 – Fortaleza', 10), (18, 'EPG Edson Nunes Malecka - Céu Ponte Alta R: Pernambuco, nº 836 – Ponte Alta', 12), (19, 'EPG Manoel Resende da Silva R: Benedito Thieso nº 213 – Bambi', 5), (20, 'EPG Dorival Caymi AV: da Granja nº 578 – Guaracy', 6), (21, 'EPG Inez Rizzatto Rodrigues R: Padre Marcos, nº 437 – Aracilia', 4), (22, 'Céu Pimentas Estrada do Caminho Velho, nº 351 – Pimentas', 9);


-- candidates seed
INSERT INTO `candidates` (`id`, `region_id`, `name`, `status`) VALUES (1, 1, 'FARLEY MESSIAS BORGES DE SOUZA', 'Deferido'), (2, 2, 'SUELI DA SILVA MOREIRA ZACARIAS', 'Deferido'), (3, 2, 'SERGIO DE FREITAS JUNIOR', 'Deferido'), (4, 3, 'EVANDRO SILVA MARQUES', 'Deferido'), (5, 3, 'TAMMY REGINA FERNANDES', 'Deferido'), (6, 1, 'GILMARIA DA SILVA FERREIRA', 'Deferido'), (7, 3, 'ROSELITO SANTOS SILVA', 'Deferido'), (8, 3, 'AURENI SERAFIM DA SILVA', 'Deferido'), (9, 2, 'NOEMIA MARIA DOS SANTOS', 'Deferido'), (10, 4, 'WELLINTON BEZERRA DA SILVA', 'Deferido'), (11, 2, '(MARIAZINHA) MARIA APARECIDA DA SILVA', 'Deferido'), (12, 3, 'ANTONIA BEZERRA DE CARVALHO', 'Deferido'), (13, 2, '(PRISCILA)ERIDAN DOS SANTOS ALMEIDA', 'Deferido'), (14, 5, 'JOSÉ FABIANO MORENO GONÇAVES', 'Deferido'), (15, 1, 'MARIA HELENA ALVES MACEDO SILVA', 'Deferido'), (16, 5, 'SELVIRA MOITINHO DE ANDRADE', 'Deferido'), (17, 5, 'TATIANE PATRICIO ARRECHE NETO', 'Deferido'), (18, 4, 'FABIANA PEREIRA DE FRANÇA', 'Deferido'), (19, 3, 'MARIA KATIA DELMONTES DOS SANTOS', 'Deferido'), (20, 2, 'MARILDA SAMPAIO DE JESUS', 'Deferido'), (21, 6, 'CARLA DUQUE DE FRANÇA THEODORO', 'Deferido'), (22, 6, 'JOSEILDO BERNADINO COSTA JUNIOR', 'Deferido'), (23, 2, 'JOSEFINA MARIA DE JESUS BISPO', 'Deferido'), (24, 6, 'NAIR CECILIA REIS PORTO', 'Deferido'), (25, 1, 'SUELI APARECIDA MARQUES DOMINGOS', 'Deferido'), (26, 4, 'MARCIA LIRA JACUNDINO', 'Deferido'), (27, 2, 'JOSÉ HENRIQUE DAS NEVES', 'Deferido'), (28, 3, 'MARCELA RODRIGUES DOS SANTOS', 'Deferido'), (29, 4, 'DEVAIR NUNES VARGAS', 'Deferido'), (30, 1, 'ODILA FATIMA PEREIRA DOS SANTOS', 'Deferido'), (31, 2, 'THATIANE SOUSA THEODORO', 'Deferido'), (32, 5, 'ANA PAULA MARTINES MORAES', 'Deferido'), (33, 5, 'ROSANA DANIELA DE PAULA CORDEIRO', 'Deferido'), (34, 1, 'ROSEMEIRE DE SOUZA MENCONCINI', 'Deferido'), (35, 5, 'SONIA ALVES DA PAZ', 'Deferido'), (36, 5, 'ANDREIA FERREIRA BORTOLOTTI', 'Deferido'), (37, 4, 'LUZIA PEREIRA DE SENA', 'Deferido'), (38, 5, 'ERIKA ANTONIA DOS SANTOS', 'Deferido'), (39, 6, 'DENISE DAS DORES PEREIRA PAIXÃO', 'Deferido'), (40, 1, 'DAYSE DE LIMA SANTOS', 'Deferido'), (41, 3, 'ELIAS MARINHO DOS REIS', 'Deferido'), (42, 2, 'ANA MARLI RODRIGUES MOTA CUNHA', 'Deferido'), (43, 5, 'ALESSANDRA MARIA DE ALMEIDA', 'Deferido'), (44, 2, 'JULIANA GOMES CORREA DE LIRA', 'Deferido'), (45, 4, 'SABINO PINTO SILVA', 'Deferido'), (46, 4, 'MARCOS ROBERTO FERREIRA', 'Deferido'), (47, 3, 'PATRICIA NASCIMENTO DE MATOS', 'Deferido'), (48, 4, 'ROSANGELA PEDRO', 'Deferido'), (49, 1, 'RAQUEL DOS SANTOS SOTELINO', 'Deferido'), (50, 6, 'BENEDITA GOMES DE OLIVEIRA', 'Deferido'), (51, 1, 'WANILDA ROSA', 'Deferido'), (52, 6, 'SANDRA REGINA DE JESUS LANDIM', 'Deferido'), (53, 4, 'ROBSON SOARES DOS SANTOS', 'Deferido'), (54, 1, 'JEIZA CAVALCANTE LIMA SILVA', 'Deferido'), (55, 5, 'DANIELLY NAILANY LIMA ARAUJO', 'Deferido'), (56, 1, 'VALDEJANE LUCIA SILVA DE SIQUEIRA', 'Deferido'), (57, 6, 'MARIA APARECIDA BARBOSA GOMES', 'Deferido'), (58, 3, 'IRISMAR CARVALHO DE SOUZA TEIXEIRA', 'Deferido'), (59, 1, 'GLAUCIA SOUSA MIRANDA DA SILVA', 'Indeferido'), (60, 6, 'MARIA APARECIDA LIMA DOS SANTOS', 'Deferido'), (61, 5, 'GERALDA VIEIRA ROCHA SANTOS', 'Deferido'), (62, 1, 'BERTULINO SANTOS SANTANA', 'Deferido'), (63, 4, 'SAMARA SANTOS SILVA', 'Deferido'), (64, 3, 'CLAUDIO ROBERTO SOARES COELHO', 'Deferido'), (65, 2, 'MARIA JOSÉ PAVAN MOLLEDO', 'Deferido'), (66, 4, 'DANIELA DE MELO CARACY SOUZA', 'Deferido'), (67, 5, 'NILZA PENHA DO NASCIMENTO DOS SANTOS', 'Deferido'), (68, 3, 'WILMA APARECIDA MACHADO SILVA', 'Indeferido'), (69, 1, 'ANELISE ANDRADE LIMA', 'Deferido'), (70, 1, 'JOSE PAULO DA SILVA SOBRINHO', 'Indeferido'), (71, 4, 'ELISANGELA RODRIGUES DOS SANTOS', 'Deferido'), (72, 4, 'MARIA SUELY SANTOS', 'Deferido'), (73, 4, 'JESSICA DO NASCIMENTO SAMPAIO', 'Deferido'), (74, 1, 'KATIA CRISTINA FERRON LEITE', 'Deferido'), (75, 5, 'MARCO ANTONIO VIEIRA COUTO', 'Deferido'), (76, 3, 'ALUISIO BATISTA DE AMORIM', 'Deferido'), (77, 3, 'PEDRO HENRIQUE ALBUQUERQUE DE SIQUEIRA', 'Deferido'), (78, 6, 'SILVIO LUIZ SILVA', 'Indeferido'), (79, 3, 'JONATAS MACENA OLIVEIRA', 'Deferido'), (80, 4, 'MÓISES BRAZ DA HORA', 'Deferido'), (81, 1, 'GLORIA DA PENHA VILAÇA', 'Indeferido'), (82, 3, 'JOANA MARES CORREIA DA SILVA', 'Indeferido'), (83, 4, 'SANDRA DA SILVA SANTANA', 'Indeferido'), (84, 2, 'SUELLEM MARTA DOS SANTOS VIEIRA', 'Deferido'), (85, 5, 'CICERO COSMO PEREIRA', 'Deferido'), (86, 5, 'ISAIAS GOMES DA SILVA', 'Deferido'), (87, 4, 'ELIANA SOUZA SANTOS BRITO', 'Deferido'), (88, 4, 'LUCILENE CRISTINA DOS SANTOS SOUZA', 'Deferido'), (89, 6, 'VANUZA APARECIDA DE LIMA', 'Deferido'), (90, 2, 'CLOVIS MACEDO', 'Deferido'), (91, 6, 'JAQUELINE DE LIMA SILVA', 'Deferido'), (92, 2, 'ESTER BENONES DA SILVA', 'Deferido'), (93, 1, 'KELLY CRISTINA DE MOURA', 'Indeferido'), (94, 5, 'JUSSARA ROSELI FULCO', 'Indeferido'), (95, 3, 'HEYB HAYANE SANTOS PAULO DO NASCIMENTO', 'Deferido'), (96, 6, 'JOSÉ ALOISIO NATAL DE SOUZA', 'Indeferido'), (97, 4, 'LUCIANA APARECIDA SILVA SANTOS', 'Deferido'), (98, 4, 'VANGELIA GOMES CAMILO', 'Deferido'), (99, 4, 'AMÉLIA LEITE GOMES PAVAM', 'Deferido'), (100, 1, 'MÁRCIA APARECIDA DA SILVA', 'Indeferido'), (101, 1, 'LUCIO MAURO NUNES PEREIRA', 'Indeferido'), (102, 4, 'EUNICE DE SANTANA ARAUJO', 'Indeferido'), (103, 5, 'ROBERVAL TRAJANO BARROS CAVALCANTE', 'Deferido'), (104, 4, 'ADRIANA FERNANDES ALMEIDA BENDITO', 'Indeferido'), (105, 2, 'GESLAINE QUINTINO SOBRAL', 'Deferido'), (106, 2, 'SANDRO ALDÊNIO FERREIRA DA SILVA', 'Deferido'), (107, 6, 'APARECIDA DE SOUZA SILVA', 'Indeferido'), (108, 5, 'BRASILENE CAVALCANTE DE BRAGANÇA', 'Deferido'), (109, 1, 'EDLEUDES EVANGELISTA SANTOS', 'Deferido'), (110, 2, 'REGIANE BUENO DOS SANTOS', 'Deferido'), (111, 6, 'ADAILTON BATISTA DE SENA ', 'Deferido'), (112, 6, 'MARIA EDWINA SANTOS CRUZ', 'Deferido'), (113, 5, 'ANA CLAUDIA CASTRO LIMA', 'Deferido'), (114, 2, 'ZINALEIA NOGUEIRA SANTOS ', 'Indeferido'), (115, 2, 'MARIA ELISABETE DA SILVA MELO', 'Deferido'), (116, 5, 'VANESSA DOS SANTOS SILVA', 'Deferido'), (117, 2, 'REJANE APARECIDA FLAUZINO SILVA', 'Deferido'), (118, 6, 'ALECSANDRA DA SILVA OLIVEIRA', 'Deferido'), (119, 3, 'FERNANDA LOPES DE OLIVEIRA', 'Deferido'), (120, 4, 'PATRICIA ALVES SILVA', 'Deferido'), (121, 4, 'JOSÉ EDIVALDO ROCHA LINS', 'Deferido'), (122, 5, 'IRAQUITAN SOUZA DE ARAÚJO', 'Deferido'), (123, 4, 'ROBERTO CORDEIRO DE ALMEIDA', 'Deferido'), (124, 6, 'ALEXANDRE ORNELAS DE ALMEIDA', 'Indeferido'), (125, 1, 'VERA LUCIA MORELLI DE ARAUJO', 'Deferido'), (126, 2, 'ERIVALDO FRANCISCO MARTINS DA SILVA', 'Indeferido'), (127, 1, 'REGINA MARIA ABREU DA CONCEIÇÃO', 'Indeferido'), (128, 2, 'HEITOR VINICIUS PINHEIRO DOS SANTOS VILLELA', 'Deferido'), (129, 6, 'ELIZETE GERALDO DOS SANTOS', 'Indeferido'), (130, 6, 'LUCIMAR NOEMIA LEAL DA SILVA', 'Deferido'), (131, 1, 'MARIA SILVA DE SOUZA', 'Indeferido'), (132, 5, 'MARIA LÚCIA COSTA ALMEIDA', 'Indeferido'), (133, 2, 'ANGELO CARDOSO DO AMARAL', 'Deferido'), (134, 5, 'CIBELE CRISTINA DA SILVA TAKAMATSU', 'Deferido'), (135, 6, 'ALEANDRO FERREIRA DE SOUZA', 'Indeferido'), (136, 4, 'EDSON DO NASCIMENTO', 'Deferido'), (137, 4, 'MARCIA INES CONCEIÇÃO DE OLIVEIRA', 'Deferido'), (138, 1, 'FRANCIELEN BERNARDO DA SILVA', 'Deferido'), (139, 2, 'LUCILENE FERREIRA MEIRA', 'Deferido'), (140, 5, 'FABIANA LINS DA SILVA', 'Deferido'), (141, 3, 'VANDERLI BARBOSA DOS SANTOS AMARAL ', 'Deferido'), (142, 4, 'EDILSON PIRES PEREIRA', 'Deferido'), (143, 4, 'FABIO MOREIRA DOS SANTOS', 'Deferido'), (144, 6, 'JOSE CARLOS DA SILVA', 'Deferido'), (145, 1, 'NELSON DO NASCIMENTO SANTOS', 'Deferido'), (146, 4, 'JOELMA ALVES DE OLIVEIRA', 'Deferido'), (147, 5, 'GISLENE VIANA DA SILVA', 'Deferido'), (148, 4, 'MICHELE DA SILVA LIMA', 'Deferido'), (149, 5, 'VILMA PORTO SILVA', 'Deferido'), (150, 5, 'LEILA MARIA NAPOLI DO AMARAL ', 'Deferido'), (151, 5, 'FATIMA MARIA SANTOS SILVA SOARES', 'Deferido'), (152, 5, 'ITAMI ALVES SIQUEIRA ROCHA', 'Deferido'), (153, 5, 'MARCIA REGINA MENDES MILITÃO', 'Deferido'), (154, 2, 'GERALDO PAULINO DO NASCIMENTO', 'Deferido'), (155, 4, 'JOSE CARLOS MORENO', 'Deferido'), (156, 4, 'MARCELO DE SOUSA SANTOS', 'Deferido'), (157, 5, 'JOSENALDO WILLIAM ARAUJO SANTOS', 'Deferido'), (158, 6, 'SAMUEL OLIVEIRA DA SILVA', 'Indeferido'), (159, 2, 'SIDNEY CICERO CAMARGO', 'Indeferido'), (160, 1, 'PAULO CESAR TRINDADE', 'Deferido'), (161, 4, 'MARCIO AUGUSTO DIAS', 'Deferido'), (162, 4, 'JEUVÁ SUELI PEREIRA DE ANDRADE BARROS', 'Deferido'), (163, 6, 'SANDRA BRAGA DE SOUZA SANTOS', 'Indeferido'), (164, 5, 'WAGNER MAURÍCIO PALERMO', 'Deferido'), (165, 1, 'MARIA AMELIA BARBOSA DUÓ', 'Indeferido'), (166, 3, 'CREUZA MARTINS DE SENA', 'Deferido'), (167, 2, 'MARIA DA CONCEIÇÃO DA SILVA MATOS', 'Deferido'), (168, 1, 'CONCEIÇÃO ALVES DA SILVA', 'Deferido'), (169, 4, 'ROSEMEIRE OLIVEIRA DA SILVA', 'Deferido'), (170, 6, 'KATIANA DIAS SANTANA RIBEIRO', 'Deferido'), (171, 1, 'MARIA APARECIDA DA SILVA', 'Deferido'), (172, 3, 'WALNIR HENRIQUE RODRIGUES', 'Deferido'), (173, 1, 'GISELDA DIAS DE OLIVEIRA', 'Deferido'), (174, 4, 'CARLOS MAGNO DOMINGOS DA SILVA', 'Indeferido'), (175, 4, 'GENIVALDO FELIX DE SOUZA', 'Indeferido'), (176, 4, 'RUBENS CLARO PEREIRA DA SILVA', 'Indeferido'), (177, 1, 'LILIANE SANTOS CARDOSO', 'Deferido'), (178, 3, 'MARCOS LUIZ DA SILVA', 'Deferido'), (179, 3, 'ANTONIO PIRES DA SILVA', 'Indeferido'), (180, 4, 'ANA LUCIA MARIA GOMES', 'Deferido'), (181, 3, 'TELMA PIRES ALVES DOS SANTOS', 'Deferido'), (182, 4, 'DALVANI SILVA SANTOS', 'Deferido'), (183, 2, 'JOSE ROBERTO ALVES', 'Deferido'), (184, 3, 'FATIMA REGINA DA SILVA', 'Indeferido'), (185, 4, 'MARCOS AURELIO DA SILVA', 'Deferido'), (186, 3, 'MICHELE DOMINGUES DE OLIVEIRA', 'Deferido'), (187, 5, 'MARIA APARECIDA SOARES TRINDADE', 'Deferido'), (188, 3, 'JUSSARA DE CASSIA SOARES MACEDO', 'Indeferido'), (189, 3, 'CLEONICE MARIA DE OLIVEIRA', 'Deferido'), (190, 6, 'RENALDO ANTONIO RODRIGUES', 'Deferido'), (191, 2, 'ODETE DE LOURDES RAMOS DA SILVA', 'Deferido'), (192, 4, 'GILVAN ALVES MARTINS', 'Deferido'), (193, 6, 'SANDRA SUELY VIEIRA DA SILVA DUARTE', 'Deferido'), (194, 2, 'SIDNEY MENEZES CURSI', 'Deferido'), (195, 5, 'MARCOS VINICIUS DE OLIVEIRA CAMPOS', 'Indeferido'), (196, 2, 'DAYANE FARIAS SILVA', 'Deferido'), (197, 6, 'ROGERIO APARECIDO DOS SANTOS', 'Deferido'), (198, 1, 'CLEUSA BERNARDO DA SILVA', 'Deferido'), (199, 1, 'MARTHA ALMEIDA SANTANA', 'Deferido'), (200, 6, 'EDINA FERREIRA LIMA COSTA', 'Deferido'), (201, 4, 'DEBORA MARTINS FELIX DA SILVA', 'Indeferido'), (202, 3, 'MARCOS VINICIUS PERINETTI', 'Deferido'), (203, 3, 'SAMUEL JOSE RAMOS', 'Deferido'), (204, 3, 'ANA PAULA FREITAS SANTANA', 'Deferido'), (205, 3, 'BENEDITO APARECIDO DE SOUZA', 'Indeferido'), (206, 4, 'IGOR ANDRÉ RIBEIRO SANTANA', 'Deferido'), (207, 2, 'FRANCILEIA CRISTINA DANTAS DA SILVA E SILVA', 'Deferido'), (208, 5, 'ABELARDIA PEREIRA DE ANDRADE', 'Deferido'), (209, 5, 'DÁRIO DOS SANTOS', 'Deferido'), (210, 5, 'JECILENE MONTEIRO', 'Deferido'), (211, 5, 'JOAQUINA DONIZETTI NUNES', 'Deferido'), (212, 5, 'IVANILDO SOARES BEZERRA', 'Deferido'), (213, 1, 'LUCAS DE OLIVEIRA', 'Deferido'), (214, 3, 'JANLEIDE FERNANDES DOS SANTOS', 'Deferido'), (215, 2, 'VERONICA RAFAEL DE SENA CARVALHO', 'Deferido'), (216, 2, 'NADIA SILVA BARBOZA', 'Deferido'), (217, 2, 'VALQUÍRIA APARECIDA JULIO', 'Deferido'), (218, 1, 'ALCILEIA MACHADO', 'Deferido'), (219, 2, 'SILVANETE DE OLIVEIRA ', 'Deferido'), (220, 3, 'LUCIANA REGINA DIAS', 'Deferido');

-- users seed
INSERT INTO `users` (`login`, `password`, `admin`) VALUES ('admin@teste.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');
