<?php

namespace NexiCheckout\Application\Helper;

class Countrylist
{
    public function getList()
    {
        return $countriesList = array(
            "AFG" => array("name" => "Afghanistan", "phone" => "93", "currency" => "AFN", "alpha_3" => "AFG" , "alpha_2" => "AF"),
            "ALA" => array("name" => "Aland Islands", "phone" => "358", "currency" => "EUR", "alpha_3" => "ALA" , "alpha_2" => "AX"),
            "ALB" => array("name" => "Albania", "phone" => "355", "currency" => "ALL", "alpha_3" => "ALB" , "alpha_2" => "AL"),
            "DZA" => array("name" => "Algeria", "phone" => "213", "currency" => "DZD", "alpha_3" => "DZA" , "alpha_2" => "DZ"),
            "ASM" => array("name" => "American Samoa", "phone" => "1684", "currency" => "USD", "alpha_3" => "ASM" , "alpha_2" => "AS"),
            "AND" => array("name" => "Andorra", "phone" => "376", "currency" => "EUR", "alpha_3" => "AND" , "alpha_2" => "AD"),
            "AGO" => array("name" => "Angola", "phone" => "244", "currency" => "AOA", "alpha_3" => "AGO" , "alpha_2" => "AO"),
            "AIA" => array("name" => "Anguilla", "phone" => "1264", "currency" => "XCD", "alpha_3" => "AIA" , "alpha_2" => "AI"),
            "ATA" => array("name" => "Antarctica", "phone" => "672", "currency" => "AAD", "alpha_3" => "ATA" , "alpha_2" => "AQ"),
            "ATG" => array("name" => "Antigua and Barbuda", "phone" => "1268", "currency" => "XCD", "alpha_3" => "ATG" , "alpha_2" => "AG"),
            "ARG" => array("name" => "Argentina", "phone" => "54", "currency" => "ARS", "alpha_3" => "ARG" , "alpha_2" => "AR"),
            "ARM" => array("name" => "Armenia", "phone" => "374", "currency" => "AMD", "alpha_3" => "ARM" , "alpha_2" => "AM"),
            "ABW" => array("name" => "Aruba", "phone" => "297", "currency" => "AWG", "alpha_3" => "ABW" , "alpha_2" => "AW"),
            "AUS" => array("name" => "Australia", "phone" => "61", "currency" => "AUD", "alpha_3" => "AUS" , "alpha_2" => "AU"),
            "AUT" => array("name" => "Austria", "phone" => "43", "currency" => "EUR", "alpha_3" => "AUT" , "alpha_2" => "AT"),
            "AZE" => array("name" => "Azerbaijan", "phone" => "994", "currency" => "AZN", "alpha_3" => "AZE" , "alpha_2" => "AZ"),
            "BHS" => array("name" => "Bahamas", "phone" => "1242", "currency" => "BSD", "alpha_3" => "BHS" , "alpha_2" => "BS"),
            "BHR" => array("name" => "Bahrain", "phone" => "973", "currency" => "BHD", "alpha_3" => "BHR" , "alpha_2" => "BH"),
            "BGD" => array("name" => "Bangladesh", "phone" => "880", "currency" => "BDT", "alpha_3" => "BGD" , "alpha_2" => "BD"),
            "BRB" => array("name" => "Barbados", "phone" => "1246", "currency" => "BBD", "alpha_3" => "BRB" , "alpha_2" => "BB"),
            "BLR" => array("name" => "Belarus", "phone" => "375", "currency" => "BYN", "alpha_3" => "BLR" , "alpha_2" => "BY"),
            "BEL" => array("name" => "Belgium", "phone" => "32", "currency" => "EUR", "alpha_3" => "BEL" , "alpha_2" => "BE"),
            "BLZ" => array("name" => "Belize", "phone" => "501", "currency" => "BZD", "alpha_3" => "BLZ" , "alpha_2" => "BZ"),
            "BEN" => array("name" => "Benin", "phone" => "229", "currency" => "XOF", "alpha_3" => "BEN" , "alpha_2" => "BJ"),
            "BMU" => array("name" => "Bermuda", "phone" => "1441", "currency" => "BMD", "alpha_3" => "BMU" , "alpha_2" => "BM"),
            "BTN" => array("name" => "Bhutan", "phone" => "975", "currency" => "BTN", "alpha_3" => "BTN" , "alpha_2" => "BT"),
            "BOL" => array("name" => "Bolivia", "phone" => "591", "currency" => "BOB", "alpha_3" => "BOL" , "alpha_2" => "BO"),
            "BES" => array("name" => "Bonaire, Sint Eustatius and Saba", "phone" => "599", "currency" => "USD", "alpha_3" => "BES" , "alpha_2" => "BQ"),
            "BIH" => array("name" => "Bosnia and Herzegovina", "phone" => "387", "currency" => "BAM", "alpha_3" => "BIH" , "alpha_2" => "BA"),
            "BWA" => array("name" => "Botswana", "phone" => "267", "currency" => "BWP", "alpha_3" => "BWA" , "alpha_2" => "BW"),
            "BVT" => array("name" => "Bouvet Island", "phone" => "55", "currency" => "NOK", "alpha_3" => "BVT" , "alpha_2" => "BV"),
            "BRA" => array("name" => "Brazil", "phone" => "55", "currency" => "BRL", "alpha_3" => "BRA" , "alpha_2" => "BR"),
            "IOT" => array("name" => "British Indian Ocean Territory", "phone" => "246", "currency" => "USD", "alpha_3" => "IOT" , "alpha_2" => "IO"),
            "BRN" => array("name" => "Brunei Darussalam", "phone" => "673", "currency" => "BND", "alpha_3" => "BRN" , "alpha_2" => "BN"),
            "BGR" => array("name" => "Bulgaria", "phone" => "359", "currency" => "BGN", "alpha_3" => "BGR" , "alpha_2" => "BG"),
            "BFA" => array("name" => "Burkina Faso", "phone" => "226", "currency" => "XOF", "alpha_3" => "BFA" , "alpha_2" => "BF"),
            "BDI" => array("name" => "Burundi", "phone" => "257", "currency" => "BIF", "alpha_3" => "BDI" , "alpha_2" => "BI"),
            "KHM" => array("name" => "Cambodia", "phone" => "855", "currency" => "KHR", "alpha_3" => "KHM" , "alpha_2" => "KH"),
            "CMR" => array("name" => "Cameroon", "phone" => "237", "currency" => "XAF", "alpha_3" => "CMR" , "alpha_2" => "CM"),
            "CAN" => array("name" => "Canada", "phone" => "1", "currency" => "CAD", "alpha_3" => "CAN" , "alpha_2" => "CA"),
            "CPV" => array("name" => "Cape Verde", "phone" => "238", "currency" => "CVE", "alpha_3" => "CPV" , "alpha_2" => "CV"),
            "CYM" => array("name" => "Cayman Islands", "phone" => "1345", "currency" => "KYD", "alpha_3" => "CYM" , "alpha_2" => "KY"),
            "CAF" => array("name" => "Central African Republic", "phone" => "236", "currency" => "XAF", "alpha_3" => "CAF" , "alpha_2" => "CF"),
            "TCD" => array("name" => "Chad", "phone" => "235", "currency" => "XAF", "alpha_3" => "TCD" , "alpha_2" => "TD"),
            "CHL" => array("name" => "Chile", "phone" => "56", "currency" => "CLP", "alpha_3" => "CHL" , "alpha_2" => "CL"),
            "CHN" => array("name" => "China", "phone" => "86", "currency" => "CNY", "alpha_3" => "CHN" , "alpha_2" => "CN"),
            "CXR" => array("name" => "Christmas Island", "phone" => "61", "currency" => "AUD", "alpha_3" => "CXR" , "alpha_2" => "CX"),
            "CCK" => array("name" => "Cocos (Keeling) Islands", "phone" => "672", "currency" => "AUD", "alpha_3" => "CCK" , "alpha_2" => "CC"),
            "COL" => array("name" => "Colombia", "phone" => "57", "currency" => "COP", "alpha_3" => "COL" , "alpha_2" => "CO"),
            "COM" => array("name" => "Comoros", "phone" => "269", "currency" => "KMF", "alpha_3" => "COM" , "alpha_2" => "KM"),
            "COG" => array("name" => "Congo", "phone" => "242", "currency" => "XAF", "alpha_3" => "COG" , "alpha_2" => "CG"),
            "COD" => array("name" => "Congo, Democratic Republic of the Congo", "phone" => "242", "currency" => "CDF", "alpha_3" => "COD" , "alpha_2" => "CD"),
            "COK" => array("name" => "Cook Islands", "phone" => "682", "currency" => "NZD", "alpha_3" => "COK" , "alpha_2" => "CK"),
            "CRI" => array("name" => "Costa Rica", "phone" => "506", "currency" => "CRC", "alpha_3" => "CRI" , "alpha_2" => "CR"),
            "CIV" => array("name" => "Cote D'Ivoire", "phone" => "225", "currency" => "XOF", "alpha_3" => "CIV" , "alpha_2" => "CI"),
            "HRV" => array("name" => "Croatia", "phone" => "385", "currency" => "HRK", "alpha_3" => "HRV" , "alpha_2" => "HR"),
            "CUB" => array("name" => "Cuba", "phone" => "53", "currency" => "CUP", "alpha_3" => "CUB" , "alpha_2" => "CU"),
            "CUW" => array("name" => "Curacao", "phone" => "599", "currency" => "ANG", "alpha_3" => "CUW" , "alpha_2" => "CW"),
            "CYP" => array("name" => "Cyprus", "phone" => "357", "currency" => "EUR", "alpha_3" => "CYP" , "alpha_2" => "CY"),
            "CZE" => array("name" => "Czech Republic", "phone" => "420", "currency" => "CZK", "alpha_3" => "CZE" , "alpha_2" => "CZ"),
            "DNK" => array("name" => "Denmark", "phone" => "45", "currency" => "DKK", "alpha_3" => "DNK" , "alpha_2" => "DK"),
            "DJI" => array("name" => "Djibouti", "phone" => "253", "currency" => "DJF", "alpha_3" => "DJI" , "alpha_2" => "DJ"),
            "DMA" => array("name" => "Dominica", "phone" => "1767", "currency" => "XCD", "alpha_3" => "DMA" , "alpha_2" => "DM"),
            "DOM" => array("name" => "Dominican Republic", "phone" => "1809", "currency" => "DOP", "alpha_3" => "DOM" , "alpha_2" => "DO"),
            "ECU" => array("name" => "Ecuador", "phone" => "593", "currency" => "USD", "alpha_3" => "ECU" , "alpha_2" => "EC"),
            "EGY" => array("name" => "Egypt", "phone" => "20", "currency" => "EGP", "alpha_3" => "EGY" , "alpha_2" => "EG"),
            "SLV" => array("name" => "El Salvador", "phone" => "503", "currency" => "USD", "alpha_3" => "SLV" , "alpha_2" => "SV"),
            "GNQ" => array("name" => "Equatorial Guinea", "phone" => "240", "currency" => "XAF", "alpha_3" => "GNQ" , "alpha_2" => "GQ"),
            "ERI" => array("name" => "Eritrea", "phone" => "291", "currency" => "ERN", "alpha_3" => "ERI" , "alpha_2" => "ER"),
            "EST" => array("name" => "Estonia", "phone" => "372", "currency" => "EUR", "alpha_3" => "EST" , "alpha_2" => "EE"),
            "ETH" => array("name" => "Ethiopia", "phone" => "251", "currency" => "ETB", "alpha_3" => "ETH" , "alpha_2" => "ET"),
            "FLK" => array("name" => "Falkland Islands (Malvinas)", "phone" => "500", "currency" => "FKP", "alpha_3" => "FLK" , "alpha_2" => "FK"),
            "FRO" => array("name" => "Faroe Islands", "phone" => "298", "currency" => "DKK", "alpha_3" => "FRO" , "alpha_2" => "FO"),
            "FJI" => array("name" => "Fiji", "phone" => "679", "currency" => "FJD", "alpha_3" => "FJI" , "alpha_2" => "FJ"),
            "FIN" => array("name" => "Finland", "phone" => "358", "currency" => "EUR", "alpha_3" => "FIN" , "alpha_2" => "FI"),
            "FRA" => array("name" => "France", "phone" => "33", "currency" => "EUR", "alpha_3" => "FRA" , "alpha_2" => "FR"),
            "GUF" => array("name" => "French Guiana", "phone" => "594", "currency" => "EUR", "alpha_3" => "GUF" , "alpha_2" => "GF"),
            "PYF" => array("name" => "French Polynesia", "phone" => "689", "currency" => "XPF", "alpha_3" => "PYF" , "alpha_2" => "PF"),
            "ATF" => array("name" => "French Southern Territories", "phone" => "262", "currency" => "EUR", "alpha_3" => "ATF" , "alpha_2" => "TF"),
            "GAB" => array("name" => "Gabon", "phone" => "241", "currency" => "XAF", "alpha_3" => "GAB" , "alpha_2" => "GA"),
            "GMB" => array("name" => "Gambia", "phone" => "220", "currency" => "GMD", "alpha_3" => "GMB" , "alpha_2" => "GM"),
            "GEO" => array("name" => "Georgia", "phone" => "995", "currency" => "GEL", "alpha_3" => "GEO" , "alpha_2" => "GE"),
            "DEU" => array("name" => "Germany", "phone" => "49", "currency" => "EUR", "alpha_3" => "DEU" , "alpha_2" => "DE"),
            "GHA" => array("name" => "Ghana", "phone" => "233", "currency" => "GHS", "alpha_3" => "GHA" , "alpha_2" => "GH"),
            "GIB" => array("name" => "Gibraltar", "phone" => "350", "currency" => "GIP", "alpha_3" => "GIB" , "alpha_2" => "GI"),
            "GRC" => array("name" => "Greece", "phone" => "30", "currency" => "EUR", "alpha_3" => "GRC" , "alpha_2" => "GR"),
            "GRL" => array("name" => "Greenland", "phone" => "299", "currency" => "DKK", "alpha_3" => "GRL" , "alpha_2" => "GL"),
            "GRD" => array("name" => "Grenada", "phone" => "1473", "currency" => "XCD", "alpha_3" => "GRD" , "alpha_2" => "GD"),
            "GLP" => array("name" => "Guadeloupe", "phone" => "590", "currency" => "EUR", "alpha_3" => "GLP" , "alpha_2" => "GP"),
            "GUM" => array("name" => "Guam", "phone" => "1671", "currency" => "USD", "alpha_3" => "GUM" , "alpha_2" => "GU"),
            "GTM" => array("name" => "Guatemala", "phone" => "502", "currency" => "GTQ", "alpha_3" => "GTM" , "alpha_2" => "GT"),
            "GGY" => array("name" => "Guernsey", "phone" => "44", "currency" => "GBP", "alpha_3" => "GGY" , "alpha_2" => "GG"),
            "GIN" => array("name" => "Guinea", "phone" => "224", "currency" => "GNF", "alpha_3" => "GIN" , "alpha_2" => "GN"),
            "GNB" => array("name" => "Guinea-Bissau", "phone" => "245", "currency" => "XOF", "alpha_3" => "GNB" , "alpha_2" => "GW"),
            "GUY" => array("name" => "Guyana", "phone" => "592", "currency" => "GYD", "alpha_3" => "GUY" , "alpha_2" => "GY"),
            "HTI" => array("name" => "Haiti", "phone" => "509", "currency" => "HTG", "alpha_3" => "HTI" , "alpha_2" => "HT"),
            "HMD" => array("name" => "Heard Island and Mcdonald Islands", "phone" => "0", "currency" => "AUD", "alpha_3" => "HMD" , "alpha_2" => "HM"),
            "VAT" => array("name" => "Holy See (Vatican City State)", "phone" => "39", "currency" => "EUR", "alpha_3" => "VAT" , "alpha_2" => "VA"),
            "HND" => array("name" => "Honduras", "phone" => "504", "currency" => "HNL", "alpha_3" => "HND" , "alpha_2" => "HN"),
            "HKG" => array("name" => "Hong Kong", "phone" => "852", "currency" => "HKD", "alpha_3" => "HKG" , "alpha_2" => "HK"),
            "HUN" => array("name" => "Hungary", "phone" => "36", "currency" => "HUF", "alpha_3" => "HUN" , "alpha_2" => "HU"),
            "ISL" => array("name" => "Iceland", "phone" => "354", "currency" => "ISK", "alpha_3" => "ISL" , "alpha_2" => "IS"),
            "IND" => array("name" => "India", "phone" => "91", "currency" => "INR", "alpha_3" => "IND" , "alpha_2" => "IN"),
            "IDN" => array("name" => "Indonesia", "phone" => "62", "currency" => "IDR", "alpha_3" => "IDN" , "alpha_2" => "ID"),
            "IRN" => array("name" => "Iran, Islamic Republic of", "phone" => "98", "currency" => "IRR", "alpha_3" => "IRN" , "alpha_2" => "IR"),
            "IRQ" => array("name" => "Iraq", "phone" => "964", "currency" => "IQD", "alpha_3" => "IRQ" , "alpha_2" => "IQ"),
            "IRL" => array("name" => "Ireland", "phone" => "353", "currency" => "EUR", "alpha_3" => "IRL" , "alpha_2" => "IE"),
            "IMN" => array("name" => "Isle of Man", "phone" => "44", "currency" => "GBP", "alpha_3" => "IMN" , "alpha_2" => "IM"),
            "ISR" => array("name" => "Israel", "phone" => "972", "currency" => "ILS", "alpha_3" => "ISR" , "alpha_2" => "IL"),
            "ITA" => array("name" => "Italy", "phone" => "39", "currency" => "EUR", "alpha_3" => "ITA" , "alpha_2" => "IT"),
            "JAM" => array("name" => "Jamaica", "phone" => "1876", "currency" => "JMD", "alpha_3" => "JAM" , "alpha_2" => "JM"),
            "JPN" => array("name" => "Japan", "phone" => "81", "currency" => "JPY", "alpha_3" => "JPN" , "alpha_2" => "JP"),
            "JEY" => array("name" => "Jersey", "phone" => "44", "currency" => "GBP", "alpha_3" => "JEY" , "alpha_2" => "JE"),
            "JOR" => array("name" => "Jordan", "phone" => "962", "currency" => "JOD", "alpha_3" => "JOR" , "alpha_2" => "JO"),
            "KAZ" => array("name" => "Kazakhstan", "phone" => "7", "currency" => "KZT", "alpha_3" => "KAZ" , "alpha_2" => "KZ"),
            "KEN" => array("name" => "Kenya", "phone" => "254", "currency" => "KES", "alpha_3" => "KEN" , "alpha_2" => "KE"),
            "KIR" => array("name" => "Kiribati", "phone" => "686", "currency" => "AUD", "alpha_3" => "KIR" , "alpha_2" => "KI"),
            "PRK" => array("name" => "Korea, Democratic People's Republic of", "phone" => "850", "currency" => "KPW", "alpha_3" => "PRK" , "alpha_2" => "KP"),
            "KOR" => array("name" => "Korea, Republic of", "phone" => "82", "currency" => "KRW", "alpha_3" => "KOR" , "alpha_2" => "KR"),
            "XKX" => array("name" => "Kosovo", "phone" => "381", "currency" => "EUR", "alpha_3" => "XKX" , "alpha_2" => "XK"),
            "KWT" => array("name" => "Kuwait", "phone" => "965", "currency" => "KWD", "alpha_3" => "KWT" , "alpha_2" => "KW"),
            "KGZ" => array("name" => "Kyrgyzstan", "phone" => "996", "currency" => "KGS", "alpha_3" => "KGZ" , "alpha_2" => "KG"),
            "LAO" => array("name" => "Lao People's Democratic Republic", "phone" => "856", "currency" => "LAK", "alpha_3" => "LAO" , "alpha_2" => "LA"),
            "LVA" => array("name" => "Latvia", "phone" => "371", "currency" => "EUR", "alpha_3" => "LVA" , "alpha_2" => "LV"),
            "LBN" => array("name" => "Lebanon", "phone" => "961", "currency" => "LBP", "alpha_3" => "LBN" , "alpha_2" => "LB"),
            "LSO" => array("name" => "Lesotho", "phone" => "266", "currency" => "LSL", "alpha_3" => "LSO" , "alpha_2" => "LS"),
            "LBR" => array("name" => "Liberia", "phone" => "231", "currency" => "LRD", "alpha_3" => "LBR" , "alpha_2" => "LR"),
            "LBY" => array("name" => "Libyan Arab Jamahiriya", "phone" => "218", "currency" => "LYD", "alpha_3" => "LBY" , "alpha_2" => "LY"),
            "LIE" => array("name" => "Liechtenstein", "phone" => "423", "currency" => "CHF", "alpha_3" => "LIE" , "alpha_2" => "LI"),
            "LTU" => array("name" => "Lithuania", "phone" => "370", "currency" => "EUR", "alpha_3" => "LTU" , "alpha_2" => "LT"),
            "LUX" => array("name" => "Luxembourg", "phone" => "352", "currency" => "EUR", "alpha_3" => "LUX" , "alpha_2" => "LU"),
            "MAC" => array("name" => "Macao", "phone" => "853", "currency" => "MOP", "alpha_3" => "MAC" , "alpha_2" => "MO"),
            "MKD" => array("name" => "Macedonia, the Former Yugoslav Republic of", "phone" => "389", "currency" => "MKD", "alpha_3" => "MKD" , "alpha_2" => "MK"),
            "MDG" => array("name" => "Madagascar", "phone" => "261", "currency" => "MGA", "alpha_3" => "MDG" , "alpha_2" => "MG"),
            "MWI" => array("name" => "Malawi", "phone" => "265", "currency" => "MWK", "alpha_3" => "MWI" , "alpha_2" => "MW"),
            "MYS" => array("name" => "Malaysia", "phone" => "60", "currency" => "MYR", "alpha_3" => "MYS" , "alpha_2" => "MY"),
            "MDV" => array("name" => "Maldives", "phone" => "960", "currency" => "MVR", "alpha_3" => "MDV" , "alpha_2" => "MV"),
            "MLI" => array("name" => "Mali", "phone" => "223", "currency" => "XOF", "alpha_3" => "MLI" , "alpha_2" => "ML"),
            "MLT" => array("name" => "Malta", "phone" => "356", "currency" => "EUR", "alpha_3" => "MLT" , "alpha_2" => "MT"),
            "MHL" => array("name" => "Marshall Islands", "phone" => "692", "currency" => "USD", "alpha_3" => "MHL" , "alpha_2" => "MH"),
            "MTQ" => array("name" => "Martinique", "phone" => "596", "currency" => "EUR", "alpha_3" => "MTQ" , "alpha_2" => "MQ"),
            "MRT" => array("name" => "Mauritania", "phone" => "222", "currency" => "MRO", "alpha_3" => "MRT" , "alpha_2" => "MR"),
            "MUS" => array("name" => "Mauritius", "phone" => "230", "currency" => "MUR", "alpha_3" => "MUS" , "alpha_2" => "MU"),
            "MYT" => array("name" => "Mayotte", "phone" => "269", "currency" => "EUR", "alpha_3" => "MYT" , "alpha_2" => "YT"),
            "MEX" => array("name" => "Mexico", "phone" => "52", "currency" => "MXN", "alpha_3" => "MEX" , "alpha_2" => "MX"),
            "FSM" => array("name" => "Micronesia, Federated States of", "phone" => "691", "currency" => "USD", "alpha_3" => "FSM" , "alpha_2" => "FM"),
            "MDA" => array("name" => "Moldova, Republic of", "phone" => "373", "currency" => "MDL", "alpha_3" => "MDA" , "alpha_2" => "MD"),
            "MCO" => array("name" => "Monaco", "phone" => "377", "currency" => "EUR", "alpha_3" => "MCO" , "alpha_2" => "MC"),
            "MNG" => array("name" => "Mongolia", "phone" => "976", "currency" => "MNT", "alpha_3" => "MNG" , "alpha_2" => "MN"),
            "MNE" => array("name" => "Montenegro", "phone" => "382", "currency" => "EUR", "alpha_3" => "MNE" , "alpha_2" => "ME"),
            "MSR" => array("name" => "Montserrat", "phone" => "1664", "currency" => "XCD", "alpha_3" => "MSR" , "alpha_2" => "MS"),
            "MAR" => array("name" => "Morocco", "phone" => "212", "currency" => "MAD", "alpha_3" => "MAR" , "alpha_2" => "MA"),
            "MOZ" => array("name" => "Mozambique", "phone" => "258", "currency" => "MZN", "alpha_3" => "MOZ" , "alpha_2" => "MZ"),
            "MMR" => array("name" => "Myanmar", "phone" => "95", "currency" => "MMK", "alpha_3" => "MMR" , "alpha_2" => "MM"),
            "NAM" => array("name" => "Namibia", "phone" => "264", "currency" => "NAD", "alpha_3" => "NAM" , "alpha_2" => "NA"),
            "NRU" => array("name" => "Nauru", "phone" => "674", "currency" => "AUD", "alpha_3" => "NRU" , "alpha_2" => "NR"),
            "NPL" => array("name" => "Nepal", "phone" => "977", "currency" => "NPR", "alpha_3" => "NPL" , "alpha_2" => "NP"),
            "NLD" => array("name" => "Netherlands", "phone" => "31", "currency" => "EUR", "alpha_3" => "NLD" , "alpha_2" => "NL"),
            "ANT" => array("name" => "Netherlands Antilles", "phone" => "599", "currency" => "ANG", "alpha_3" => "ANT" , "alpha_2" => "AN"),
            "NCL" => array("name" => "New Caledonia", "phone" => "687", "currency" => "XPF", "alpha_3" => "NCL" , "alpha_2" => "NC"),
            "NZL" => array("name" => "New Zealand", "phone" => "64", "currency" => "NZD", "alpha_3" => "NZL" , "alpha_2" => "NZ"),
            "NIC" => array("name" => "Nicaragua", "phone" => "505", "currency" => "NIO", "alpha_3" => "NIC" , "alpha_2" => "NI"),
            "NER" => array("name" => "Niger", "phone" => "227", "currency" => "XOF", "alpha_3" => "NER" , "alpha_2" => "NE"),
            "NGA" => array("name" => "Nigeria", "phone" => "234", "currency" => "NGN", "alpha_3" => "NGA" , "alpha_2" => "NG"),
            "NIU" => array("name" => "Niue", "phone" => "683", "currency" => "NZD", "alpha_3" => "NIU" , "alpha_2" => "NU"),
            "NFK" => array("name" => "Norfolk Island", "phone" => "672", "currency" => "AUD", "alpha_3" => "NFK" , "alpha_2" => "NF"),
            "MNP" => array("name" => "Northern Mariana Islands", "phone" => "1670", "currency" => "USD", "alpha_3" => "MNP" , "alpha_2" => "MP"),
            "NOR" => array("name" => "Norway", "phone" => "47", "currency" => "NOK", "alpha_3" => "NOR" , "alpha_2" => "NO"),
            "OMN" => array("name" => "Oman", "phone" => "968", "currency" => "OMR", "alpha_3" => "OMN" , "alpha_2" => "OM"),
            "PAK" => array("name" => "Pakistan", "phone" => "92", "currency" => "PKR", "alpha_3" => "PAK" , "alpha_2" => "PK"),
            "PLW" => array("name" => "Palau", "phone" => "680", "currency" => "USD", "alpha_3" => "PLW" , "alpha_2" => "PW"),
            "PSE" => array("name" => "Palestinian Territory, Occupied", "phone" => "970", "currency" => "ILS", "alpha_3" => "PSE" , "alpha_2" => "PS"),
            "PAN" => array("name" => "Panama", "phone" => "507", "currency" => "PAB", "alpha_3" => "PAN" , "alpha_2" => "PA"),
            "PNG" => array("name" => "Papua New Guinea", "phone" => "675", "currency" => "PGK", "alpha_3" => "PNG" , "alpha_2" => "PG"),
            "PRY" => array("name" => "Paraguay", "phone" => "595", "currency" => "PYG", "alpha_3" => "PRY" , "alpha_2" => "PY"),
            "PER" => array("name" => "Peru", "phone" => "51", "currency" => "PEN", "alpha_3" => "PER" , "alpha_2" => "PE"),
            "PHL" => array("name" => "Philippines", "phone" => "63", "currency" => "PHP", "alpha_3" => "PHL" , "alpha_2" => "PH"),
            "PCN" => array("name" => "Pitcairn", "phone" => "64", "currency" => "NZD", "alpha_3" => "PCN" , "alpha_2" => "PN"),
            "POL" => array("name" => "Poland", "phone" => "48", "currency" => "PLN", "alpha_3" => "POL" , "alpha_2" => "PL"),
            "PRT" => array("name" => "Portugal", "phone" => "351", "currency" => "EUR", "alpha_3" => "PRT" , "alpha_2" => "PT"),
            "PRI" => array("name" => "Puerto Rico", "phone" => "1787", "currency" => "USD", "alpha_3" => "PRI" , "alpha_2" => "PR"),
            "QAT" => array("name" => "Qatar", "phone" => "974", "currency" => "QAR", "alpha_3" => "QAT" , "alpha_2" => "QA"),
            "REU" => array("name" => "Reunion", "phone" => "262", "currency" => "EUR", "alpha_3" => "REU" , "alpha_2" => "RE"),
            "ROM" => array("name" => "Romania", "phone" => "40", "currency" => "RON", "alpha_3" => "ROM" , "alpha_2" => "RO"),
            "RUS" => array("name" => "Russian Federation", "phone" => "70", "currency" => "RUB", "alpha_3" => "RUS" , "alpha_2" => "RU"),
            "RWA" => array("name" => "Rwanda", "phone" => "250", "currency" => "RWF", "alpha_3" => "RWA" , "alpha_2" => "RW"),
            "BLM" => array("name" => "Saint Barthelemy", "phone" => "590", "currency" => "EUR", "alpha_3" => "BLM" , "alpha_2" => "BL"),
            "SHN" => array("name" => "Saint Helena", "phone" => "290", "currency" => "SHP", "alpha_3" => "SHN" , "alpha_2" => "SH"),
            "KNA" => array("name" => "Saint Kitts and Nevis", "phone" => "1869", "currency" => "XCD", "alpha_3" => "KNA" , "alpha_2" => "KN"),
            "LCA" => array("name" => "Saint Lucia", "phone" => "1758", "currency" => "XCD", "alpha_3" => "LCA" , "alpha_2" => "LC"),
            "MAF" => array("name" => "Saint Martin", "phone" => "590", "currency" => "EUR", "alpha_3" => "MAF" , "alpha_2" => "MF"),
            "SPM" => array("name" => "Saint Pierre and Miquelon", "phone" => "508", "currency" => "EUR", "alpha_3" => "SPM" , "alpha_2" => "PM"),
            "VCT" => array("name" => "Saint Vincent and the Grenadines", "phone" => "1784", "currency" => "XCD", "alpha_3" => "VCT" , "alpha_2" => "VC"),
            "WSM" => array("name" => "Samoa", "phone" => "684", "currency" => "WST", "alpha_3" => "WSM" , "alpha_2" => "WS"),
            "SMR" => array("name" => "San Marino", "phone" => "378", "currency" => "EUR", "alpha_3" => "SMR" , "alpha_2" => "SM"),
            "STP" => array("name" => "Sao Tome and Principe", "phone" => "239", "currency" => "STD", "alpha_3" => "STP" , "alpha_2" => "ST"),
            "SAU" => array("name" => "Saudi Arabia", "phone" => "966", "currency" => "SAR", "alpha_3" => "SAU" , "alpha_2" => "SA"),
            "SEN" => array("name" => "Senegal", "phone" => "221", "currency" => "XOF", "alpha_3" => "SEN" , "alpha_2" => "SN"),
            "SRB" => array("name" => "Serbia", "phone" => "381", "currency" => "RSD", "alpha_3" => "SRB" , "alpha_2" => "RS"),
            "SCG" => array("name" => "Serbia and Montenegro", "phone" => "381", "currency" => "RSD", "alpha_3" => "SCG" , "alpha_2" => "CS"),
            "SYC" => array("name" => "Seychelles", "phone" => "248", "currency" => "SCR", "alpha_3" => "SYC" , "alpha_2" => "SC"),
            "SLE" => array("name" => "Sierra Leone", "phone" => "232", "currency" => "SLL", "alpha_3" => "SLE" , "alpha_2" => "SL"),
            "SGP" => array("name" => "Singapore", "phone" => "65", "currency" => "SGD", "alpha_3" => "SGP" , "alpha_2" => "SG"),
            "SXM" => array("name" => "Sint Maarten", "phone" => "1", "currency" => "ANG", "alpha_3" => "SXM" , "alpha_2" => "SX"),
            "SVK" => array("name" => "Slovakia", "phone" => "421", "currency" => "EUR", "alpha_3" => "SVK" , "alpha_2" => "SK"),
            "SVN" => array("name" => "Slovenia", "phone" => "386", "currency" => "EUR", "alpha_3" => "SVN" , "alpha_2" => "SI"),
            "SLB" => array("name" => "Solomon Islands", "phone" => "677", "currency" => "SBD", "alpha_3" => "SLB" , "alpha_2" => "SB"),
            "SOM" => array("name" => "Somalia", "phone" => "252", "currency" => "SOS", "alpha_3" => "SOM" , "alpha_2" => "SO"),
            "ZAF" => array("name" => "South Africa", "phone" => "27", "currency" => "ZAR", "alpha_3" => "ZAF" , "alpha_2" => "ZA"),
            "SGS" => array("name" => "South Georgia and the South Sandwich Islands", "phone" => "500", "currency" => "GBP", "alpha_3" => "SGS" , "alpha_2" => "GS"),
            "SSD" => array("name" => "South Sudan", "phone" => "211", "currency" => "SSP", "alpha_3" => "SSD" , "alpha_2" => "SS"),
            "ESP" => array("name" => "Spain", "phone" => "34", "currency" => "EUR", "alpha_3" => "ESP" , "alpha_2" => "ES"),
            "LKA" => array("name" => "Sri Lanka", "phone" => "94", "currency" => "LKR", "alpha_3" => "LKA" , "alpha_2" => "LK"),
            "SDN" => array("name" => "Sudan", "phone" => "249", "currency" => "SDG", "alpha_3" => "SDN" , "alpha_2" => "SD"),
            "SUR" => array("name" => "Suriname", "phone" => "597", "currency" => "SRD", "alpha_3" => "SUR" , "alpha_2" => "SR"),
            "SJM" => array("name" => "Svalbard and Jan Mayen", "phone" => "47", "currency" => "NOK", "alpha_3" => "SJM" , "alpha_2" => "SJ"),
            "SWZ" => array("name" => "Swaziland", "phone" => "268", "currency" => "SZL", "alpha_3" => "SWZ" , "alpha_2" => "SZ"),
            "SWE" => array("name" => "Sweden", "phone" => "46", "currency" => "SEK", "alpha_3" => "SWE" , "alpha_2" => "SE"),
            "CHE" => array("name" => "Switzerland", "phone" => "41", "currency" => "CHF", "alpha_3" => "CHE" , "alpha_2" => "CH"),
            "SYR" => array("name" => "Syrian Arab Republic", "phone" => "963", "currency" => "SYP", "alpha_3" => "SYR" , "alpha_2" => "SY"),
            "TWN" => array("name" => "Taiwan, Province of China", "phone" => "886", "currency" => "TWD", "alpha_3" => "TWN" , "alpha_2" => "TW"),
            "TJK" => array("name" => "Tajikistan", "phone" => "992", "currency" => "TJS", "alpha_3" => "TJK" , "alpha_2" => "TJ"),
            "TZA" => array("name" => "Tanzania, United Republic of", "phone" => "255", "currency" => "TZS", "alpha_3" => "TZA" , "alpha_2" => "TZ"),
            "THA" => array("name" => "Thailand", "phone" => "66", "currency" => "THB", "alpha_3" => "THA" , "alpha_2" => "TH"),
            "TLS" => array("name" => "Timor-Leste", "phone" => "670", "currency" => "USD", "alpha_3" => "TLS" , "alpha_2" => "TL"),
            "TGO" => array("name" => "Togo", "phone" => "228", "currency" => "XOF", "alpha_3" => "TGO" , "alpha_2" => "TG"),
            "TKL" => array("name" => "Tokelau", "phone" => "690", "currency" => "NZD", "alpha_3" => "TKL" , "alpha_2" => "TK"),
            "TON" => array("name" => "Tonga", "phone" => "676", "currency" => "TOP", "alpha_3" => "TON" , "alpha_2" => "TO"),
            "TTO" => array("name" => "Trinidad and Tobago", "phone" => "1868", "currency" => "TTD", "alpha_3" => "TTO" , "alpha_2" => "TT"),
            "TUN" => array("name" => "Tunisia", "phone" => "216", "currency" => "TND", "alpha_3" => "TUN" , "alpha_2" => "TN"),
            "TUR" => array("name" => "Turkey", "phone" => "90", "currency" => "TRY", "alpha_3" => "TUR" , "alpha_2" => "TR"),
            "TKM" => array("name" => "Turkmenistan", "phone" => "7370", "currency" => "TMT", "alpha_3" => "TKM" , "alpha_2" => "TM"),
            "TCA" => array("name" => "Turks and Caicos Islands", "phone" => "1649", "currency" => "USD", "alpha_3" => "TCA" , "alpha_2" => "TC"),
            "TUV" => array("name" => "Tuvalu", "phone" => "688", "currency" => "AUD", "alpha_3" => "TUV" , "alpha_2" => "TV"),
            "UGA" => array("name" => "Uganda", "phone" => "256", "currency" => "UGX", "alpha_3" => "UGA" , "alpha_2" => "UG"),
            "UKR" => array("name" => "Ukraine", "phone" => "380", "currency" => "UAH", "alpha_3" => "UKR" , "alpha_2" => "UA"),
            "ARE" => array("name" => "United Arab Emirates", "phone" => "971", "currency" => "AED", "alpha_3" => "ARE" , "alpha_2" => "AE"),
            "GBR" => array("name" => "United Kingdom", "phone" => "44", "currency" => "GBP", "alpha_3" => "GBR" , "alpha_2" => "GB"),
            "USA" => array("name" => "United States", "phone" => "1", "currency" => "USD", "alpha_3" => "USA" , "alpha_2" => "US"),
            "UMI" => array("name" => "United States Minor Outlying Islands", "phone" => "1", "currency" => "USD", "alpha_3" => "UMI" , "alpha_2" => "UM"),
            "URY" => array("name" => "Uruguay", "phone" => "598", "currency" => "UYU", "alpha_3" => "URY" , "alpha_2" => "UY"),
            "UZB" => array("name" => "Uzbekistan", "phone" => "998", "currency" => "UZS", "alpha_3" => "UZB" , "alpha_2" => "UZ"),
            "VUT" => array("name" => "Vanuatu", "phone" => "678", "currency" => "VUV", "alpha_3" => "VUT" , "alpha_2" => "VU"),
            "VEN" => array("name" => "Venezuela", "phone" => "58", "currency" => "VEF", "alpha_3" => "VEN" , "alpha_2" => "VE"),
            "VNM" => array("name" => "Viet Nam", "phone" => "84", "currency" => "VND", "alpha_3" => "VNM" , "alpha_2" => "VN"),
            "VGB" => array("name" => "Virgin Islands, British", "phone" => "1284", "currency" => "USD", "alpha_3" => "VGB" , "alpha_2" => "VG"),
            "VIR" => array("name" => "Virgin Islands, U.s.", "phone" => "1340", "currency" => "USD", "alpha_3" => "VIR" , "alpha_2" => "VI"),
            "WLF" => array("name" => "Wallis and Futuna", "phone" => "681", "currency" => "XPF", "alpha_3" => "WLF" , "alpha_2" => "WF"),
            "ESH" => array("name" => "Western Sahara", "phone" => "212", "currency" => "MAD", "alpha_3" => "ESH" , "alpha_2" => "EH"),
            "YEM" => array("name" => "Yemen", "phone" => "967", "currency" => "YER", "alpha_3" => "YEM" , "alpha_2" => "YE"),
            "ZMB" => array("name" => "Zambia", "phone" => "260", "currency" => "ZMW", "alpha_3" => "ZMB" , "alpha_2" => "ZM"),
            "ZWE" => array("name" => "Zimbabwe", "phone" => "263", "currency" => "ZWL", "alpha_3" => "ZWE" , "alpha_2" => "ZW"),
        );
    }
}