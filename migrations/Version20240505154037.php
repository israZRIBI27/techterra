<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240505154037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (comment_id INT AUTO_INCREMENT NOT NULL, news_id INT DEFAULT NULL, user_id INT DEFAULT NULL, content LONGTEXT NOT NULL, time DATETIME DEFAULT CURRENT_TIMESTAMP, INDEX IDX_5F9E962AB5A459A0 (news_id), INDEX IDX_5F9E962AA76ED395 (user_id), PRIMARY KEY(comment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id_news INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, author VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, reports INT NOT NULL, views INT NOT NULL, PRIMARY KEY(id_news)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reports (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, newsid INT NOT NULL, report_status VARCHAR(255) NOT NULL, INDEX IDX_F11FA745A76ED395 (user_id), INDEX IDX_F11FA7458C510C37 (newsid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AB5A459A0 FOREIGN KEY (news_id) REFERENCES news (id_news)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA745A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA7458C510C37 FOREIGN KEY (newsid) REFERENCES news (id_news)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AB5A459A0');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AA76ED395');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA745A76ED395');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA7458C510C37');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE reports');
    }
}
