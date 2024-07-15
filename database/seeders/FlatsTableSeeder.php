<?php

namespace Database\Seeders;

use App\Models\Flat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flats = [
            [
                "title" => "GRAN MADRE Suite elegante con terrazzo",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Piazza Gran Madre di Dio, 10131 Torino TO, Italy",
                "latitude" => 45.066365,
                "longitude" => 7.693069,
                "main_img" => "flats_img/thumbnail_GRAN_MADRE_Suite_elegante_con_terrazzo.webp",
                "visible" => true,
                "description" => "Elegante suite con terrazzo, situata vicino alla storica Gran Madre."
            ],
            [
                "title" => "Elegante appartamento con terrazzino vista MOLE",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 75,
                "address" => "Via Montebello, 10124 Torino TO, Italy",
                "latitude" => 45.069167,
                "longitude" => 7.692576,
                "main_img" => "flats_img/thumbnail_Elegante_appartamento_con_terrazzino_vista_MOLE.webp",
                "visible" => true,
                "description" => "Appartamento elegante con terrazzino, splendida vista sulla Mole Antonelliana."
            ],
            [
                "title" => "Dimora Novecento",
                "max_guests" => 5,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 110,
                "address" => "Via Po, 10123 Torino TO, Italy",
                "latitude" => 45.068267,
                "longitude" => 7.686856,
                "main_img" => "flats_img/thumbnail_Dimora_Novecento.webp",
                "visible" => true,
                "description" => "Dimora storica con interni moderni, situata nel cuore di Torino."
            ],
            [
                "title" => "Attico Torino Centro con Terrazzo Vista Mole",
                "max_guests" => 6,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 95,
                "address" => "Piazza Vittorio Veneto, 10124 Torino TO, Italy",
                "latitude" => 45.068536,
                "longitude" => 7.692927,
                "main_img" => "flats_img/thumbnail_Attico_Torino_Centro_con_Terrazzo_Vista_Mole.webp",
                "visible" => true,
                "description" => "Attico esclusivo con terrazzo, vista mozzafiato sulla Mole Antonelliana."
            ],
            [
                "title" => "Appartamento Luxury con balcone",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 85,
                "address" => "Via Roma, 10121 Torino TO, Italy",
                "latitude" => 45.067755,
                "longitude" => 7.682489,
                "main_img" => "flats_img/thumbnail_Appartamento_Luxury_con_balcone.webp",
                "visible" => true,
                "description" => "Appartamento di lusso con balcone, situato nella centralissima Via Roma."
            ],

            [
                "title" => "Atlana",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Calle Larga XXII Marzo, 2091, 30124 Venezia VE, Italy",
                "latitude" => 45.4338,
                "longitude" => 12.3346,
                "main_img" => "flats_img/thumbnail_Atlana.webp",
                "visible" => true,
                "description" => "Elegante appartamento moderno nel cuore di Venezia, perfetto per famiglie o gruppi di amici."
            ],
            [
                "title" => "Ca Bella Vista",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 110,
                "address" => "Fondamenta delle Zattere, 1401, 30123 Venezia VE, Italy",
                "latitude" => 45.4266,
                "longitude" => 12.3247,
                "main_img" => "flats_img/thumbnail_Ca_Bella_Vista.webp",
                "visible" => true,
                "description" => "Appartamento spazioso con vista mozzafiato sui canali, ideale per un soggiorno di lusso a Venezia."
            ],
            [
                "title" => "Ca Rolina",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Strada Nova, 4367, 30121 Venezia VE, Italy",
                "latitude" => 45.4431,
                "longitude" => 12.3266,
                "main_img" => "flats_img/thumbnail_Ca_Rolina.jpg",
                "visible" => true,
                "description" => "Accogliente appartamento nel vivace quartiere di Cannaregio, perfetto per una coppia o una piccola famiglia."
            ],
            [
                "title" => "Canal Dream",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 90,
                "address" => "Riva degli Schiavoni, 4187, 30122 Venezia VE, Italy",
                "latitude" => 45.4343,
                "longitude" => 12.3430,
                "main_img" => "flats_img/thumbnail_Canal_Dream.webp",
                "visible" => true,
                "description" => "Appartamento con una vista panoramica sulla laguna, ideale per un soggiorno rilassante e romantico."
            ],
            [
                "title" => "Tintoretto",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Calle della Mandola, 3755, 30124 Venezia VE, Italy",
                "latitude" => 45.4366,
                "longitude" => 12.3351,
                "main_img" => "flats_img/thumbnail_Tintoretto.webp",
                "visible" => true,
                "description" => "Elegante appartamento per due nel cuore di San Marco, ideale per una fuga romantica a Venezia."
            ],

            [
                "title" => "Cottage",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 75,
                "address" => "Via del Corso, 1, 50122 Firenze FI, Italy",
                "latitude" => 43.7705,
                "longitude" => 11.2569,
                "main_img" => "flats_img/thumbnail_Cottage.webp",
                "visible" => true,
                "description" => "Accogliente cottage situato nel cuore di Firenze, perfetto per famiglie che vogliono esplorare la città."
            ],
            [
                "title" => "Dame di Toscana",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 100,
                "address" => "Via de' Benci, 10, 50122 Firenze FI, Italy",
                "latitude" => 43.7687,
                "longitude" => 11.2610,
                "main_img" => "flats_img/thumbnail_Dame_di_Toscana.webp",
                "visible" => true,
                "description" => "Elegante appartamento nel vivace quartiere di Santa Croce, ideale per gruppi e famiglie."
            ],
            [
                "title" => "Farmer House",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via Maggio, 13, 50125 Firenze FI, Italy",
                "latitude" => 43.7667,
                "longitude" => 11.2497,
                "main_img" => "flats_img/thumbnail_Farmer_House.webp",
                "visible" => true,
                "description" => "Rustico e accogliente appartamento nel quartiere di Oltrarno, perfetto per una coppia o una piccola famiglia."
            ],
            [
                "title" => "Ottavino",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Borgo San Jacopo, 2, 50125 Firenze FI, Italy",
                "latitude" => 43.7679,
                "longitude" => 11.2522,
                "main_img" => "flats_img/thumbnail_Ottavino.webp",
                "visible" => true,
                "description" => "Appartamento moderno vicino al Ponte Vecchio, perfetto per famiglie o gruppi di amici."
            ],
            [
                "title" => "Storico in Villa",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 60,
                "address" => "Via de' Ginori, 8, 50123 Firenze FI, Italy",
                "latitude" => 43.7763,
                "longitude" => 11.2559,
                "main_img" => "flats_img/thumbnail_Storico_in_Villa.webp",
                "visible" => true,
                "description" => "Elegante appartamento storico nel quartiere di San Lorenzo, ideale per una fuga romantica."
            ],

            [
                "title" => "Domus Monamì Luxury Suites",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 80,
                "address" => "Via Giulia, 93, 00186 Roma RM",
                "latitude" => 41.8964,
                "longitude" => 12.4686,
                "main_img" => "flats_img/thumbnail_DomusMonamiLuxurySuites.jpg",
                "visible" => true,
                "description" => "Splendida suite di lusso nel cuore di Roma, a due passi da Piazza Navona e il Pantheon. Ideale per soggiorni indimenticabili."
            ],
            [
                "title" => "Colosseum Home",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Via di San Giovanni in Laterano, 10, 00184 Roma RM",
                "latitude" => 41.8899,
                "longitude" => 12.4989,
                "main_img" => "flats_img/thumbnail_ColosseumHome.jpg",
                "visible" => true,
                "description" => "Appartamento spazioso e moderno, a pochi passi dal Colosseo. Perfetto per famiglie o gruppi di amici."
            ],
            [
                "title" => "Catapecchia House",
                "max_guests" => 2,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 50,
                "address" => "Via del Corso, 500, 00186 Roma RM",
                "latitude" => 41.9015,
                "longitude" => 12.4812,
                "main_img" => "flats_img/thumbnail_CatapecchiaHouse.webp",
                "visible" => true,
                "description" => "Accogliente appartamento nel centro di Roma, ideale per una coppia in cerca di una vacanza romantica."
            ],
            [
                "title" => "Campo di Marte",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Piazza del Popolo, 1, 00187 Roma RM",
                "latitude" => 41.9102,
                "longitude" => 12.4768,
                "main_img" => "flats_img/thumbnail_CampoDiMarte.jpg",
                "visible" => true,
                "description" => "Appartamento moderno e ben arredato, situato a pochi passi da Piazza del Popolo e Villa Borghese."
            ],
            [
                "title" => "All Comfort Nomentano",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 75,
                "address" => "Via Nomentana, 203, 00161 Roma RM",
                "latitude" => 41.9108,
                "longitude" => 12.5124,
                "main_img" => "flats_img/thumbnail_AllComfortNomentano.jpg",
                "visible" => true,
                "description" => "Confortevole appartamento vicino alla stazione Termini, con facile accesso ai principali siti turistici di Roma."
            ],

            [
                "title" => "Vesuvio Retreat",
                "max_guests" => 4,
                "rooms" => 2,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 65,
                "address" => "Via Toledo, 100, 80132 Napoli NA",
                "latitude" => 40.8375,
                "longitude" => 14.2499,
                "main_img" => "flats_img/thumbnail_VesuvioRetreat.jpg",
                "visible" => true,
                "description" => "Incantevole appartamento nel cuore di Napoli, a pochi passi da Via Toledo. Perfetto per esplorare la città e gustare la cucina locale."
            ],
            [
                "title" => "Charming Napoli",
                "max_guests" => 3,
                "rooms" => 2,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 50,
                "address" => "Piazza del Plebiscito, 1, 80132 Napoli NA",
                "latitude" => 40.8351,
                "longitude" => 14.2465,
                "main_img" => "flats_img/thumbnail_CharmingNapoli.jpg",
                "visible" => true,
                "description" => "Accogliente appartamento con vista sulla storica Piazza del Plebiscito, ideale per coppie in cerca di romanticismo e avventura."
            ],
            [
                "title" => "Napoli Elegante",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 85,
                "address" => "Via Chiaia, 50, 80121 Napoli NA",
                "latitude" => 40.8392,
                "longitude" => 14.2513,
                "main_img" => "flats_img/thumbnail_NapoliElegante.jpg",
                "visible" => true,
                "description" => "Spazioso appartamento elegante nel centro di Napoli, perfetto per famiglie o gruppi. A pochi passi da negozi e ristoranti."
            ],
            [
                "title" => "Vista Mare",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 90,
                "address" => "Lungomare Caracciolo, 100, 80122 Napoli NA",
                "latitude" => 40.8355,
                "longitude" => 14.2545,
                "main_img" => "flats_img/thumbnail_VistaMare.jpg",
                "visible" => true,
                "description" => "Appartamento con vista sul mare, ideale per famiglie e gruppi. A pochi passi da ristoranti e attrazioni turistiche."
            ],
            [
                "title" => "Città Antica",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Via San Gregorio Armeno, 30, 80138 Napoli NA",
                "latitude" => 40.8518,
                "longitude" => 14.2660,
                "main_img" => "flats_img/thumbnail_CittaAntica.jpg",
                "visible" => true,
                "description" => "Piccolo ma affascinante appartamento nel centro storico di Napoli, perfetto per una fuga romantica. Vicino a chiese e mercatini."
            ],

            [
                "title" => "PaPa's home",
                "max_guests" => 4,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 70,
                "address" => "Via Sparano, 12, 70121 Bari BA",
                "latitude" => 41.1265,
                "longitude" => 16.8692,
                "main_img" => "flats_img/thumbnail_PaPasHome.webp",
                "visible" => true,
                "description" => "Accogliente appartamento nel cuore di Bari, a pochi passi da negozi e ristoranti. Perfetto per famiglie e gruppi di amici."
            ],
            [
                "title" => "Little Suite Picca",
                "max_guests" => 2,
                "rooms" => 1,
                "beds" => 1,
                "bathrooms" => 1,
                "meters_square" => 40,
                "address" => "Piazza del Ferrarese, 2, 70121 Bari BA",
                "latitude" => 41.1273,
                "longitude" => 16.8664,
                "main_img" => "flats_img/thumbnail_LittleSuitePicca.webp",
                "visible" => true,
                "description" => "Piccola suite elegante situata in una posizione centrale. Ideale per coppie in cerca di una fuga romantica nella storica Bari."
            ],
            [
                "title" => "Liberty Suite",
                "max_guests" => 6,
                "rooms" => 4,
                "beds" => 2,
                "bathrooms" => 2,
                "meters_square" => 90,
                "address" => "Via Giuseppe Mazzini, 30, 70121 Bari BA",
                "latitude" => 41.1290,
                "longitude" => 16.8736,
                "main_img" => "flats_img/thumbnail_LibertySuite.webp",
                "visible" => true,
                "description" => "Ampia suite in stile liberty, perfetta per famiglie o gruppi. Situata vicino alle principali attrazioni turistiche di Bari."
            ],
            [
                "title" => "Casa indipendente per vacanze",
                "max_guests" => 5,
                "rooms" => 3,
                "beds" => 2,
                "bathrooms" => 1,
                "meters_square" => 80,
                "address" => "Via Aurelio Saffi, 10, 70124 Bari BA",
                "latitude" => 41.1381,
                "longitude" => 16.8970,
                "main_img" => "flats_img/thumbnail_CasaIndipendenteVacanze.webp",
                "visible" => true,
                "description" => "Spaziosa casa indipendente, ideale per vacanze in famiglia. A pochi minuti dalla spiaggia e dai ristoranti tipici di Bari."
            ],

        ];

        foreach ($flats as $flat) {
            $newFlat = new Flat();
            $newFlat->fill($flat);
            $newFlat->save();
        };
    }
}
