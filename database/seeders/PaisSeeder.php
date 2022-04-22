<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    public function run()
    {
        $paises = [
            [
                'id'         => 1,
                'nombre'       => 'Afghanistan',
                'codigo' => 'af',
            ],
            [
                'id'         => 2,
                'nombre'       => 'Albania',
                'codigo' => 'al',
            ],
            [
                'id'         => 3,
                'nombre'       => 'Algeria',
                'codigo' => 'dz',
            ],
            [
                'id'         => 4,
                'nombre'       => 'American Samoa',
                'codigo' => 'as',
            ],
            [
                'id'         => 5,
                'nombre'       => 'Andorra',
                'codigo' => 'ad',
            ],
            [
                'id'         => 6,
                'nombre'       => 'Angola',
                'codigo' => 'ao',
            ],
            [
                'id'         => 7,
                'nombre'       => 'Anguilla',
                'codigo' => 'ai',
            ],
            [
                'id'         => 8,
                'nombre'       => 'Antarctica',
                'codigo' => 'aq',
            ],
            [
                'id'         => 9,
                'nombre'       => 'Antigua and Barbuda',
                'codigo' => 'ag',
            ],
            [
                'id'         => 10,
                'nombre'       => 'Argentina',
                'codigo' => 'ar',
            ],
            [
                'id'         => 11,
                'nombre'       => 'Armenia',
                'codigo' => 'am',
            ],
            [
                'id'         => 12,
                'nombre'       => 'Aruba',
                'codigo' => 'aw',
            ],
            [
                'id'         => 13,
                'nombre'       => 'Australia',
                'codigo' => 'au',
            ],
            [
                'id'         => 14,
                'nombre'       => 'Austria',
                'codigo' => 'at',
            ],
            [
                'id'         => 15,
                'nombre'       => 'Azerbaijan',
                'codigo' => 'az',
            ],
            [
                'id'         => 16,
                'nombre'       => 'Bahamas',
                'codigo' => 'bs',
            ],
            [
                'id'         => 17,
                'nombre'       => 'Bahrain',
                'codigo' => 'bh',
            ],
            [
                'id'         => 18,
                'nombre'       => 'Bangladesh',
                'codigo' => 'bd',
            ],
            [
                'id'         => 19,
                'nombre'       => 'Barbados',
                'codigo' => 'bb',
            ],
            [
                'id'         => 20,
                'nombre'       => 'Belarus',
                'codigo' => 'by',
            ],
            [
                'id'         => 21,
                'nombre'       => 'Belgium',
                'codigo' => 'be',
            ],
            [
                'id'         => 22,
                'nombre'       => 'Belize',
                'codigo' => 'bz',
            ],
            [
                'id'         => 23,
                'nombre'       => 'Benin',
                'codigo' => 'bj',
            ],
            [
                'id'         => 24,
                'nombre'       => 'Bermuda',
                'codigo' => 'bm',
            ],
            [
                'id'         => 25,
                'nombre'       => 'Bhutan',
                'codigo' => 'bt',
            ],
            [
                'id'         => 26,
                'nombre'       => 'Bolivia',
                'codigo' => 'bo',
            ],
            [
                'id'         => 27,
                'nombre'       => 'Bosnia and Herzegovina',
                'codigo' => 'ba',
            ],
            [
                'id'         => 28,
                'nombre'       => 'Botswana',
                'codigo' => 'bw',
            ],
            [
                'id'         => 29,
                'nombre'       => 'Brazil',
                'codigo' => 'br',
            ],
            [
                'id'         => 30,
                'nombre'       => 'British Indian Ocean Territory',
                'codigo' => 'io',
            ],
            [
                'id'         => 31,
                'nombre'       => 'British Virgin Islands',
                'codigo' => 'vg',
            ],
            [
                'id'         => 32,
                'nombre'       => 'Brunei',
                'codigo' => 'bn',
            ],
            [
                'id'         => 33,
                'nombre'       => 'Bulgaria',
                'codigo' => 'bg',
            ],
            [
                'id'         => 34,
                'nombre'       => 'Burkina Faso',
                'codigo' => 'bf',
            ],
            [
                'id'         => 35,
                'nombre'       => 'Burundi',
                'codigo' => 'bi',
            ],
            [
                'id'         => 36,
                'nombre'       => 'Cambodia',
                'codigo' => 'kh',
            ],
            [
                'id'         => 37,
                'nombre'       => 'Cameroon',
                'codigo' => 'cm',
            ],
            [
                'id'         => 38,
                'nombre'       => 'Canada',
                'codigo' => 'ca',
            ],
            [
                'id'         => 39,
                'nombre'       => 'Cape Verde',
                'codigo' => 'cv',
            ],
            [
                'id'         => 40,
                'nombre'       => 'Cayman Islands',
                'codigo' => 'ky',
            ],
            [
                'id'         => 41,
                'nombre'       => 'Central African Republic',
                'codigo' => 'cf',
            ],
            [
                'id'         => 42,
                'nombre'       => 'Chad',
                'codigo' => 'td',
            ],
            [
                'id'         => 43,
                'nombre'       => 'Chile',
                'codigo' => 'cl',
            ],
            [
                'id'         => 44,
                'nombre'       => 'China',
                'codigo' => 'cn',
            ],
            [
                'id'         => 45,
                'nombre'       => 'Christmas Island',
                'codigo' => 'cx',
            ],
            [
                'id'         => 46,
                'nombre'       => 'Cocos Islands',
                'codigo' => 'cc',
            ],
            [
                'id'         => 47,
                'nombre'       => 'Colombia',
                'codigo' => 'co',
            ],
            [
                'id'         => 48,
                'nombre'       => 'Comoros',
                'codigo' => 'km',
            ],
            [
                'id'         => 49,
                'nombre'       => 'Cook Islands',
                'codigo' => 'ck',
            ],
            [
                'id'         => 50,
                'nombre'       => 'Costa Rica',
                'codigo' => 'cr',
            ],
            [
                'id'         => 51,
                'nombre'       => 'Croatia',
                'codigo' => 'hr',
            ],
            [
                'id'         => 52,
                'nombre'       => 'Cuba',
                'codigo' => 'cu',
            ],
            [
                'id'         => 53,
                'nombre'       => 'Curacao',
                'codigo' => 'cw',
            ],
            [
                'id'         => 54,
                'nombre'       => 'Cyprus',
                'codigo' => 'cy',
            ],
            [
                'id'         => 55,
                'nombre'       => 'Czech Republic',
                'codigo' => 'cz',
            ],
            [
                'id'         => 56,
                'nombre'       => 'Democratic Republic of the Congo',
                'codigo' => 'cd',
            ],
            [
                'id'         => 57,
                'nombre'       => 'Denmark',
                'codigo' => 'dk',
            ],
            [
                'id'         => 58,
                'nombre'       => 'Djibouti',
                'codigo' => 'dj',
            ],
            [
                'id'         => 59,
                'nombre'       => 'Dominica',
                'codigo' => 'dm',
            ],
            [
                'id'         => 60,
                'nombre'       => 'Dominican Republic',
                'codigo' => 'do',
            ],
            [
                'id'         => 61,
                'nombre'       => 'East Timor',
                'codigo' => 'tl',
            ],
            [
                'id'         => 62,
                'nombre'       => 'Ecuador',
                'codigo' => 'ec',
            ],
            [
                'id'         => 63,
                'nombre'       => 'Egypt',
                'codigo' => 'eg',
            ],
            [
                'id'         => 64,
                'nombre'       => 'El Salvador',
                'codigo' => 'sv',
            ],
            [
                'id'         => 65,
                'nombre'       => 'Equatorial Guinea',
                'codigo' => 'gq',
            ],
            [
                'id'         => 66,
                'nombre'       => 'Eritrea',
                'codigo' => 'er',
            ],
            [
                'id'         => 67,
                'nombre'       => 'Estonia',
                'codigo' => 'ee',
            ],
            [
                'id'         => 68,
                'nombre'       => 'Ethiopia',
                'codigo' => 'et',
            ],
            [
                'id'         => 69,
                'nombre'       => 'Falkland Islands',
                'codigo' => 'fk',
            ],
            [
                'id'         => 70,
                'nombre'       => 'Faroe Islands',
                'codigo' => 'fo',
            ],
            [
                'id'         => 71,
                'nombre'       => 'Fiji',
                'codigo' => 'fj',
            ],
            [
                'id'         => 72,
                'nombre'       => 'Finland',
                'codigo' => 'fi',
            ],
            [
                'id'         => 73,
                'nombre'       => 'France',
                'codigo' => 'fr',
            ],
            [
                'id'         => 74,
                'nombre'       => 'French Polynesia',
                'codigo' => 'pf',
            ],
            [
                'id'         => 75,
                'nombre'       => 'Gabon',
                'codigo' => 'ga',
            ],
            [
                'id'         => 76,
                'nombre'       => 'Gambia',
                'codigo' => 'gm',
            ],
            [
                'id'         => 77,
                'nombre'       => 'Georgia',
                'codigo' => 'ge',
            ],
            [
                'id'         => 78,
                'nombre'       => 'Germany',
                'codigo' => 'de',
            ],
            [
                'id'         => 79,
                'nombre'       => 'Ghana',
                'codigo' => 'gh',
            ],
            [
                'id'         => 80,
                'nombre'       => 'Gibraltar',
                'codigo' => 'gi',
            ],
            [
                'id'         => 81,
                'nombre'       => 'Greece',
                'codigo' => 'gr',
            ],
            [
                'id'         => 82,
                'nombre'       => 'Greenland',
                'codigo' => 'gl',
            ],
            [
                'id'         => 83,
                'nombre'       => 'Grenada',
                'codigo' => 'gd',
            ],
            [
                'id'         => 84,
                'nombre'       => 'Guam',
                'codigo' => 'gu',
            ],
            [
                'id'         => 85,
                'nombre'       => 'Guatemala',
                'codigo' => 'gt',
            ],
            [
                'id'         => 86,
                'nombre'       => 'Guernsey',
                'codigo' => 'gg',
            ],
            [
                'id'         => 87,
                'nombre'       => 'Guinea',
                'codigo' => 'gn',
            ],
            [
                'id'         => 88,
                'nombre'       => 'Guinea-Bissau',
                'codigo' => 'gw',
            ],
            [
                'id'         => 89,
                'nombre'       => 'Guyana',
                'codigo' => 'gy',
            ],
            [
                'id'         => 90,
                'nombre'       => 'Haiti',
                'codigo' => 'ht',
            ],
            [
                'id'         => 91,
                'nombre'       => 'Honduras',
                'codigo' => 'hn',
            ],
            [
                'id'         => 92,
                'nombre'       => 'Hong Kong',
                'codigo' => 'hk',
            ],
            [
                'id'         => 93,
                'nombre'       => 'Hungary',
                'codigo' => 'hu',
            ],
            [
                'id'         => 94,
                'nombre'       => 'Iceland',
                'codigo' => 'is',
            ],
            [
                'id'         => 95,
                'nombre'       => 'India',
                'codigo' => 'in',
            ],
            [
                'id'         => 96,
                'nombre'       => 'Indonesia',
                'codigo' => 'id',
            ],
            [
                'id'         => 97,
                'nombre'       => 'Iran',
                'codigo' => 'ir',
            ],
            [
                'id'         => 98,
                'nombre'       => 'Iraq',
                'codigo' => 'iq',
            ],
            [
                'id'         => 99,
                'nombre'       => 'Ireland',
                'codigo' => 'ie',
            ],
            [
                'id'         => 100,
                'nombre'       => 'Isle of Man',
                'codigo' => 'im',
            ],
            [
                'id'         => 101,
                'nombre'       => 'Israel',
                'codigo' => 'il',
            ],
            [
                'id'         => 102,
                'nombre'       => 'Italy',
                'codigo' => 'it',
            ],
            [
                'id'         => 103,
                'nombre'       => 'Ivory Coast',
                'codigo' => 'ci',
            ],
            [
                'id'         => 104,
                'nombre'       => 'Jamaica',
                'codigo' => 'jm',
            ],
            [
                'id'         => 105,
                'nombre'       => 'Japan',
                'codigo' => 'jp',
            ],
            [
                'id'         => 106,
                'nombre'       => 'Jersey',
                'codigo' => 'je',
            ],
            [
                'id'         => 107,
                'nombre'       => 'Jordan',
                'codigo' => 'jo',
            ],
            [
                'id'         => 108,
                'nombre'       => 'Kazakhstan',
                'codigo' => 'kz',
            ],
            [
                'id'         => 109,
                'nombre'       => 'Kenya',
                'codigo' => 'ke',
            ],
            [
                'id'         => 110,
                'nombre'       => 'Kiribati',
                'codigo' => 'ki',
            ],
            [
                'id'         => 111,
                'nombre'       => 'Kosovo',
                'codigo' => 'xk',
            ],
            [
                'id'         => 112,
                'nombre'       => 'Kuwait',
                'codigo' => 'kw',
            ],
            [
                'id'         => 113,
                'nombre'       => 'Kyrgyzstan',
                'codigo' => 'kg',
            ],
            [
                'id'         => 114,
                'nombre'       => 'Laos',
                'codigo' => 'la',
            ],
            [
                'id'         => 115,
                'nombre'       => 'Latvia',
                'codigo' => 'lv',
            ],
            [
                'id'         => 116,
                'nombre'       => 'Lebanon',
                'codigo' => 'lb',
            ],
            [
                'id'         => 117,
                'nombre'       => 'Lesotho',
                'codigo' => 'ls',
            ],
            [
                'id'         => 118,
                'nombre'       => 'Liberia',
                'codigo' => 'lr',
            ],
            [
                'id'         => 119,
                'nombre'       => 'Libya',
                'codigo' => 'ly',
            ],
            [
                'id'         => 120,
                'nombre'       => 'Liechtenstein',
                'codigo' => 'li',
            ],
            [
                'id'         => 121,
                'nombre'       => 'Lithuania',
                'codigo' => 'lt',
            ],
            [
                'id'         => 122,
                'nombre'       => 'Luxembourg',
                'codigo' => 'lu',
            ],
            [
                'id'         => 123,
                'nombre'       => 'Macau',
                'codigo' => 'mo',
            ],
            [
                'id'         => 124,
                'nombre'       => 'Macedonia',
                'codigo' => 'mk',
            ],
            [
                'id'         => 125,
                'nombre'       => 'Madagascar',
                'codigo' => 'mg',
            ],
            [
                'id'         => 126,
                'nombre'       => 'Malawi',
                'codigo' => 'mw',
            ],
            [
                'id'         => 127,
                'nombre'       => 'Malaysia',
                'codigo' => 'my',
            ],
            [
                'id'         => 128,
                'nombre'       => 'Maldives',
                'codigo' => 'mv',
            ],
            [
                'id'         => 129,
                'nombre'       => 'Mali',
                'codigo' => 'ml',
            ],
            [
                'id'         => 130,
                'nombre'       => 'Malta',
                'codigo' => 'mt',
            ],
            [
                'id'         => 131,
                'nombre'       => 'Marshall Islands',
                'codigo' => 'mh',
            ],
            [
                'id'         => 132,
                'nombre'       => 'Mauritania',
                'codigo' => 'mr',
            ],
            [
                'id'         => 133,
                'nombre'       => 'Mauritius',
                'codigo' => 'mu',
            ],
            [
                'id'         => 134,
                'nombre'       => 'Mayotte',
                'codigo' => 'yt',
            ],
            [
                'id'         => 135,
                'nombre'       => 'Mexico',
                'codigo' => 'mx',
            ],
            [
                'id'         => 136,
                'nombre'       => 'Micronesia',
                'codigo' => 'fm',
            ],
            [
                'id'         => 137,
                'nombre'       => 'Moldova',
                'codigo' => 'md',
            ],
            [
                'id'         => 138,
                'nombre'       => 'Monaco',
                'codigo' => 'mc',
            ],
            [
                'id'         => 139,
                'nombre'       => 'Mongolia',
                'codigo' => 'mn',
            ],
            [
                'id'         => 140,
                'nombre'       => 'Montenegro',
                'codigo' => 'me',
            ],
            [
                'id'         => 141,
                'nombre'       => 'Montserrat',
                'codigo' => 'ms',
            ],
            [
                'id'         => 142,
                'nombre'       => 'Morocco',
                'codigo' => 'ma',
            ],
            [
                'id'         => 143,
                'nombre'       => 'Mozambique',
                'codigo' => 'mz',
            ],
            [
                'id'         => 144,
                'nombre'       => 'Myanmar',
                'codigo' => 'mm',
            ],
            [
                'id'         => 145,
                'nombre'       => 'Namibia',
                'codigo' => 'na',
            ],
            [
                'id'         => 146,
                'nombre'       => 'Nauru',
                'codigo' => 'nr',
            ],
            [
                'id'         => 147,
                'nombre'       => 'Nepal',
                'codigo' => 'np',
            ],
            [
                'id'         => 148,
                'nombre'       => 'Netherlands',
                'codigo' => 'nl',
            ],
            [
                'id'         => 149,
                'nombre'       => 'Netherlands Antilles',
                'codigo' => 'an',
            ],
            [
                'id'         => 150,
                'nombre'       => 'New Caledonia',
                'codigo' => 'nc',
            ],
            [
                'id'         => 151,
                'nombre'       => 'New Zealand',
                'codigo' => 'nz',
            ],
            [
                'id'         => 152,
                'nombre'       => 'Nicaragua',
                'codigo' => 'ni',
            ],
            [
                'id'         => 153,
                'nombre'       => 'Niger',
                'codigo' => 'ne',
            ],
            [
                'id'         => 154,
                'nombre'       => 'Nigeria',
                'codigo' => 'ng',
            ],
            [
                'id'         => 155,
                'nombre'       => 'Niue',
                'codigo' => 'nu',
            ],
            [
                'id'         => 156,
                'nombre'       => 'North Korea',
                'codigo' => 'kp',
            ],
            [
                'id'         => 157,
                'nombre'       => 'Northern Mariana Islands',
                'codigo' => 'mp',
            ],
            [
                'id'         => 158,
                'nombre'       => 'Norway',
                'codigo' => 'no',
            ],
            [
                'id'         => 159,
                'nombre'       => 'Oman',
                'codigo' => 'om',
            ],
            [
                'id'         => 160,
                'nombre'       => 'Pakistan',
                'codigo' => 'pk',
            ],
            [
                'id'         => 161,
                'nombre'       => 'Palau',
                'codigo' => 'pw',
            ],
            [
                'id'         => 162,
                'nombre'       => 'Palestine',
                'codigo' => 'ps',
            ],
            [
                'id'         => 163,
                'nombre'       => 'Panama',
                'codigo' => 'pa',
            ],
            [
                'id'         => 164,
                'nombre'       => 'Papua New Guinea',
                'codigo' => 'pg',
            ],
            [
                'id'         => 165,
                'nombre'       => 'Paraguay',
                'codigo' => 'py',
            ],
            [
                'id'         => 166,
                'nombre'       => 'Peru',
                'codigo' => 'pe',
            ],
            [
                'id'         => 167,
                'nombre'       => 'Philippines',
                'codigo' => 'ph',
            ],
            [
                'id'         => 168,
                'nombre'       => 'Pitcairn',
                'codigo' => 'pn',
            ],
            [
                'id'         => 169,
                'nombre'       => 'Poland',
                'codigo' => 'pl',
            ],
            [
                'id'         => 170,
                'nombre'       => 'Portugal',
                'codigo' => 'pt',
            ],
            [
                'id'         => 171,
                'nombre'       => 'Puerto Rico',
                'codigo' => 'pr',
            ],
            [
                'id'         => 172,
                'nombre'       => 'Qatar',
                'codigo' => 'qa',
            ],
            [
                'id'         => 173,
                'nombre'       => 'Republic of the Congo',
                'codigo' => 'cg',
            ],
            [
                'id'         => 174,
                'nombre'       => 'Reunion',
                'codigo' => 're',
            ],
            [
                'id'         => 175,
                'nombre'       => 'Romania',
                'codigo' => 'ro',
            ],
            [
                'id'         => 176,
                'nombre'       => 'Russia',
                'codigo' => 'ru',
            ],
            [
                'id'         => 177,
                'nombre'       => 'Rwanda',
                'codigo' => 'rw',
            ],
            [
                'id'         => 178,
                'nombre'       => 'Saint Barthelemy',
                'codigo' => 'bl',
            ],
            [
                'id'         => 179,
                'nombre'       => 'Saint Helena',
                'codigo' => 'sh',
            ],
            [
                'id'         => 180,
                'nombre'       => 'Saint Kitts and Nevis',
                'codigo' => 'kn',
            ],
            [
                'id'         => 181,
                'nombre'       => 'Saint Lucia',
                'codigo' => 'lc',
            ],
            [
                'id'         => 182,
                'nombre'       => 'Saint Martin',
                'codigo' => 'mf',
            ],
            [
                'id'         => 183,
                'nombre'       => 'Saint Pierre and Miquelon',
                'codigo' => 'pm',
            ],
            [
                'id'         => 184,
                'nombre'       => 'Saint Vincent and the Grenadines',
                'codigo' => 'vc',
            ],
            [
                'id'         => 185,
                'nombre'       => 'Samoa',
                'codigo' => 'ws',
            ],
            [
                'id'         => 186,
                'nombre'       => 'San Marino',
                'codigo' => 'sm',
            ],
            [
                'id'         => 187,
                'nombre'       => 'Sao Tome and Principe',
                'codigo' => 'st',
            ],
            [
                'id'         => 188,
                'nombre'       => 'Saudi Arabia',
                'codigo' => 'sa',
            ],
            [
                'id'         => 189,
                'nombre'       => 'Senegal',
                'codigo' => 'sn',
            ],
            [
                'id'         => 190,
                'nombre'       => 'Serbia',
                'codigo' => 'rs',
            ],
            [
                'id'         => 191,
                'nombre'       => 'Seychelles',
                'codigo' => 'sc',
            ],
            [
                'id'         => 192,
                'nombre'       => 'Sierra Leone',
                'codigo' => 'sl',
            ],
            [
                'id'         => 193,
                'nombre'       => 'Singapore',
                'codigo' => 'sg',
            ],
            [
                'id'         => 194,
                'nombre'       => 'Sint Maarten',
                'codigo' => 'sx',
            ],
            [
                'id'         => 195,
                'nombre'       => 'Slovakia',
                'codigo' => 'sk',
            ],
            [
                'id'         => 196,
                'nombre'       => 'Slovenia',
                'codigo' => 'si',
            ],
            [
                'id'         => 197,
                'nombre'       => 'Solomon Islands',
                'codigo' => 'sb',
            ],
            [
                'id'         => 198,
                'nombre'       => 'Somalia',
                'codigo' => 'so',
            ],
            [
                'id'         => 199,
                'nombre'       => 'South Africa',
                'codigo' => 'za',
            ],
            [
                'id'         => 200,
                'nombre'       => 'South Korea',
                'codigo' => 'kr',
            ],
            [
                'id'         => 201,
                'nombre'       => 'South Sudan',
                'codigo' => 'ss',
            ],
            [
                'id'         => 202,
                'nombre'       => 'Spain',
                'codigo' => 'es',
            ],
            [
                'id'         => 203,
                'nombre'       => 'Sri Lanka',
                'codigo' => 'lk',
            ],
            [
                'id'         => 204,
                'nombre'       => 'Sudan',
                'codigo' => 'sd',
            ],
            [
                'id'         => 205,
                'nombre'       => 'Surinombre',
                'codigo' => 'sr',
            ],
            [
                'id'         => 206,
                'nombre'       => 'Svalbard and Jan Mayen',
                'codigo' => 'sj',
            ],
            [
                'id'         => 207,
                'nombre'       => 'Swaziland',
                'codigo' => 'sz',
            ],
            [
                'id'         => 208,
                'nombre'       => 'Sweden',
                'codigo' => 'se',
            ],
            [
                'id'         => 209,
                'nombre'       => 'Switzerland',
                'codigo' => 'ch',
            ],
            [
                'id'         => 210,
                'nombre'       => 'Syria',
                'codigo' => 'sy',
            ],
            [
                'id'         => 211,
                'nombre'       => 'Taiwan',
                'codigo' => 'tw',
            ],
            [
                'id'         => 212,
                'nombre'       => 'Tajikistan',
                'codigo' => 'tj',
            ],
            [
                'id'         => 213,
                'nombre'       => 'Tanzania',
                'codigo' => 'tz',
            ],
            [
                'id'         => 214,
                'nombre'       => 'Thailand',
                'codigo' => 'th',
            ],
            [
                'id'         => 215,
                'nombre'       => 'Togo',
                'codigo' => 'tg',
            ],
            [
                'id'         => 216,
                'nombre'       => 'Tokelau',
                'codigo' => 'tk',
            ],
            [
                'id'         => 217,
                'nombre'       => 'Tonga',
                'codigo' => 'to',
            ],
            [
                'id'         => 218,
                'nombre'       => 'Trinidad and Tobago',
                'codigo' => 'tt',
            ],
            [
                'id'         => 219,
                'nombre'       => 'Tunisia',
                'codigo' => 'tn',
            ],
            [
                'id'         => 220,
                'nombre'       => 'Turkey',
                'codigo' => 'tr',
            ],
            [
                'id'         => 221,
                'nombre'       => 'Turkmenistan',
                'codigo' => 'tm',
            ],
            [
                'id'         => 222,
                'nombre'       => 'Turks and Caicos Islands',
                'codigo' => 'tc',
            ],
            [
                'id'         => 223,
                'nombre'       => 'Tuvalu',
                'codigo' => 'tv',
            ],
            [
                'id'         => 224,
                'nombre'       => 'U.S. Virgin Islands',
                'codigo' => 'vi',
            ],
            [
                'id'         => 225,
                'nombre'       => 'Uganda',
                'codigo' => 'ug',
            ],
            [
                'id'         => 226,
                'nombre'       => 'Ukraine',
                'codigo' => 'ua',
            ],
            [
                'id'         => 227,
                'nombre'       => 'United Arab Emirates',
                'codigo' => 'ae',
            ],
            [
                'id'         => 228,
                'nombre'       => 'United Kingdom',
                'codigo' => 'gb',
            ],
            [
                'id'         => 229,
                'nombre'       => 'United States',
                'codigo' => 'us',
            ],
            [
                'id'         => 230,
                'nombre'       => 'Uruguay',
                'codigo' => 'uy',
            ],
            [
                'id'         => 231,
                'nombre'       => 'Uzbekistan',
                'codigo' => 'uz',
            ],
            [
                'id'         => 232,
                'nombre'       => 'Vanuatu',
                'codigo' => 'vu',
            ],
            [
                'id'         => 233,
                'nombre'       => 'Vatican',
                'codigo' => 'va',
            ],
            [
                'id'         => 234,
                'nombre'       => 'Venezuela',
                'codigo' => 've',
            ],
            [
                'id'         => 235,
                'nombre'       => 'Vietnam',
                'codigo' => 'vn',
            ],
            [
                'id'         => 236,
                'nombre'       => 'Wallis and Futuna',
                'codigo' => 'wf',
            ],
            [
                'id'         => 237,
                'nombre'       => 'Western Sahara',
                'codigo' => 'eh',
            ],
            [
                'id'         => 238,
                'nombre'       => 'Yemen',
                'codigo' => 'ye',
            ],
            [
                'id'         => 239,
                'nombre'       => 'Zambia',
                'codigo' => 'zm',
            ],
            [
                'id'         => 240,
                'nombre'       => 'Zimbabwe',
                'codigo' => 'zw',
            ],
        ];

        Pais::insert($paises);
    }
}
