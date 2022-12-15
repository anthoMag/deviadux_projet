<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221215092342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenements DROP FOREIGN KEY FK_E10AD400CCF9E01E');
        $this->addSql('DROP INDEX IDX_E10AD400CCF9E01E ON evenements');
        $this->addSql('ALTER TABLE evenements CHANGE image image VARCHAR(50) DEFAULT NULL, CHANGE departement_id dep_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenements ADD CONSTRAINT FK_E10AD400814AA86C FOREIGN KEY (dep_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_E10AD400814AA86C ON evenements (dep_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenements DROP FOREIGN KEY FK_E10AD400814AA86C');
        $this->addSql('DROP INDEX IDX_E10AD400814AA86C ON evenements');
        $this->addSql('ALTER TABLE evenements CHANGE image image VARCHAR(20) DEFAULT NULL, CHANGE dep_id departement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenements ADD CONSTRAINT FK_E10AD400CCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_E10AD400CCF9E01E ON evenements (departement_id)');
    }
}
