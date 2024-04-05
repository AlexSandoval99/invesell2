<?php

use App\Models\Comuna;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [[
                            "id"=> 1,
                            "region"=> "CONCEPCION"
                          ],
                          [
                            "id"=> 2,
                            "region"=> "SAN PEDRO"
                          ],
                          [
                            "id"=> 3,
                            "region"=> "CORDILLERA"
                          ],
                          [
                            "id"=> 4,
                            "region"=> "GUAIRA"
                          ],
                          [
                            "id"=> 5,
                            "region"=> "CAAGUAZU"
                          ],
                          [
                            "id"=> 6,
                            "region"=> "CAAZAPA"
                          ],
                          [
                            "id"=> 7,
                            "region"=> "ITAPUA"
                          ],
                          [
                            "id"=> 8,
                            "region"=> "MISIONES"
                          ],
                          [
                            "id"=> 9,
                            "region"=> "PARAGUARI"
                          ],
                          [
                            "id"=> 10,
                            "region"=> "ALTO PARANA"
                          ],
                          [
                            "id"=> 11,
                            "region"=> "CENTRAL"
                          ],
                          [
                            "id"=> 12,
                            "region"=> "ÑEEMBUCU"
                          ],
                          [
                            "id"=> 13,
                            "region"=> "AMAMBAY"
                          ],
                          [
                            "id"=> 14,
                            "region"=> "CANINDEYU"
                          ],
                          [
                            "id"=> 15,
                            "region"=> "PRESIDENTE HAYES"
                          ],
                          [
                            "id"=> 16,
                            "region"=> "BOQUERON"
                          ],
                          [
                            "id"=> 17,
                            "region"=> "ALTO PARAGUAY"
                          ],
                          [
                            "id"=> 18,
                            "region"=> "ASUNCION DC"
                          ]];

        $comuna = [[
                    "id"=> 1,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Asunción",
                  ],
                  [
                    "id"=> 2,
                    "regions_id"=> 17,//ALTO PARAGUAY
                    "comuna"=> "Bahía Negra",
                  ],
                  [
                    "id"=> 3,
                    "regions_id"=> 17,//ALTO PARAGUAY
                    "comuna"=> "Carmelo Peralta",
                  ],
                  [
                    "id"=> 4,
                    "regions_id"=> 17,//ALTO PARAGUAY
                    "comuna"=> "Puerto Casado",
                  ],
                  [
                    "id"=> 5,
                    "regions_id"=> 17,//ALTO PARAGUAY
                    "comuna"=> "Fuerte Olimpo",
                  ],
                  [
                    "id"=> 6,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Ciudad del Este",
                  ],
                  [
                    "id"=> 7,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Doctor Juan León Mallorquín",
                  ],
                  [
                    "id"=> 8,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Doctor Raúl Peña",
                  ],
                  [
                    "id"=> 9,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Domingo Martínez de Irala",
                  ],
                  [
                    "id"=> 10,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Hernandarias",
                  ],
                  [
                    "id"=> 11,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Iruña",
                  ],
                  [
                    "id"=> 12,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Itakyry",
                  ],
                  [
                    "id"=> 13,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Juan E. O´Leary",
                  ],
                  [
                    "id"=> 14,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Los Cedrales",
                  ],
                  [
                    "id"=> 15,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Mbaracayú",
                  ],
                  [
                    "id"=> 16,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Minga Guazú",
                  ],
                  [
                    "id"=> 17,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Minga Porá",
                  ],
                  [
                    "id"=> 18,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Naranjal",
                  ],
                  [
                    "id"=> 19,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Ñacunday",
                  ],
                  [
                    "id"=> 20,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Presidente Franco",
                  ],
                  [
                    "id"=> 21,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "San Alberto",
                  ],
                  [
                    "id"=> 22,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "San Cristóbal",
                  ],
                  [
                    "id"=> 23,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Santa Fe del Paraná",
                  ],
                  [
                    "id"=> 24,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Santa Rita",
                  ],
                  [
                    "id"=> 25,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Santa Rosa del Monday",
                  ],
                  [
                    "id"=> 26,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Tavapy",
                  ],
                  [
                    "id"=> 27,
                    "regions_id"=> 10,//ALTO PARANA
                    "comuna"=> "Colonia Yguazú",
                  ],
                  [
                    "id"=> 28,
                    "regions_id"=> 13,//AMAMBAY
                    "comuna"=> "Bella Vista Norte",
                  ],
                  [
                    "id"=> 29,
                    "regions_id"=> 13,//AMAMBAY
                    "comuna"=> "Capitán Bado",
                  ],
                  [
                    "id"=> 30,
                    "regions_id"=> 13,//AMAMBAY
                    "comuna"=> "Pedro Juan Caballero",
                  ],
                  [
                    "id"=> 31,
                    "regions_id"=> 13,//AMAMBAY
                    "comuna"=> "Zanja Pytá",
                  ],
                  [
                    "id"=> 32,
                    "regions_id"=> 13,//AMAMBAY
                    "comuna"=> "Karapaí",
                  ],
                  [
                    "id"=> 33,
                    "regions_id"=> 16,//BOQUERON
                    "comuna"=> "Filadelfia",
                  ],
                  [
                    "id"=> 34,
                    "regions_id"=> 16,//BOQUERON
                    "comuna"=> "Loma Plata",
                  ],
                  [
                    "id"=> 35,
                    "regions_id"=> 16,//BOQUERON
                    "comuna"=> "Mcal. Estigarribia",
                  ],
                  [
                    "id"=> 36,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Caaguazú",
                  ],
                  [
                    "id"=> 37,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Carayaó",
                  ],
                  [
                    "id"=> 38,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Cnel. Oviedo",
                  ],
                  [
                    "id"=> 39,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Doctor Cecilio Báez",
                  ],
                  [
                    "id"=> 40,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Doctor Juan Eulogio Estigarribia - Campo 9",
                  ],
                  [
                    "id"=> 41,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Campo 9",
                  ],
                  [
                    "id"=> 42,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Doctor Juan Manuel Frutos",
                  ],
                  [
                    "id"=> 43,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "José Domingo Ocampos",
                  ],
                  [
                    "id"=> 44,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "La Pastora",
                  ],
                  [
                    "id"=> 45,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Mcal. Francisco S. López",
                  ],
                  [
                    "id"=> 46,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Nueva Londres",
                  ],
                  [
                    "id"=> 47,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Nueva Toledo",
                  ],
                  [
                    "id"=> 48,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Raúl Arsenio Oviedo",
                  ],
                  [
                    "id"=> 49,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Repatriación",
                  ],
                  [
                    "id"=> 50,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "R. I. Tres Corrales",
                  ],
                  [
                    "id"=> 51,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "San Joaquín",
                  ],
                  [
                    "id"=> 52,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "San José de los Arroyos",
                  ],
                  [
                    "id"=> 53,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Mbutuy",
                  ],
                  [
                    "id"=> 54,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Simón Bolívar",
                  ],
                  [
                    "id"=> 55,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Tembiaporá",
                  ],
                  [
                    "id"=> 56,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Tres de Febrero",
                  ],
                  [
                    "id"=> 57,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Vaquería",
                  ],
                  [
                    "id"=> 58,
                    "regions_id"=> 5,//CAAGUAZU
                    "comuna"=> "Yhú",
                  ],
                  [
                    "id"=> 59,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "3 de Mayo",
                  ],
                  [
                    "id"=> 60,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Abaí",
                  ],
                  [
                    "id"=> 61,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Buena Vista",
                  ],
                  [
                    "id"=> 62,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Caazapá",
                  ],
                  [
                    "id"=> 63,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Doctor Moisés S. Bertoni",
                  ],
                  [
                    "id"=> 64,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Fulgencio Yegros",
                  ],
                  [
                    "id"=> 65,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "General Higinio Morínigo",
                  ],
                  [
                    "id"=> 66,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Maciel",
                  ],
                  [
                    "id"=> 67,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "San Juan Nepomuceno",
                  ],
                  [
                    "id"=> 68,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Tavaí",
                  ],
                  [
                    "id"=> 69,
                    "regions_id"=> 6,//CAAZAPA
                    "comuna"=> "Yuty",
                  ],
                  [
                    "id"=> 71,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Corpus Christi",
                  ],
                  [
                    "id"=> 72,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Curuguaty",
                  ],
                  [
                    "id"=> 73,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Gral. Francisco Caballero Álvarez",
                  ],
                  [
                    "id"=> 74,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Itanará",
                  ],
                  [
                    "id"=> 75,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Katueté",
                  ],
                  [
                    "id"=> 76,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "La Paloma",
                  ],
                  [
                    "id"=> 77,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Maracaná",
                  ],
                  [
                    "id"=> 78,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Nueva Esperanza",
                  ],
                  [
                    "id"=> 79,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Salto del Guairá",
                  ],
                  [
                    "id"=> 80,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Villa Ygatimí",
                  ],
                  [
                    "id"=> 81,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Yasy Cañy",
                  ],
                  [
                    "id"=> 82,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Ybyrarovaná",
                  ],
                  [
                    "id"=> 83,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Ypejhú",
                  ],
                  [
                    "id"=> 84,
                    "regions_id"=> 14,//CANINDEYU
                    "comuna"=> "Yby Pytá",
                  ],
                  [
                    "id"=> 85,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Areguá",
                  ],
                  [
                    "id"=> 86,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Capiatá",
                  ],
                  [
                    "id"=> 87,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Fernando de la Mora",
                  ],
                  [
                    "id"=> 88,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Guarambaré",
                  ],
                  [
                    "id"=> 89,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Itá",
                  ],
                  [
                    "id"=> 90,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Itauguá",
                  ],
                  [
                    "id"=> 91,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "J. Augusto Saldivar",
                  ],
                  [
                    "id"=> 92,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Lambaré",
                  ],
                  [
                    "id"=> 93,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Limpio",
                  ],
                  [
                    "id"=> 94,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Luque",
                  ],
                  [
                    "id"=> 95,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Mariano Roque Alonso",
                  ],
                  [
                    "id"=> 96,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Ñemby",
                  ],
                  [
                    "id"=> 97,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Nueva Italia",
                  ],
                  [
                    "id"=> 98,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "San Antonio",
                  ],
                  [
                    "id"=> 99,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "San Lorenzo",
                  ],
                  [
                    "id"=> 100,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Villa Elisa",
                  ],
                  [
                    "id"=> 101,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Villeta",
                  ],
                  [
                    "id"=> 102,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Ypacaraí",
                  ],
                  [
                    "id"=> 103,
                    "regions_id"=> 11,//CENTRAL
                    "comuna"=> "Ypané",
                  ],
                  [
                    "id"=> 104,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Arroyito",
                  ],
                  [
                    "id"=> 105,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Azotey",
                  ],
                  [
                    "id"=> 106,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Belén",
                  ],
                  [
                    "id"=> 107,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Concepción",
                  ],
                  [
                    "id"=> 108,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Horqueta",
                  ],
                  [
                    "id"=> 109,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Loreto",
                  ],
                  [
                    "id"=> 110,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "San Carlos del Apa",
                  ],
                  [
                    "id"=> 111,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "San Lázaro",
                  ],
                  [
                    "id"=> 112,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Yby Yaú",
                  ],
                  [
                    "id"=> 113,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Sargento José Félix López",
                  ],
                  [
                    "id"=> 114,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "San Alfredo",
                  ],
                  [
                    "id"=> 115,
                    "regions_id"=> 1,//CONCEPCION
                    "comuna"=> "Paso Barreto",
                  ],
                  [
                    "id"=> 116,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Altos",
                  ],
                  [
                    "id"=> 117,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Arroyos y Esteros",
                  ],
                  [
                    "id"=> 118,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Atyrá",
                  ],
                  [
                    "id"=> 119,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Caacupé",
                  ],
                  [
                    "id"=> 120,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Caraguatay",
                  ],
                  [
                    "id"=> 121,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Emboscada",
                  ],
                  [
                    "id"=> 122,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Eusebio Ayala",
                  ],
                  [
                    "id"=> 123,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Isla Pucú",
                  ],
                  [
                    "id"=> 124,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Itacurubí de la Cordillera",
                  ],
                  [
                    "id"=> 125,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Juan de Mena",
                  ],
                  [
                    "id"=> 126,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Loma Grande",
                  ],
                  [
                    "id"=> 127,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Mbocayaty del Yhaguy",
                  ],
                  [
                    "id"=> 128,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Nueva Colombia",
                  ],
                  [
                    "id"=> 129,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Piribebuy",
                  ],
                  [
                    "id"=> 130,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Primero de Marzo",
                  ],
                  [
                    "id"=> 131,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "San Bernardino",
                  ],
                  [
                    "id"=> 132,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "San José Obrero",
                  ],
                  [
                    "id"=> 133,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Santa Elena",
                  ],
                  [
                    "id"=> 134,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Tobatí",
                  ],
                  [
                    "id"=> 135,
                    "regions_id"=> 3,//COORDILLERA
                    "comuna"=> "Valenzuela",
                  ],
                  [
                    "id"=> 136,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Borja",
                  ],
                  [
                    "id"=> 137,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Colonia Independencia",
                  ],
                  [
                    "id"=> 138,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Coronel Martínez",
                  ],
                  [
                    "id"=> 139,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Dr. Bottrell",
                  ],
                  [
                    "id"=> 140,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Fassardi",
                  ],
                  [
                    "id"=> 141,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Félix Pérez Cardozo",
                  ],
                  [
                    "id"=> 142,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Garay",
                  ],
                  [
                    "id"=> 143,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Itapé",
                  ],
                  [
                    "id"=> 144,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Iturbe",
                  ],
                  [
                    "id"=> 145,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Mbocayaty",
                  ],
                  [
                    "id"=> 146,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Natalicio Talavera",
                  ],
                  [
                    "id"=> 147,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Ñumí",
                  ],
                  [
                    "id"=> 148,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Paso Yobái",
                  ],
                  [
                    "id"=> 149,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "San Salvador",
                  ],
                  [
                    "id"=> 150,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Tebicuary",
                  ],
                  [
                    "id"=> 151,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Troche",
                  ],
                  [
                    "id"=> 152,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Villarrica",
                  ],
                  [
                    "id"=> 153,
                    "regions_id"=> 4,//GUAIRA
                    "comuna"=> "Yataity",
                  ],
                  [
                    "id"=> 154,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Alto Verá",
                  ],
                  [
                    "id"=> 155,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Bella Vista",
                  ],
                  [
                    "id"=> 156,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Cambyretá",
                  ],
                  [
                    "id"=> 157,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Capitán Meza",
                  ],
                  [
                    "id"=> 158,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Capitán Miranda",
                  ],
                  [
                    "id"=> 159,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Carlos Antonio López",
                  ],
                  [
                    "id"=> 160,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Carmen del Paraná",
                  ],
                  [
                    "id"=> 161,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Coronel Bogado",
                  ],
                  [
                    "id"=> 162,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Edelira",
                  ],
                  [
                    "id"=> 163,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Encarnación",
                  ],
                  [
                    "id"=> 164,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Fram",
                  ],
                  [
                    "id"=> 165,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "General Artigas",
                  ],
                  [
                    "id"=> 166,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "General Delgado",
                  ],
                  [
                    "id"=> 167,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Hohenau",
                  ],
                  [
                    "id"=> 168,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Itapúa Poty",
                  ],
                  [
                    "id"=> 169,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Jesús",
                  ],
                  [
                    "id"=> 170,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Colonia La Paz",
                  ],
                  [
                    "id"=> 171,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "José Leandro Oviedo",
                  ],
                  [
                    "id"=> 172,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Mayor Otaño",
                  ],
                  [
                    "id"=> 173,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Natalio",
                  ],
                  [
                    "id"=> 174,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Nueva Alborada",
                  ],
                  [
                    "id"=> 175,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Obligado",
                  ],
                  [
                    "id"=> 176,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Pirapó",
                  ],
                  [
                    "id"=> 177,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "San Cosme y Damián",
                  ],
                  [
                    "id"=> 178,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "San Juan del Paraná",
                  ],
                  [
                    "id"=> 179,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "San Pedro del Paraná",
                  ],
                  [
                    "id"=> 180,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "San Rafael del Paraná",
                  ],
                  [
                    "id"=> 181,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Tomás Romero Pereira (Maria Auxiliadora)",
                  ],
                  [
                    "id"=> 182,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Trinidad",
                  ],
                  [
                    "id"=> 183,
                    "regions_id"=> 7,//ITAPUA
                    "comuna"=> "Yatytay",
                  ],
                  [
                    "id"=> 184,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Ayolas",
                  ],
                  [
                    "id"=> 185,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "San Ignacio",
                  ],
                  [
                    "id"=> 186,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "San Juan Bautista",
                  ],
                  [
                    "id"=> 187,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "San Miguel",
                  ],
                  [
                    "id"=> 188,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "San Patricio",
                  ],
                  [
                    "id"=> 189,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Santa María",
                  ],
                  [
                    "id"=> 190,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Santa Rosa de Lima",
                  ],
                  [
                    "id"=> 191,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Santiago",
                  ],
                  [
                    "id"=> 192,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Villa Florida",
                  ],
                  [
                    "id"=> 193,
                    "regions_id"=> 8,//MISIONES
                    "comuna"=> "Yabebyry",
                  ],
                  [
                    "id"=> 194,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Alberdi",
                  ],
                  [
                    "id"=> 195,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Cerrito",
                  ],
                  [
                    "id"=> 196,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Desmochados",
                  ],
                  [
                    "id"=> 197,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "General José Eduvigis Díaz",
                  ],
                  [
                    "id"=> 198,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Guazú Cuá",
                  ],
                  [
                    "id"=> 199,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Humaitá",
                  ],
                  [
                    "id"=> 200,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Isla Umbú",
                  ],
                  [
                    "id"=> 201,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Laureles",
                  ],
                  [
                    "id"=> 202,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Mayor José J. Martínez",
                  ],
                  [
                    "id"=> 203,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Paso de Patria",
                  ],
                  [
                    "id"=> 204,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Pilar",
                  ],
                  [
                    "id"=> 205,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "San Juan Bautista del Ñeembucú",
                  ],
                  [
                    "id"=> 206,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Tacuaras",
                  ],
                  [
                    "id"=> 207,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Villa Franca",
                  ],
                  [
                    "id"=> 208,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Villalbín",
                  ],
                  [
                    "id"=> 209,
                    "regions_id"=> 12,//ÑEEMBUCU
                    "comuna"=> "Villa Oliva",
                  ],
                  [
                    "id"=> 210,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Acahay",
                  ],
                  [
                    "id"=> 211,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Caapucú",
                  ],
                  [
                    "id"=> 212,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Carapeguá",
                  ],
                  [
                    "id"=> 213,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Escobar",
                  ],
                  [
                    "id"=> 214,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Gral. Bernardino Caballero",
                  ],
                  [
                    "id"=> 215,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "La Colmena",
                  ],
                  [
                    "id"=> 216,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "María Antonia",
                  ],
                  [
                    "id"=> 217,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Mbuyapey",
                  ],
                  [
                    "id"=> 218,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Paraguarí",
                  ],
                  [
                    "id"=> 219,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Pirayú",
                  ],
                  [
                    "id"=> 220,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Quiindy",
                  ],
                  [
                    "id"=> 221,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Quyquyhó",
                  ],
                  [
                    "id"=> 222,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "San Roque González de Santa Cruz",
                  ],
                  [
                    "id"=> 223,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Sapucai",
                  ],
                  [
                    "id"=> 224,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Tebicuarymí",
                  ],
                  [
                    "id"=> 225,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Yaguarón",
                  ],
                  [
                    "id"=> 226,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Ybycuí",
                  ],
                  [
                    "id"=> 227,
                    "regions_id"=> 9,//PARAGUARI
                    "comuna"=> "Ybytymí",
                  ],
                  [
                    "id"=> 228,
                    "regions_id"=> 15,
                    "comuna"=> "Benjamín Aceval",
                  ],
                  [
                    "id"=> 229,
                    "regions_id"=> 15,
                    "comuna"=> "Dr. José Falcón",
                  ],
                  [
                    "id"=> 230,
                    "regions_id"=> 15,
                    "comuna"=> "General José María Bruguez",
                  ],
                  [
                    "id"=> 231,
                    "regions_id"=> 15,
                    "comuna"=> "Nanawa",
                  ],
                  [
                    "id"=> 232,
                    "regions_id"=> 15,
                    "comuna"=> "Colonia Paratodo",
                  ],
                  [
                    "id"=> 233,
                    "regions_id"=> 15,
                    "comuna"=> "Pozo Colorado",
                  ],
                  [
                    "id"=> 234,
                    "regions_id"=> 15,
                    "comuna"=> "Puerto Pinasco",
                  ],
                  [
                    "id"=> 235,
                    "regions_id"=> 15,
                    "comuna"=> "Tte. Irala Fernández",
                  ],
                  [
                    "id"=> 236,
                    "regions_id"=> 15,
                    "comuna"=> "Esteban Martínez",
                  ],
                  [
                    "id"=> 237,
                    "regions_id"=> 15,
                    "comuna"=> "Villa Hayes",
                  ],
                  [
                    "id"=> 238,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Antequera",
                  ],
                  [
                    "id"=> 239,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Capiibary",
                  ],
                  [
                    "id"=> 240,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Choré",
                  ],
                  [
                    "id"=> 241,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "General Elizardo Aquino",
                  ],
                  [
                    "id"=> 242,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "General Isidoro Resquín",
                  ],
                  [
                    "id"=> 243,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Guayaibí",
                  ],
                  [
                    "id"=> 244,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Itacurubí del Rosario",
                  ],
                  [
                    "id"=> 245,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Liberación",
                  ],
                  [
                    "id"=> 246,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Lima",
                  ],
                  [
                    "id"=> 248,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Nueva Germania",
                  ],
                  [
                    "id"=> 249,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "San Estanislao",
                  ],
                  [
                    "id"=> 250,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "San Pablo",
                  ],
                  [
                    "id"=> 251,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "San Pedro de Ycuamandiyú",
                  ],
                  [
                    "id"=> 252,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "San Vicente Pancholo",
                  ],
                  [
                    "id"=> 253,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Santa Rosa del Aguaray",
                  ],
                  [
                    "id"=> 254,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Tacuatí",
                  ],
                  [
                    "id"=> 255,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Unión",
                  ],
                  [
                    "id"=> 256,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "25 de Diciembre",
                  ],
                  [
                    "id"=> 257,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Villa del Rosario",
                  ],
                  [
                    "id"=> 258,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Yataity del Norte",
                  ],
                  [
                    "id"=> 259,
                    "regions_id"=> 2,//SAN PEDRO
                    "comuna"=> "Yrybucuá",
                  ]];
       
                  
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         DB::table('regions')->truncate();
         DB::table('comunas')->truncate();
         foreach ($regions as $key => $value)
         {
             Region::create([
                                 'region' => $value['region'],
                                 ]);
         }

         foreach ($comuna as $key => $value)
         {
             Comuna::create([
                         'comuna' => $value['comuna'],
                         'region_id' => $value['region_id'],
                         ]);
         }

    }
}
