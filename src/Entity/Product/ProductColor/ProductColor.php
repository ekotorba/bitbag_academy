<?php
/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace App\Entity\Product;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_color")
 */
class ProductColor
{

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column (type="string")
     */
    protected $name;


    protected function getId(): int
    {
        return $this->id;
    }


    protected function getName(): ?string
    {
        return $this->name;
    }


    protected function setName(string $name): void
    {
        $this->name = $name;
    }
}
