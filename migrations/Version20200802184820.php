<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200802184820 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('UPDATE product SET description = "Cash on Delivery Eligible. Shipping Speed to Delivery. EMI starts at $958.
        3 offers from $220.00  Frost Free Double Door: Auto defrost to stop ice-build up.  Capacity 260 L: Suitable for families with 2 to 3 members. 
        Energy Rating: 3 Star.  Warranty: 1 year warranty on product and 10 years warranty on compressor
        Shelf Type: Toughened Glass to withstand the weight of heaviest vessels. Inverter Compressor: Energy efficient, less noise & more durable" WHERE id=2
        
        
        
');


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
