<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220706061227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assign (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, approver_id INT DEFAULT NULL, equipment_id INT NOT NULL, status_id INT NOT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, INDEX IDX_7222A9A1A76ED395 (user_id), INDEX IDX_7222A9A1BB23766C (approver_id), UNIQUE INDEX UNIQ_7222A9A1517FE9FE (equipment_id), INDEX IDX_7222A9A16BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1BB23766C FOREIGN KEY (approver_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A16BF700BD FOREIGN KEY (status_id) REFERENCES assign_status (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE assign');
    }
}
