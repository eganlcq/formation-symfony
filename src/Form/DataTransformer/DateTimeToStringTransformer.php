<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DateTimeToStringTransformer implements DataTransformerInterface {

    public function transform($date) {

        if($date === null) {

            return '';
        }
        return $date->format('d/m/Y');
    }

    public function reverseTransform($string) {

        if($string === null) {

            throw new TransformationFailedException("Vous devez fournir une date");
        }

        $date = \DateTime::createFromFormat('d/m/Y', $string);

        if($date === false) {

            throw new TransformationFailedException("Le format de la date est incorrect");
        }

        return $date;
    }
}