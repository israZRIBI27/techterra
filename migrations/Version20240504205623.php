<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240504205623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE replies (reply_id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, threads_id INT NOT NULL, content TEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_A000672AA76ED395 (user_id), INDEX IDX_A000672A83F885A5 (threads_id), PRIMARY KEY(reply_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE threads (thread_id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, category_id INT DEFAULT NULL, title VARCHAR(80) NOT NULL, content TEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_6F8E3DDDA76ED395 (user_id), INDEX IDX_6F8E3DDD12469DE2 (category_id), PRIMARY KEY(thread_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE topics (category_id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, user_username VARCHAR(50) NOT NULL, user_firstname VARCHAR(50) NOT NULL, user_lastname VARCHAR(50) NOT NULL, user_birthday DATE NOT NULL, user_gender VARCHAR(200) NOT NULL, user_picture VARCHAR(200) NOT NULL, user_phonenumber VARCHAR(255) NOT NULL, user_level INT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE votes (vote_id INT AUTO_INCREMENT NOT NULL, id INT DEFAULT NULL, thread_id INT DEFAULT NULL, vote_type VARCHAR(8) NOT NULL, INDEX IDX_518B7ACFBF396750 (id), INDEX IDX_518B7ACFE2904019 (thread_id), PRIMARY KEY(vote_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE replies ADD CONSTRAINT FK_A000672AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE replies ADD CONSTRAINT FK_A000672A83F885A5 FOREIGN KEY (threads_id) REFERENCES threads (thread_id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT FK_6F8E3DDDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT FK_6F8E3DDD12469DE2 FOREIGN KEY (category_id) REFERENCES topics (category_id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACFBF396750 FOREIGN KEY (id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT FK_518B7ACFE2904019 FOREIGN KEY (thread_id) REFERENCES threads (thread_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE replies DROP FOREIGN KEY FK_A000672AA76ED395');
        $this->addSql('ALTER TABLE replies DROP FOREIGN KEY FK_A000672A83F885A5');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY FK_6F8E3DDDA76ED395');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY FK_6F8E3DDD12469DE2');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACFBF396750');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY FK_518B7ACFE2904019');
        $this->addSql('DROP TABLE replies');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE threads');
        $this->addSql('DROP TABLE topics');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE votes');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
