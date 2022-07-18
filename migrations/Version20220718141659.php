<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220718141659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assign DROP INDEX UNIQ_7222A9A1517FE9FE, ADD INDEX IDX_7222A9A1517FE9FE (equipment_id)');
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A16BF700BD');
        $this->addSql('ALTER TABLE assign DROP FOREIGN KEY FK_7222A9A1BB23766C');
        $this->addSql('DROP INDEX IDX_7222A9A16BF700BD ON assign');
        $this->addSql('DROP INDEX IDX_7222A9A1BB23766C ON assign');
        $this->addSql('ALTER TABLE assign ADD deleted_at DATETIME DEFAULT NULL, DROP approver_id, DROP status_id, CHANGE equipment_id equipment_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipment ADD delete_at DATETIME DEFAULT NULL, ADD deleted_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assign DROP INDEX IDX_7222A9A1517FE9FE, ADD UNIQUE INDEX UNIQ_7222A9A1517FE9FE (equipment_id)');
        $this->addSql('ALTER TABLE assign ADD approver_id INT DEFAULT NULL, ADD status_id INT NOT NULL, DROP deleted_at, CHANGE equipment_id equipment_id INT NOT NULL');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A16BF700BD FOREIGN KEY (status_id) REFERENCES assign_status (id)');
        $this->addSql('ALTER TABLE assign ADD CONSTRAINT FK_7222A9A1BB23766C FOREIGN KEY (approver_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7222A9A16BF700BD ON assign (status_id)');
        $this->addSql('CREATE INDEX IDX_7222A9A1BB23766C ON assign (approver_id)');
        $this->addSql('ALTER TABLE equipment DROP delete_at, DROP deleted_at');
    }
}
