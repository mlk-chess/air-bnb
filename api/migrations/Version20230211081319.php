<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211081319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking ADD date_end DATE NOT NULL');
        $this->addSql('ALTER TABLE booking ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE booking ADD payment VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE booking RENAME COLUMN date TO date_start');
        $this->addSql('COMMENT ON COLUMN booking.created_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "booking" DROP date_end');
        $this->addSql('ALTER TABLE "booking" DROP created_at');
        $this->addSql('ALTER TABLE "booking" DROP payment');
        $this->addSql('ALTER TABLE "booking" RENAME COLUMN date_start TO date');
    }
}
