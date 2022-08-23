<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200802184818 extends AbstractMigration
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
        ("OPPO A37f", "Cash on Delivery Eligible.<br/> Shipping Speed to Delivery.<br/> EMIs from $200/month.<br/>
        Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C. <br/> 3 GB RAM | 24 GB ROM | Expandable Upto 256 GB.<br/> 5.5 inch Full HD Display.<br/>
        15MP Rear Camera | 8MP Front Camera. <br/> 3300 mAh Battery.Exynos 7870 Octa Core 1.6GHz Processor", "/images/m2.jpg"),
        ("Apple iPhone X", "Cash on Delivery Eligible.<br/> Shipping Speed to Delivery.<br/> EMIs from $300/month.<br/>
        Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C. <br/> 3 GB RAM | 64 GB ROM .<br/> 5.8 inch Full HD Display.<br/>
        15MP Rear Camera | 8MP Front Camera. <br/> 3300 mAh Battery.<br/> Apple A11 Bionic Processor", "/images/m3.jpg")
        
        
');
        $this->addSql('INSERT INTO category_product (category_id, product_id) VALUES (6, 3), (6, 4)');
        $this->addSql('INSERT INTO price (product_id, value, is_current) VALUES (3 ,300, 1), (4, 500, 1)');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
