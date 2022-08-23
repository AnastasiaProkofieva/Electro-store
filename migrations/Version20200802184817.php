<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200802184817 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('alter table product AUTO_INCREMENT = 1');
        $this->addSql('INSERT INTO product (title, description, image)
        VALUES 
        ("Samsung Galaxy J7 Prime (Gold, 16 GB)", "Cash on Delivery Eligible. Shipping Speed to Delivery. EMIs from $655/month.
        Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C.  3 GB RAM | 16 GB ROM | Expandable Upto 256 GB. 5.5 inch Full HD Display.
        13MP Rear Camera | 8MP Front Camera.  3300 mAh Battery.Exynos 7870 Octa Core 1.6GHz Processor", "/images/si1.jpg"),
        ("LG 260 L 3 Star Frost-Free Double-Door Refrigerator", "Cash on Delivery Eligible. Shipping Speed to Delivery. EMI starts at $958.
        3 offers from $220.00  Frost Free Double Door: Auto defrost to stop ice-build up.  Capacity 260 L: Suitable for families with 2 to 3 members. 
        Energy Rating: 3 Star.  Warranty: 1 year warranty on product and 10 years warranty on compressor
        Shelf Type: Toughened Glass to withstand the weight of heaviest vessels. Inverter Compressor: Energy efficient, less noise & more durable",
        "/images/sii1.jpg")
        
        
');
        $this->addSql('INSERT INTO category_product (category_id, product_id) VALUES (6, 1), (4, 2)');
        $this->addSql('INSERT INTO price (product_id, value, is_current) VALUES (1 ,200, 1), (2, 220, 1)');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
