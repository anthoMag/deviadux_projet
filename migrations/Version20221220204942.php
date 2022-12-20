<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221220204942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departements (id INT AUTO_INCREMENT NOT NULL, reg_id INT DEFAULT NULL, name VARCHAR(50) DEFAULT NULL, code_dep VARCHAR(3) DEFAULT NULL, INDEX IDX_CF7489B2990B26CC (reg_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenements (id INT AUTO_INCREMENT NOT NULL, dep_id INT DEFAULT NULL, title VARCHAR(50) DEFAULT NULL, image VARCHAR(50) DEFAULT NULL, periode VARCHAR(50) DEFAULT NULL, level_alert VARCHAR(10) DEFAULT NULL, pic_de_crue DOUBLE PRECISION DEFAULT NULL, lieu VARCHAR(50) DEFAULT NULL, coordonnee_x DOUBLE PRECISION DEFAULT NULL, coordonnee_y DOUBLE PRECISION DEFAULT NULL, INDEX IDX_E10AD400814AA86C (dep_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departements ADD CONSTRAINT FK_CF7489B2990B26CC FOREIGN KEY (reg_id) REFERENCES regions (id)');
        $this->addSql('ALTER TABLE evenements ADD CONSTRAINT FK_E10AD400814AA86C FOREIGN KEY (dep_id) REFERENCES departements (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements DROP FOREIGN KEY FK_CF7489B2990B26CC');
        $this->addSql('ALTER TABLE evenements DROP FOREIGN KEY FK_E10AD400814AA86C');
        $this->addSql('DROP TABLE departements');
        $this->addSql('DROP TABLE evenements');
        $this->addSql('DROP TABLE regions');
    }
}
