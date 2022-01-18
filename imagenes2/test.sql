INSERT INTO species (sp_CientificName,sp_vulgarName,ge_id,ha_id, img_id)
INSERT INTO `species`(`sp_vulgarName`, `sp_CientificName`, `img_name`, `ha_id`, `ge_id`)
VALUES
 /*   ("Milano Plomizo","Ictinia plumbea","Ictinia plumbea",9,45),
    ("Milano de Mississippi","Ictinia mississippiensis","Ictinia mississippiensis.jpg",9,45),
    ("Gavilán Bicolor","Accipiter bicolor","Accipiter bicolor,jpg",4,46),
    ("Gavilán Zancón","Geranospiza caerulescens","Geranospiza caerulescens.jfif",4,47),
    ("Aguililla Negra Menor","Buteogallus anthracinus","Buteogallus anthracinus.jpg",3,48),
    ("Aguililla Negra Mayor","Buteogallus urubitinga","Buteogallus urubitinga.jpg",9,48),
    ("Gavilán Cangrejero Colorado","Buteogallus meridionalis", "Buteogallus meridionalis.jpg",4,48),
    ("Aguililla Canela""Busarellus nigricollis","Busarellus nigricollis.jpg",3,49),
    ("Gavilán Pollero","Rupornis magnirostris","Rupornis magnirostris.jpg",4,50),
    ("Águila Rabiblanca","Parabuteo unicinctus","Parabuteo unicinctus.jpg",12,51,),


    ("Águila coliblanca","Geranoaetus albicaudatus","Geranoaetus albicaudatus.jpg",4,52 ),
    ("Aguililla Gris Meridional","Asturina nitida","Asturina nitida.jpg",9,53 ),
    ("Águila Migratoria","Buteo platypterus","Buteo platypterus.jfif",9,227 ),
    ("Águila rabicorta","Buteo brachyurus","Buteo brachyurus.jpg",9, 227),
    ("Águila gallinaza","Buteo albonotatus", "Buteo albonotatus.jpg",9,277),
    ("Guaraguaco Común","Caracara cheriway", "Caracara cheriway.jpg",6,54),
    ("Pigua","Milvago chimachima","Milvago chimachima.JPG",4, 55),
    ("Halcón Culebrero","Herpetotheres cachinnans","Herpetotheres cachinnans.jfif",4,56),
    ("Halcón Collarejo","Micrastur semitorquatus", "Micrastur semitorquatus.jpg",3,57),
    ("Esmerejón","Falco columbarius",6,58, "Falco columbarius.jpg"),
    ("Halcón Murcielaguero","Falco rufigularis", "Falco rufigularis.jfif",9,58),
    ("Halcón Plomizo","Falco femoralis", "Falco femoralis.jpg",6,58),
    ("Halcón Peregrino","Falco perigrinus","Falco perigrinus.jpg",6,58 ),

    
    ("Carrao","Aramus guarauna","Aramus guarauna.jpg",3, 59),
    ("Chilacoa Colinegra","Aramides cajanea","Aramides cajanea.jpg",3,60 ),
    ("Laterallus exilis","Laterallus exilis", "Laterallus exilis.jpg",6,61),
    ("Polluela de Antifaz","Porzana flaviventer", "Porzana flaviventer.jpg",11,62),
    ("Polluela Cienaguera","Porzana albicollis", "Porzana albicollis.jpg",6,62),
    ("Polluela Migratoria","Porzana carolina", "Porzana carolina.jpg",12,62),
    ("gallineta común","Gallinula chloropus","Gallinula chloropus.jpg",5, 63),
    ("Polla Azul","Porphyrio martinica", "Porphyrio martinica.jpg",5,64),



    ("focha americana","Fulica americana", "Fulica americana.jpg",5,228),
    ("Pellar Común","Vanellus chilensis", "Vanellus chilensis.jpg",11,65),
    ("Chorlo Pechinegro","Pluvialis squatarola", "Pluvialis squatarola.jpg",3,66),
    ("Chorlito Semipalmeado","Charadrius semipalmatus", "Charadrius semipalmatus.jpg",6,67),
    ("Chorlito Piquigrueso","Charadrius wilsonius", "Charadrius wilsonius-jpg",3,67),
    ("Chorlitejo Patinegro","Charadrius alexandrinus","Charadrius alexandrinus.jfif",2,67),
    ("Chorlito Collarejo","Charadrius collaris","Charadrius collaris.jpg",1, 67),
    ("Ostrero","Haematopus palliatus", "Haematopus palliatus.jpg",2,68),
    ("Cigueñuela","Himantopus mexicanus", "Cigueñuela (Himantopus mexicanus)_Ron Wolf.jpg" ,11,69),
    ("avoceta americana","Recurvirostra americana", "Recurvirostra americana.jpg",11,229),
    ("Alcaraván","Burhinus bistriatus", "Burhinus bistriatus.jpg",6,70),
    


    ("Caica Común","Gallinago delicata","Caica Común (Gallinago delicata)_Gregory Smith.jpg",5,71),
    ("Becasina Piquicorta","Limnodromus griseus", "Becasina Piquicorta (Limnodromus griseus)_Cleber Ferreira.jpg",11,230),
    ("Becasina Piquilarga","Limnodromus scolopaceus", "Limnodromus scolopaceus B.jpg",11,230),
    ("ZARAPITO COMÚN","Numenius phaeopus","Whimbrel_Numenius_phaeopus.jpg",2, 72),
    
    
    ("Andarríos Mayor","Tringa melanoleuca", "Andarrios MAyor (Tringa melanoleuca)_JRon Wolf.jpg",11,75),
    ("Patamarilla Menor","Tringa flavipes", "512px-Tringa-flavipes-001.jpg",11,75),
    ("Andarríos Solitario","Tringa solitaria", "Andarríos Solitario (Tringa solitaria)_Felix Uribe 1.jpg",11,75),
    ("Playero Aliblanco","Tringa semipalmata", "Playero Aliblanco (Tringa semipalmata)_Gregory Lis.jpg",11,75),
    ("Vuelvepiedras","Arenaria interpres", "Vuelvepiedras (Arenaria interpres)_Nick Dean.jpg",11,76),
    ("Correlimos Colorado","Calidris canutus", "Calidris_canutus_(summer).jpg",2,77),
    ("Correlimos Blanco","Calidris alba", "Calidris alba (Correlimos diminuto) FP (1).jpg",2,77),

    ("correlimos de Alaska","Calidris mauri","Calidris mauri.jpg",2, 77),
    ("Correlimos Diminuto","Calidris minutilla","Correlimos Diminuto (Calidris minutilla)_Lip Kee.jpg",2, 77),
    ("Correlimos Rabiblanco","Calidris fuscicollis", "Correlimos Rabiblanco (Calidris fuscicollis)_Paul Jones.jpg",2,77),
    ("correlimos zarapitín","Calidris ferruginea", "250px-Calidris_ferruginea_(Marek_Szczepanek).jpg",2,77),
    ("Gallito de Ciénaga","Jacana jacana", "Gallito de Ciénaga (Jacana jacana)_Laura Bertola.jpg",6,78),
    ("Gaviota Reidora","Leucophaeus atricilla", "Gaviota Reidora (Leucophaeus atricilla)_Steve Covey.jpg",2,79),

*/
    ("Phaetusa simplex","Gaviotín Picudo",81,2, "Gaviotín Picudo (Phaetusa simplex)_Christian Nunes.jpg"),
    ("Gelochelidon nilotica","Gaviotín Blanco",82,11, "Gaviotín Blanco (Gelochelidon nilotica)_Vitalii Khustochka.jpg"),
    ("Hydroprogne caspia","pagaza piconegra",83,2, "Gaviotín Piquirrojo (Hydroprogne caspia)_ Mike Bush.jpg"),
    ("Chlidonias niger","Gaviotín Negro",84,2, "Gaviotín Negro (Chlidonias niger)_Ryan Shaw 1.jpg"),
    ("Sterna hirundo","Gaviotín Común",85,2, "Gaviotín Común (Sterna hirundo)_Laval Roy.jpg"),
    ("Thalasseus sandvicensis","Gaviotín Patinegro",86,2, "Gaviotín Patinegro (Thalasseus sandvicensis)_JMC Nature Photos.jpg"),
    ("Thalasseus maximus","Gaviotín Real",86,2, "Gaviotín Real (Thalasseus maximus)_Claudio Dias Timm.jpg"),
    ("Rynchops nigra","Rayador",87,12, "220px-Black_skimmer_(Rynchops_niger)_in_flight.jpg"),
    ("Columbina passerina","Tortolita Pechiescamada",88,7, "Tortolita Pechiescamada (Columbina passerina)_ Carlos Escamilla.jpg"),
    ("Columbina minuta","Tortolita Diminuta",88,7, "Tortolita Diminuta (Columbina minuta)_Francisco Falcon.jpg"),
    ("Columbina talpacoti","Tortolita Común",88,7, "Tortolita Común (Columbina talpacoti) fp.jpg"),
    ("Columbina squammata","Tortolita Colilarga",88,7, "Tortolita Colilarga (Columbina squammata) fp.jpg"),
    ("Claravis pretiosa","Tortolita Azul",89,4, "Tortolita Azul (Claravis pretiosa)_Sigmundur Asgeirson.jpg"),
    ("Patagioenas corensis","Torcaza Cardonera",90,7, "Torcaza Cardonera (Patagioenas corensis)_Nigel Voaden.jpg"),
    ("Patagioenas cayennensis","Torcaza Morada",90,4, "Torcaza Morada (Patagioenas cayennensis)_Luis Vargas Duran.jpg"),
    
    ("Zenaida auriculata","Torcaza Naguiblanca",91,7, "Torcaza Nagüiblanca (Zenaida auriculata) fp1.jpg"),
    ("Leptotila verreauxi","Leptotila verreauxi",92,4, "Caminera Rabiblanca (Leptotila verreauxi)_Pablo Alejandro Pla.jpg"),
    ("Ara ararauna", "guacamayo azulamarillo",232,9, "Guacamaya Azul y Amarillo (Ara ararauna)_Joao Quental.jpg"),
    ("Ara macao", "guacamayo rojo",232,9, "Guacamaya Bandera (Ara macao)_Punkbirdr.jpg"),
    ("Ara chloroptera", "guacamayo aliverde",232,9, "Ara chloroptera.jpg"),
    ("Forpus passerinus", " periquito",233,9, "Periquito Coliverde (Forpus passerinus)_barloventomagico 1.jpg"),
    ("Forpus xanthopterygius", "cotorrita aliazul",233,9, "250px-Forpus_xanthopterygius_-Brazil-6-4c.jpg"),
    ("Forpus conspicillatus", "periquito de anteojos"233,9, "Forpus conspicillatus.JPG"),
    ("Brotogeris jugularis", "Periquito Bronceado",93,4, "Periquito Bronceado (Brotogeris jugularis)_Chris Jimenez.jpg"),
    ("Pionus menstruus", "Cotorra Cheja",94,9, "Cotorra Cheja (Pionus menstruus)_Francesco Veronesi.jpg"),
    ("Amazona autumnalis", "loro cariamarillo",95,9, "200px-Amazona_autumnalis_-Jurong_BirdPark-8b.jpg"),
    ("Amazona ochrocephal", "Lora Común",95,9, "Lora Común (Amazona ochrocephala)_ barloventomagico.jpg"),
    ("Amazona amazonica", "loro guaro",95,9, "Lora Cariamarilla (Amazona amazonica)_Punkbirdr.jpg"),

    ("Coccyzus americanus", "Cuclillo Migratorio",96,6, "Cuclillo Migratorio (Coccyzus americanus) fp.jpg"),
    ("Coccyzus melacoryphus", "cuco de pico oscuro",96,6, "Cuclillo de Antifaz (Coccyzus melacoryphus)_Mariza Sanches.jpg"),
    ("Coccyzus lansbergi", "Cuclillo Canelo",96,6, "Cuclillo Canelo (Coccyzus lansbergi)_Juan D. Ramirez Rpo 1.jpg"),
    ("Piaya cayana", "cuco ardilla",97,4, "Cuco Ardilla (Piaya cayana)_claudio.marcio 2.jpg"),
    ("Crotophaga major", "garrapatero mayor",98,7. "Garrapatero Mayor (Crotophaga major )_Stephen Davies.jpg"),
    ("Crotophaga ani", "Garrapatero Común",98,7, "Garrapatero Común (Crotophaga ani)_Aristene Nicodemo.jpg"),
    ("Crotophaga sulcirostri", "garrapatero asurcado",98,7, "Garrapatero Ciriguelo (Crotophaga sulcirostris)_Bernard DUPONT.jpg"),
    ("Tapera naevia", "cuclillo listado",99,7, "Tres Pies (Tapera naevia)_Dario Sanches.jpg"),
    ("Tyto alba", "lechuza de los campanarios",100,4, "Tyto_alba_close_up.jpg"),

    ("Pulsatrix perspicillata", "Búho de Anteojos",102,4, "Búho de Anteojos (Pulsatrix perspicillata)_bathyporeia.jpg"),
    ("Bubo virginianus", "Búho Real",103,3, "Búho Real (Bubo virginianus)_Brendan Lally.jpg"),
    ("Glaucidium brasilianum", "Buhíto Ferrugineo",104,4, "Buhíto Ferrugíneo (Glaucidium brasilianum)_Tom Benson.jpg"),
    


/*tiran errores*/
    	("Águila rabicorta","Buteo brachyurus","Buteo brachyurus.jpg",9, 227),
    ("Águila gallinaza","Buteo albonotatus", "Buteo albonotatus.jpg",9,277),
    ("Guaraguaco Común","Caracara cheriway", "Caracara cheriway.jpg",6,54),
    ("Pigua","Milvago chimachima","Milvago chimachima.jpg",4, 55);
