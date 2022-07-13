<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220706155324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assign (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, approver_id INT DEFAULT NULL, equipment_id INT NOT NULL, status_id INT NOT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, INDEX IDX_7222A9A1A76ED395 (user_id), INDEX IDX_7222A9A1BB23766C (approver_id), UNIQUE INDEX UNIQ_7222A9A1517FE9FE (equipment_id), INDEX IDX_7222A9A16BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE assign_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_D338D58312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1BB23766C FOREIGN KEY (approver_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A16BF700BD FOREIGN KEY (status_id) REFERENCES assign_status (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D58312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category ADD name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A16BF700BD');
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A1517FE9FE');
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A1A76ED395');
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A1BB23766C');
        $this->addSql('DROP TABLE assign');
        $this->addSql('DROP TABLE assign_status');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE category DROP name');
    }
}
