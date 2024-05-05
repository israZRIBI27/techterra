<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416130337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY comments_ibfk_2');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY comments_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_2');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY participant_ibfk_1');
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY participant_ibfk_2');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY category_id');
        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY user_id');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY votes_ibfk_1');
        $this->addSql('ALTER TABLE votes DROP FOREIGN KEY votes_ibfk_2');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE threads');
        $this->addSql('DROP TABLE topics');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE votes');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEA21214B7');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (comment_id INT AUTO_INCREMENT NOT NULL, id_news INT DEFAULT NULL, user_id INT DEFAULT NULL, author VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, content TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX id_news (id_news), INDEX user_id (user_id), PRIMARY KEY(comment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE events (id_event INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, date DATE DEFAULT NULL, lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, prix DOUBLE PRECISION DEFAULT NULL, nb_max INT DEFAULT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE news (id_news INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, author VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, content TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, likes INT DEFAULT NULL, PRIMARY KEY(id_news)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (user_id INT DEFAULT NULL, id_product INT DEFAULT NULL, INDEX user_id (user_id), INDEX id_product (id_product)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participant (user_id INT DEFAULT NULL, id_event INT DEFAULT NULL, INDEX id_event (id_event), INDEX user_id (user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id_product INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, product_price DOUBLE PRECISION DEFAULT NULL, description TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_product)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE threads (thread_id INT NOT NULL, user_id INT NOT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, content TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT NULL, INDEX user_id (user_id), INDEX category_id (category_id), PRIMARY KEY(thread_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE topics (category_id INT NOT NULL, category_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (user_id INT NOT NULL, user_username VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_password VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_firstname VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_lastname VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_birthday VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_gender VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, user_picture VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE votes (vote_id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, post_id INT NOT NULL, vote_type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX user_id (user_id), INDEX post_id (post_id), PRIMARY KEY(vote_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT comments_ibfk_2 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT comments_ibfk_1 FOREIGN KEY (id_news) REFERENCES news (id_news)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_2 FOREIGN KEY (id_product) REFERENCES product (id_product)');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT participant_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT participant_ibfk_2 FOREIGN KEY (id_event) REFERENCES events (id_event)');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT category_id FOREIGN KEY (category_id) REFERENCES topics (category_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES user (user_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT votes_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE votes ADD CONSTRAINT votes_ibfk_2 FOREIGN KEY (post_id) REFERENCES threads (thread_id)');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEA21214B7');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
