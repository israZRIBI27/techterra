<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401024014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE replies (reply_id VARCHAR(255) NOT NULL, user_id INT DEFAULT NULL, thread_id INT DEFAULT NULL, content TEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, INDEX IDX_A000672AA76ED395 (user_id), INDEX IDX_A000672AE2904019 (thread_id), PRIMARY KEY(reply_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE threads (thread_id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content TEXT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_6F8E3DDDA76ED395 (user_id), INDEX IDX_6F8E3DDD12469DE2 (category_id), PRIMARY KEY(thread_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE topics (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (user_id INT AUTO_INCREMENT NOT NULL, user_username VARCHAR(50) NOT NULL, user_email VARCHAR(50) NOT NULL, user_password VARCHAR(50) NOT NULL, user_firstname VARCHAR(50) NOT NULL, user_lastname VARCHAR(50) NOT NULL, user_birthday DATE NOT NULL, user_gender VARCHAR(200) NOT NULL, user_picture VARCHAR(200) NOT NULL, user_phonenumber VARCHAR(255) NOT NULL, user_level INT DEFAULT 1 NOT NULL, user_role VARCHAR(5) DEFAULT \'user\' NOT NULL, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE votes (vote_id VARCHAR(255) NOT NULL, user_id INT DEFAULT NULL, thread_id INT DEFAULT NULL, vote_type VARCHAR(255) NOT NULL, INDEX IDX_518B7ACFA76ED395 (user_id), INDEX IDX_518B7ACFE2904019 (thread_id), PRIMARY KEY(vote_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE replies ADD CONSTRAINT FK_A000672AA76ED395 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE replies ADD CONSTRAINT FK_A000672AE2904019 FOREIGN KEY (thread_id) REFERENCES threads (thread_id)');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT FK_6F8E3DDDA76ED395 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT FK_6F8E3DDD12469DE2 FOREIGN KEY (category_id) REFERENCES topics (category_id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACFA76ED395 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACFE2904019 FOREIGN KEY (thread_id) REFERENCES threads (thread_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE replies DROP FOREIGN KEY FK_A000672AA76ED395');
        $this->addSql('ALTER TABLE replies DROP FOREIGN KEY FK_A000672AE2904019');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY FK_6F8E3DDDA76ED395');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY FK_6F8E3DDD12469DE2');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACFA76ED395');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACFE2904019');
        $this->addSql('DROP TABLE replies');
        $this->addSql('DROP TABLE threads');
        $this->addSql('DROP TABLE topics');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE votes');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
