<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505213931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE events (id_event INT AUTO_INCREMENT NOT NULL, titreevent VARCHAR(15) NOT NULL, type VARCHAR(15) NOT NULL, date VARCHAR(15) NOT NULL, lieu VARCHAR(15) NOT NULL, prix DOUBLE PRECISION NOT NULL, nb_max INT NOT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, idevenement INT DEFAULT NULL, nom VARCHAR(15) NOT NULL, montant INT NOT NULL, INDEX IDX_818CC9D4753DC1EB (idevenement), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4753DC1EB FOREIGN KEY (idevenement) REFERENCES events (id_event)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4753DC1EB');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP TABLE sponsor');
    }
}
