<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225172557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_unloading_city_document (id INT AUTO_INCREMENT NOT NULL, mdfe_ide_unloading_city_id INT DEFAULT NULL, ch_nfe VARCHAR(255) DEFAULT NULL, seg_cod_barra VARCHAR(255) DEFAULT NULL, ind_reentrega TINYINT(1) DEFAULT NULL, n_item INT DEFAULT NULL, INDEX IDX_136F634CA24F0221 (mdfe_ide_unloading_city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_unloading_city_document ADD CONSTRAINT FK_136F634CA24F0221 FOREIGN KEY (mdfe_ide_unloading_city_id) REFERENCES mdfe_ide_unloading_city (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_unloading_city_document');
    }
}
