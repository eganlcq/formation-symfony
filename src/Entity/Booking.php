<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Booking
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="bookings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $booker;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ad", inversedBy="bookings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ad;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type(type="datetime", message="La date doit être au bon format")
     * @Assert\GreaterThan("today", message="Vous ne pouvez pas réserver pour cette date")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type(type="datetime", message="La date doit être au bon format")
     * @Assert\GreaterThan(propertyPath="startDate", message="Votre date de départ ne peut pas être inférieure à votre date d'arrivée")
     */
    private $endDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {

        if(empty($this->createdAt)) {

            $this->createdAt = new \DateTime();
        }

        if(empty($this->amount)) {

            $this->amount = $this->ad->getPrice() * $this->getDuration();
        }
    }

    public function getDuration() {

        $diff = $this->endDate->diff($this->startDate);
        return $diff->days;
    }

    public function isBookableDates() {

        $notAvailableDateDays   = $this->ad->getNotAvailableDays();
        $bookingDateDays        = $this->getDays();

        $formatDay = function($day) {

            return $day->format('Y-m-d');
        };

        $bookingDays            = array_map($formatDay, $bookingDateDays);
        $notAvailableDays       = array_map($formatDay, $notAvailableDateDays);

        foreach($bookingDays as $day) {

            if(array_search($day, $notAvailableDays) !== false) return false;
        }

        return true;
    }

    public function getDays() {

        $resultat = range(
            $this->startDate->getTimeStamp(),
            $this->endDate->getTimeStamp(),
            24 * 60 * 60
        );

        $days = array_map(function($dayTimeStamp) {

            return new \DateTime(date('Y-m-d', $dayTimeStamp));
        }, $resultat);

        return $days;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooker(): ?User
    {
        return $this->booker;
    }

    public function setBooker(?User $booker): self
    {
        $this->booker = $booker;

        return $this;
    }

    public function getAd(): ?Ad
    {
        return $this->ad;
    }

    public function setAd(?Ad $ad): self
    {
        $this->ad = $ad;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
