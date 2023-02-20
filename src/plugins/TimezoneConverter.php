<?php

namespace nsusoft\dadata\plugins;

use nsusoft\dadata\dto\clean\AddressDto;

class TimezoneConverter
{
    /**
     * Converts timezone from standard address to IANA format.
     * Only Russia is supported.
     * @param AddressDto $address
     * @return string|null
     */
    public static function toIana(AddressDto $address): ?string
    {
        if ('RU' !== $address->countryIsoCode) {
            return null;
        }

        if ('UTC+2' === $address->timezone) {
            return 'Europe/Kaliningrad';
        }

        if ('UTC+3' === $address->timezone) {
            if ('Кировская' === $address->region) {
                return 'Europe/Kirov';
            }

            if ('Волгоградская' === $address->region) {
                return 'Europe/Volgograd';
            }

            return 'Europe/Moscow';
        }

        if ('UTC+4' === $address->timezone) {
            if ('Астраханская' === $address->region) {
                return 'Europe/Astrakhan';
            }

            if ('Саратовская' === $address->region) {
                return 'Europe/Saratov';
            }

            if ('Ульяновская' === $address->region) {
                return 'Europe/Ulyanovsk';
            }

            return 'Europe/Samara';
        }

        if ('UTC+5' === $address->timezone) {
            return 'Asia/Yekaterinburg';
        }

        if ('UTC+6' === $address->timezone) {
            return 'Asia/Omsk';
        }

        if ('UTC+7' === $address->timezone) {
            if (in_array($address->region, ['Алтайский', 'Алтай'])) {
                return 'Asia/Barnaul';
            }

            if ('Кемеровская область - Кузбасс' === $address->region) {
                return 'Asia/Novokuznetsk';
            }

            if ('Новосибирская' === $address->region) {
                return 'Asia/Novosibirsk';
            }

            if ('Томская' === $address->region) {
                return 'Asia/Tomsk';
            }

            return 'Asia/Krasnoyarsk';
        }

        if ('UTC+8' === $address->timezone) {
            return 'Asia/Irkutsk';
        }

        if ('UTC+9' === $address->timezone) {
            if ('Забайкальский' === $address->region) {
                return 'Asia/Chita';
            }

            if ('Саха /Якутия/' === $address->region && in_array($address->area, ['Томпонский', 'Усть-Майский'])) {
                return 'Asia/Khandyga';
            }

            return 'Asia/Yakutsk';
        }

        if ('UTC+10' === $address->timezone) {
            if ('Саха /Якутия/' === $address->region && 'Оймяконский' === $address->area) {
                return 'Asia/Ust-Nera';
            }

            return 'Asia/Vladivostok';
        }

        if ('UTC+11' === $address->timezone) {
            if ('Магаданская' === $address->region) {
                return 'Asia/Magadan';
            }

            if ('Сахалинская' === $address->region) {
                return 'Asia/Sakhalin';
            }

            return 'Asia/Srednekolymsk';
        }

        if ('UTC+12' === $address->timezone) {
            if ('Камчатский' === $address->region) {
                return 'Asia/Kamchatka';
            }

            if ('Чукотский' === $address->region) {
                return 'Asia/Anadyr';
            }
        }

        return 'Europe/Moscow';
    }
}