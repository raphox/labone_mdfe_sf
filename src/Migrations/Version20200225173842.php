<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225173842 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_inf_contratante (id INT AUTO_INCREMENT NOT NULL, cnpj VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mdfe_ide_disp (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, cnpj_forn VARCHAR(255) DEFAULT NULL, cnpj_pg VARCHAR(255) DEFAULT NULL, cpf_pg VARCHAR(255) DEFAULT NULL, n_compra VARCHAR(255) DEFAULT NULL, v_vale_ped DOUBLE PRECISION DEFAULT NULL, INDEX IDX_BAC9685A67E226E9 (mdfe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mdfe_ide_inf_ciot (id INT AUTO_INCREMENT NOT NULL, mdfe_id INT DEFAULT NULL, ciot VARCHAR(255) DEFAULT NULL, cpf VARCHAR(255) DEFAULT NULL, cnpj VARCHAR(255) DEFAULT NULL, INDEX IDX_670CF67A67E226E9 (mdfe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_disp ADD CONSTRAINT FK_BAC9685A67E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('ALTER TABLE mdfe_ide_inf_ciot ADD CONSTRAINT FK_670CF67A67E226E9 FOREIGN KEY (mdfe_id) REFERENCES mdfe_ide (id)');
        $this->addSql('ALTER TABLE mdfe_ide ADD rntrc VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_inf_contratante');
        $this->addSql('DROP TABLE mdfe_ide_disp');
        $this->addSql('DROP TABLE mdfe_ide_inf_ciot');
        $this->addSql('ALTER TABLE mdfe_ide DROP rntrc');
    }
}
