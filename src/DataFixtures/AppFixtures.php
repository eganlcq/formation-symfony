<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Faker\Factory;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Image;
use App\Entity\Booking;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker      = Factory::create('fr-FR');
        $adminRole  = new Role();

        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        $adminUser  = new User();

        $adminUser->setFirstName('Egan')
                  ->setLastName('Lecocq')
                  ->setEmail('e.lecocq@hotmail.com')
                  ->setHash($this->encoder->encodePassword($adminUser, 'password'))
                  ->setPicture('http://avatars.io/instagram/eganlcq')
                  ->setIntroduction($faker->sentence())
                  ->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
                  ->addUserRole($adminRole);

        $manager->persist($adminUser);

        $users      = [];
        $genres     = ['men', 'women'];

        for($i = 1; $i <= 10; $i++) {

            $user               = new User();
            $genre              = $faker->randomElement($genres);
            $pictureId          = $faker->numberBetween(1, 99) . '.jpg';

            $userPicture        = 'https://randomuser.me/api/portraits/' . $genre . '/' . $pictureId;
            $userFirstName      = $faker->firstname($genre);
            $userLastName       = $faker->lastname;
            $userEmail          = $faker->email;
            $userIntroduction   = $faker->sentence();
            $userDescription    = '<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>';
            $userHash           = $this->encoder->encodePassword($user, 'password');

            $user->setFirstName($userFirstName)
                 ->setLastName($userLastName)
                 ->setEmail($userEmail)
                 ->setIntroduction($userIntroduction)
                 ->setDescription($userDescription)
                 ->setHash($userHash)
                 ->setPicture($userPicture);

            $manager->persist($user);
            $users[] = $user;
        }

        for($i = 1; $i <= 30; $i++) {

            $ad             = new Ad();
            $adTitle        = $faker->sentence(6);
            $adCoverImage   = 'https://loremflickr.com/1000/350';
            $adIntroduction = $faker->paragraph(2);
            $adContent      = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';
            $adPrice        = mt_rand(40, 200);
            $adRooms        = mt_rand(1, 5);
            $adAuthor       = $users[mt_rand(0, count($users) - 1)];

            $ad->setTitle($adTitle)
               ->setCoverImage($adCoverImage)
               ->setIntroduction($adIntroduction)
               ->setContent($adContent)
               ->setPrice($adPrice)
               ->setRooms($adRooms)
               ->setAuthor($adAuthor);

            for($j = 1; $j <= mt_rand(2, 5); $j++) {

                $image          = new Image();
                $imageURL       = 'https://loremflickr.com/640/480';
                $imageCaption   = $faker->sentence();
                $imageAd        = $ad;

                $image->setUrl($imageURL)
                      ->setCaption($imageCaption)
                      ->setAd($imageAd);

                $manager->persist($image);
            }

            for($j = 1; $j <= mt_rand(0, 10); $j++) {

                $booking            = new Booking();
                $bookingStartDate   = $faker->dateTimeBetween('-3 months');
                $bookingCreatedAt   = $faker->dateTimeBetween('-6 months', '-3 months');
                $duration           = mt_rand(3, 10);
                $bookingEndDate     = (clone $bookingStartDate)->modify("+$duration days");
                $bookingAmount      = $ad->getPrice() * $duration;
                $bookingBooker      = $users[mt_rand(0, count($users) - 1)];
                $bookingComment     = $faker->paragraph();

                $booking->setBooker($bookingBooker)
                        ->setAd($ad)
                        ->setStartDate($bookingStartDate)
                        ->setEndDate($bookingEndDate)
                        ->setCreatedAt($bookingCreatedAt)
                        ->setAmount($bookingAmount)
                        ->setComment($bookingComment);

                $manager->persist($booking);

                if(mt_rand(0, 1)) {

                    $comment        = new Comment();
                    $commentContent = $faker->paragraph();
                    $commentRating  = mt_rand(1, 5);
                    $commentAuthor  = $bookingBooker;

                    $comment->setContent($commentContent)
                            ->setRating($commentRating)
                            ->setAuthor($commentAuthor)
                            ->setAd($ad);

                    $manager->persist($comment);
                }
            }

            $manager->persist($ad);
        }
        
        $manager->flush();
    }
}
