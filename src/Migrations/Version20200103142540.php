<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200103142540 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide (id INT AUTO_INCREMENT NOT NULL, c_uf VARCHAR(255) DEFAULT NULL, tp_amb INT DEFAULT NULL, tp_emit INT DEFAULT NULL, tp_transp VARCHAR(255) DEFAULT NULL, `mod` INT DEFAULT NULL, serie INT DEFAULT NULL, n_mdf VARCHAR(255) DEFAULT NULL, c_mdf VARCHAR(255) DEFAULT NULL, c_dv INT DEFAULT NULL, modal INT DEFAULT NULL, dh_emi DATETIME NOT NULL, tp_emis INT DEFAULT NULL, proc_emi INT DEFAULT NULL, ver_proc VARCHAR(255) DEFAULT NULL, ufini VARCHAR(255) DEFAULT NULL, uffim VARCHAR(255) DEFAULT NULL, dh_ini_viagem DATETIME NOT NULL, ind_canal_verde TINYINT(1) DEFAULT NULL, ind_carrega_posterior TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide');
    }
}
