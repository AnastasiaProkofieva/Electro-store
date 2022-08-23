<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200802184819 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('UPDATE product SET description = "Cash on Delivery Eligible. Shipping Speed to Delivery. EMIs from $655/month.
        Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C.  3 GB RAM | 16 GB ROM | Expandable Upto 256 GB. 5.5 inch Full HD Display.
        13MP Rear Camera | 8MP Front Camera.  3300 mAh Battery.Exynos 7870 Octa Core 1.6GHz Processor" WHERE id=1
        
        
        
');


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
