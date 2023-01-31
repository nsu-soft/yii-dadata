<?php

namespace nsusoft\dadata\plugins;

use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;

class TimezoneConverter
{
    /**
     * Converts timezone from standard address to IANA format.
     * Only Russia is supported.
     * @param CleanAddressInterface $address
     * @return string|null
     */
    public static function toIana(CleanAddressInterface $address): ?string
    {
        if ('RU' !== $address->getCountryIsoCode()) {
            return null;
        }

        if ('UTC+2' === $address->getTimezone()) {
            return 'Europe/Kaliningrad';
        }

        if ('UTC+3' === $address->getTimezone()) {
            if ('Кировская' === $address->getRegion()) {
                return 'Europe/Kirov';
            }

            if ('Волгоградская' === $address->getRegion()) {
                return 'Europe/Volgograd';
            }

            return 'Europe/Moscow';
        }

        if ('UTC+4' === $address->getTimezone()) {
            if ('Астраханская' === $address->getRegion()) {
                return 'Europe/Astrakhan';
            }

            if ('Саратовская' === $address->getRegion()) {
                return 'Europe/Saratov';
            }

            if ('Ульяновская' === $address->getRegion()) {
                return 'Europe/Ulyanovsk';
            }

            return 'Europe/Samara';
        }

        if ('UTC+5' === $address->getTimezone()) {
            return 'Asia/Yekaterinburg';
        }

        if ('UTC+6' === $address->getTimezone()) {
            return 'Asia/Omsk';
        }

        if ('UTC+7' === $address->getTimezone()) {
            if (in_array($address->getRegion(), ['Алтайский', 'Алтай'])) {
                return 'Asia/Barnaul';
            }

            if ('Кемеровская область - Кузбасс' === $address->getRegion()) {
                return 'Asia/Novokuznetsk';
            }

            if ('Новосибирская' === $address->getRegion()) {
                return 'Asia/Novosibirsk';
            }

            if ('Томская' === $address->getRegion()) {
                return 'Asia/Tomsk';
            }

            return 'Asia/Krasnoyarsk';
        }

        if ('UTC+8' === $address->getTimezone()) {
            return 'Asia/Irkutsk';
        }

        if ('UTC+9' === $address->getTimezone()) {
            if ('Забайкальский' === $address->getRegion()) {
                return 'Asia/Chita';
            }

            if ('Саха /Якутия/' === $address->getRegion() && in_array($address->getArea(), ['Томпонский', 'Усть-Майский'])) {
                return 'Asia/Khandyga';
            }

            return 'Asia/Yakutsk';
        }

        if ('UTC+10' === $address->getTimezone()) {
            if ('Саха /Якутия/' === $address->getRegion() && 'Оймяконский' === $address->getArea()) {
                return 'Asia/Ust-Nera';
            }

            return 'Asia/Vladivostok';
        }

        if ('UTC+11' === $address->getTimezone()) {
            if ('Магаданская' === $address->getRegion()) {
                return 'Asia/Magadan';
            }

            if ('Сахалинская' === $address->getRegion()) {
                return 'Asia/Sakhalin';
            }

            return 'Asia/Srednekolymsk';
        }

        if ('UTC+12' === $address->getTimezone()) {
            if ('Камчатский' === $address->getRegion()) {
                return 'Asia/Kamchatka';
            }

            if ('Чукотский' === $address->getRegion()) {
                return 'Asia/Anadyr';
            }
        }

        return 'Europe/Moscow';
    }
}